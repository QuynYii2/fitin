<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryNewModel;
use App\Models\NewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewController extends Controller
{
    public function indexCate()
    {
        $titlePage = 'Danh Mục Tin Tức';
        $page_menu = 'new';
        $page_sub = 'category';
        $listData = CategoryNewModel::paginate(20);
        return view('admin.blog.category.index', compact('titlePage', 'page_menu', 'listData', 'page_sub'));
    }

    public function createCate()
    {
        $titlePage = 'Danh Mục Tin Tức';
        $page_menu = 'new';
        $page_sub = 'category';
        return view('admin.blog.category.create', compact('titlePage', 'page_menu', 'page_sub'));
    }

    public function storeCate(Request $request)
    {
        try {
            $category_name = CategoryNewModel::where('name', $request->name)->first();
            if (isset($category_name)) {
                return \redirect()->back()->with(['error' => 'Tên danh mục đã tồn tại']);
            }
            $imagePath = null;
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('new', 'public'));
            }

            $category = new CategoryNewModel();
            $category['name'] = $request->get('name');
            $category['slug'] = Str::slug($request->get('name'));
            $category['src'] = $imagePath;
            $category->save();
            return \redirect()->route('admin.category-new.index-cate')->with(['success' => 'Tạo mới danh mục thành công']);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function deleteCate($id)
    {
        $category = CategoryNewModel::find($id);
        $category->delete();
        return \redirect()->route('admin.category-new.index-cate')->with(['success' => 'Xóa danh mục thành công']);
    }

    public function editCate($id)
    {
        $category = CategoryNewModel::find($id);
        $titlePage = 'Danh Mục Tin Tức';
        $page_menu = 'new';
        $page_sub = 'category';
        return view('admin.blog.category.edit', compact('category', 'titlePage', 'page_menu', 'page_sub'));
    }

    public function updateCate(Request $request, $id)
    {
        try {
            $category = CategoryNewModel::find($id);
            $_category = CategoryNewModel::where('name', $request->name)->first();
            if (isset($_category) && ($category->id != $_category->id)) {
                return \redirect()->back()->with(['error' => 'Tên danh mục đã tồn tại']);
            }
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('new', 'public'));
                if (isset($category->src) && Storage::exists(str_replace('/storage', 'public', $category->src))) {
                    Storage::delete(str_replace('/storage', 'public', $category->src));
                }
                $category->src = $imagePath;
            }
            $category->name = $request->get('name');
            $category->slug = Str::slug($request->get('name'));
            $category->save();
            return \redirect()->route('admin.category-new.index-cate')->with(['success' => 'Cập nhập danh mục thành công']);
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function index()
    {
        $titlePage = 'Danh sách bài viết';
        $page_menu = 'new';
        $page_sub = 'blog';
        $listData = NewModel::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.blog.news.index', compact('titlePage', 'page_menu', 'listData', 'page_sub'));
    }

    public function create()
    {
        $titlePage = 'Bài viết';
        $page_menu = 'blog';
        $page_sub = null;
        $category = CategoryNewModel::all();
        return view('admin.blog.news.create', compact('titlePage', 'page_menu', 'page_sub', 'category'));
    }

    public function store(Request $request)
    {
        try {
            if ($request->get('display') == 'on') {
                $display = 1;
            } else {
                $display = 0;
            }
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('trademark', 'public'));
            }else{
                return back()->with(['info'=>'Vui lòng thêm ảnh để tiếp tục']);
            }

            $news = new NewModel();
            $news->name = $request->get('name');
            $news->slug = Str::slug($request->get('name'));
            $news->category_new_id	= $request->get('category_new_id');
            $news->content = $request->get('content');
            $news->src = $imagePath;
            $news->display = $display;
            $news->save();

            return \redirect()->route('admin.new.index')->with(['success' => 'Thêm bài viết thành công']);

        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function delete($id)
    {
        NewModel::where('id', $id)->delete();
        return \redirect()->route('admin.new.index')->with(['success' => 'Xóa bài viết thành công']);
    }

    public function edit($id)
    {
        $news = NewModel::find($id);
        $category = CategoryNewModel::all();
        $titlePage = 'Bài viết';
        $page_menu = 'new';
        $page_sub = 'blog';
        return view('admin.blog.news.edit', compact('news', 'titlePage', 'page_menu', 'page_sub','category'));

    }

    public function update($id, Request $request)
    {
        try {
            $news = NewModel::find($id);
            if (empty($news)) {
                return back()->with(['error' => 'Bài viết không tồn tại']);
            }
            if ($request->get('display') == 'on') {
                $display = 1;
            } else {
                $display = 0;
            }
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('new', 'public'));
                if (isset($news->src) && Storage::exists(str_replace('/storage', 'public', $news->src))) {
                    Storage::delete(str_replace('/storage', 'public', $news->src));
                }
                $news->src = $imagePath;
            }

            $news->name = $request->get('name');
            $news->slug = Str::slug($request->get('name'));
            $news->category_new_id = $request->get('category_new_id');
            $news->content = $request->get('content');
            $news->display = $display;
            $news->save();
            return \redirect()->route('admin.new.index')->with(['success' => 'Sửa bài viết thành công']);
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }
}
