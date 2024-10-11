<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\ProductImageModel;
use App\Models\ProductModel;
use App\Models\TrademarkModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $titlePage = 'Admin | Danh Sách Sản Phẩm';
        $page_menu = 'product';
        $page_sub = null;
        $listData = ProductModel::orderBy('created_at', 'desc')->paginate(20);
        foreach ($listData as $item) {
            $category = CategoryModel::find($item->category_id);
            $item->category_name = $category->name;
            $item->src = ProductImageModel::where('product_id',$item->id)->first()->src;
        }
        return view('admin.product.index', compact('titlePage', 'page_menu', 'listData', 'page_sub'));
    }

    public function create()
    {
        $titlePage = 'Admin | Danh Sách Sản Phẩm';
        $page_menu = 'product';
        $page_sub = null;
        $category = CategoryModel::where('parent_id', 0)->get();
        $trademark = TrademarkModel::all();

        return view('admin.product.create', compact('titlePage', 'page_menu', 'page_sub', 'category','trademark'));
    }

    public function store(Request $request)
    {
        try {
            $category = CategoryModel::find($request->get('category'));
            if (empty($category)) {
                return back()->with(['error' => 'Vui lòng chọn danh mục để tiếp tục']);
            }
            $category_id = $category->id;
            $category2 = CategoryModel::find($request->get('category_children'));
            if (isset($category2)) {
                $category_id = $category2->id;
            }

            $display = 0;
            if ($request->get('display') == 'on') {
                $display = 1;
            }
            $is_sale = 0;
            if ($request->get('is_sale') == 'on') {
                $is_sale = 1;
            }
            $product = new ProductModel([
                'name' => $request->get('name'),
                'slug' => Str::slug($request->get('name')),
                'sku' => $request->get('code'),
                'category_id' => $category_id??null,
                'trademark_id' => $request->get('trademark_id'),
                'price' => str_replace(",", "", $request->get('price')),
                'price_promotional' => str_replace(",", "", $request->get('price_promotional')),
                'content' => $request->get('content'),
                'describe' => $request->get('describe'),
                'display' => $display,
                'is_sale' => $is_sale,
            ]);
            $product->save();
            $this->add_img_product($request, $product->id);

            return \redirect()->route('admin.product.index')->with(['success' => 'Tạo mới sản phẩm thành công']);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function delete($id)
    {
        $product = ProductModel::find($id);
        $product_img = ProductImageModel::where('product_id',$id)->get();
        foreach ($product_img as $img){
            if ($img->src) {
                if (isset($img->src) && Storage::exists(str_replace('/storage', 'public', $img->src))) {
                    Storage::delete(str_replace('/storage', 'public', $img->src));
                }
            }
            $img->delete();
        }
        $product->delete();
        return \redirect()->route('admin.product.index')->with(['success' => 'Xóa sản phẩm thành công']);
    }

    public function edit($id)
    {
        $titlePage = 'Admin | Danh Sách Sản Phẩm';
        $page_menu = 'product';
        $page_sub = null;
        $product = ProductModel::find($id);
        $category_all = CategoryModel::where('parent_id', 0)->get();
        $cate_big = CategoryModel::find($product->category_id);
        if ($cate_big->parent_id == 0){
            $category_child = [];
        }else{
            $category_child = CategoryModel::where('parent_id',$cate_big->parent_id)->get();
        }
        $trademark = TrademarkModel::all();
        $product_img = ProductImageModel::where('product_id',$id)->get();
        return view('admin.product.edit', compact('category_child', 'titlePage', 'page_menu', 'page_sub',
            'category_all','product','product_img','cate_big','trademark'));
    }

    public function update(Request $request, $id)
    {
        try {
            $product = ProductModel::find($id);
            $category = CategoryModel::find($request->get('category'));
            if (empty($category)) {
                return back()->with(['error' => 'Vui lòng chọn danh mục để tiếp tục']);
            }
            $category_id = $category->id;
            $category2 = CategoryModel::find($request->get('category_children'));
            if (isset($category2)) {
                $category_id = $category2->id;
            }
            $display = 0;
            if ($request->display == 'on') {
                $display = 1;
            }
            $is_sale = 0;
            if ($request->is_sale == 'on') {
                $is_sale = 1;
            }

            $product->category_id = $category_id??null;
            $product->name = $request->get('name');
            $product->slug = Str::slug($request->get('name'));
            $product->sku = $request->get('code');
            $product->trademark_id = $request->get('trademark_id');
            $product->price = str_replace(",", "", $request->get('price'));
            $product->price_promotional = str_replace(",", "", $request->get('price_promotional')??0);
            $product->content = $request->get('content');
            $product->describe = $request->get('describe');
            $product->display = $display;
            $product->is_sale = $is_sale;
            $product->save();
            $this->add_img_product($request, $product->id);
            return \redirect()->route('admin.product.index')->with(['success' => 'Cập nhập sản phẩm thành công']);
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function deleteImg(Request $request)
    {
        try {
            $img = ProductImageModel::find($request->get('id'));
            if (isset($img->src) && Storage::exists(str_replace('/storage', 'public', $img->src))) {
                Storage::delete(str_replace('/storage', 'public', $img->src));
            }
            $img->delete();
            $data['status'] = true;
            return $data;
        } catch (\Exception $exception) {
            $data['status'] = false;
            $data['msg'] = $exception->getMessage();
            return $data;
        }
    }

    public function add_img_product($request, $product_id)
    {
        try {
            if ($request->hasFile('images')) {
                $file = $request->file('images');
                foreach ($file as $value) {
                    $file = $value;
                    $imagePath = Storage::url($file->store('product', 'public'));
                    $image_invest = new ProductImageModel([
                        'product_id' => $product_id,
                        'src' => $imagePath,
                    ]);
                    $image_invest->save();
                }
                return true;
            }
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
