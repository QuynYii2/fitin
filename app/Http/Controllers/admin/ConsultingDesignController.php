<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ConsultingDesignModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ConsultingDesignController extends Controller
{
    public function index()
    {
        $titlePage = 'Danh sách bài viết';
        $page_menu = 'consulting_design';
        $page_sub = null;
        $listData = ConsultingDesignModel::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.consulting_design.index', compact('titlePage', 'page_menu', 'listData', 'page_sub'));
    }

    public function create()
    {
        $titlePage = 'Bài viết';
        $page_menu = 'consulting_design';
        $page_sub = null;
        $category = ConsultingDesignModel::all();
        return view('admin.consulting_design.create', compact('titlePage', 'page_menu', 'page_sub', 'category'));
    }

    public function store(Request $request)
    {
        try {
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('trademark', 'public'));
            }else{
                return back()->with(['info'=>'Vui lòng thêm ảnh để tiếp tục']);
            }

            $news = new ConsultingDesignModel();
            $news->name = $request->get('name');
            $news->slug = Str::slug($request->get('name'));
            $news->type	= $request->get('type');
            $news->content = $request->get('content');
            $news->src = $imagePath;
            $news->save();

            return \redirect()->route('admin.consulting_design.index')->with(['success' => 'Thêm bài viết thành công']);

        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function delete($id)
    {
        $consulting = ConsultingDesignModel::where('id', $id)->first();
        if (isset($consulting->src) && Storage::exists(str_replace('/storage', 'public', $consulting->src))) {
            Storage::delete(str_replace('/storage', 'public', $consulting->src));
        }
        $consulting->delete();
        return \redirect()->route('admin.consulting_design.index')->with(['success' => 'Xóa bài viết thành công']);
    }

    public function edit($id)
    {
        $news = ConsultingDesignModel::find($id);
        $titlePage = 'Bài viết';
        $page_menu = 'consulting_design';
        $page_sub = null;
        return view('admin.consulting_design.edit', compact('news', 'titlePage', 'page_menu', 'page_sub'));

    }

    public function update($id, Request $request)
    {
        try {
            $news = ConsultingDesignModel::find($id);
            if (empty($news)) {
                return back()->with(['error' => 'Bài viết không tồn tại']);
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
            $news->type = $request->get('type');
            $news->content = $request->get('content');
            $news->save();
            return \redirect()->route('admin.consulting_design.index')->with(['success' => 'Sửa bài viết thành công']);
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }
}
