<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PostModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $titlePage = 'Danh sách bài viết footer';
        $page_menu = 'post';
        $page_sub = null;
        $listData = PostModel::paginate(10);

        return view('admin.post.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function create ()
    {
        try{
            $titlePage = 'Thêm bài viết';
            $page_menu = 'post';
            $page_sub = null;
            return view('admin.post.create', compact('titlePage', 'page_menu', 'page_sub'));
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function store (Request $request)
    {
        try{
            $data = PostModel::where('name',$request->get('name'))->first();
            if ($data){
                toastr()->error('Bài viết đã tồn tại');
                return back();
            }

            $new = new PostModel([
                'name' => $request->get('name'),
                'slug' => Str::slug($request->get('name')),
                'content' => $request->get('content'),
                'type' => $request->get('type'),
            ]);
            $new->save();
            return redirect()->route('admin.post.index')->with(['success' => 'Tạo tin tức thành công']);
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete ($id)
    {
        $new = PostModel::find($id);
        $new->delete();
        return redirect()->route('admin.post.index')->with(['success'=>"Xóa dữ liệu thành công"]);
    }

    public function edit ($id)
    {
        try{
            $new = PostModel::find($id);
            if (empty($new)) {
                return back()->with(['error' => 'Bài viết không tồn tại']);
            }
            $titlePage = 'Sửa bài viết';
            $page_menu = 'post';
            $page_sub = null;
            return view('admin.post.edit', compact('titlePage', 'page_menu', 'page_sub', 'new'));
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function update ($id, Request $request)
    {
        try{
            $new = PostModel::find($id);
            if (empty($new)){
                return back()->with(['error' => 'Bài viết không tồn tại']);
            }
            $data = PostModel::where('name',$request->get('name'))->first();
            if ($data && $data->id != $id){
                toastr()->error('Bài viết đã tồn tại');
                return back();
            }

            $new->name = $request->get('name');
            $new->slug = Str::slug($request->get('name'));
            $new->content = $request->get('content');
            $new->type = $request->get('type');
            $new->save();
            return redirect()->route('admin.post.index')->with(['success' => 'Cập nhật bài viết thành công']);
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}
