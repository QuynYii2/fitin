<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $titlePage = 'Danh mục sản phẩm';
        $page_menu = 'category';
        $page_sub = null;
        $listData = CategoryModel::orderBy('created_at', 'desc')->paginate(20);
        foreach ($listData as $val){
            $val->nameCate = CategoryModel::find($val->parent_id)->name??'Làm danh mục cha';
        }

        return view('admin.category.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function create()
    {
        try {
            $titlePage = 'Thêm danh mục';
            $page_menu = 'category';
            $page_sub = null;
            $category = CategoryModel::all();

            return view('admin.category.create', compact('titlePage', 'page_menu', 'page_sub','category'));
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        try {
            $imagePath = null;
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('category', 'public'));
            }
            if ($request->get('is_key') == 'on'){
                $is_key = 1;
            }else{
                $is_key = 0;
            }
            if ($request->get('is_home') == 'on'){
                $is_home = 1;
            }else{
                $is_home = 0;
            }
            $category = new CategoryModel([
                'name' => $request->get('title'),
                'slug' => Str::slug($request->get('title')),
                'parent_id'=>$request->get('parent_id'),
                'src'=>$imagePath,
                'is_key'=>$is_key,
                'is_home'=>$is_home
            ]);
            $category->save();

            return redirect()->route('admin.category.index')->with(['success' => 'Tạo dữ liệu thành công']);
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete($id)
    {
        $category = CategoryModel::find($id);
        if (isset($category->src) && Storage::exists(str_replace('/storage', 'public', $category->src))) {
            Storage::delete(str_replace('/storage', 'public', $category->src));
        }
        $category->delete();

        return redirect()->route('admin.category.index')->with(['success'=>"Xóa dữ liệu thành công"]);
    }

    public function edit($id)
    {
        try {
            $data = CategoryModel::find($id);
            if (empty($data)) {
                return back()->with(['error' => 'Dữ liệu không tồn tại']);
            }
            $titlePage = 'Cập nhật danh mục';
            $page_menu = 'category';
            $page_sub = null;
            $category = CategoryModel::where('id','!=',$data->id)->get();

            return view('admin.category.edit', compact('titlePage', 'page_menu', 'page_sub', 'data','category'));
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function update($id, Request $request)
    {
        try {
            $category = CategoryModel::find($id);
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('category', 'public'));
                if (isset($category->src) && Storage::exists(str_replace('/storage', 'public', $category->src))) {
                    Storage::delete(str_replace('/storage', 'public', $category->src));
                }
                $category->src = $imagePath;
            }
            if ($request->get('is_key') == 'on'){
                $is_key = 1;
            }else{
                $is_key = 0;
            }
            if ($request->get('is_home') == 'on'){
                $is_home = 1;
            }else{
                $is_home = 0;
            }
            $category->name = $request->get('title');
            $category->slug = Str::slug($request->get('title'));
            $category->parent_id = $request->get('parent_id');
            $category->is_key = $is_key;
            $category->is_home = $is_home;
            $category->save();

            return redirect()->route('admin.category.index')->with(['success' => 'Cập nhật dữ liệu thành công']);
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function getChildrenC2 (Request $request)
    {
        try{
            $listCategory = CategoryModel::where('parent_id',$request->cate_id)->get();
            $html = null;
            if (count($listCategory)){
                foreach ($listCategory as $value){
                    $option = '<div class="d-flex align-items-center category list_category_children p-1">
                                                <div class="d-flex align-items-center" style="margin-right: 10px"><input type="radio" id="'.$value->id.'" style="width: 20px; height: 20px" value="'.$value->id.'" name="'.$request->get('name').'"></div>
                                                <label for="'.$value->id.'" class="m-0">'.$value->name.'</label>
                                            </div>';
                    $html .= $option;
                }
            }
            $data['html'] = $html;
            $data['status'] = true;
            $data['name'] = $request->get('name');
            return $data;
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
}
