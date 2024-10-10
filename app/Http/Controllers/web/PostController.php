<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\CategoryBlogModel;
use App\Models\PostModel;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post($slug){
        if (session('is_bot')) {
            session()->forget('is_bot');
            $data = CategoryBlogModel::where('slug',$slug)->first();
            $listData = PostModel::where('category_post_id',$data->id)->where('display',1)->where('type',2)->paginate(20);

            return view('web_bot.post.index',compact('listData','data'));
        }else{
            $data = CategoryBlogModel::where('slug',$slug)->first();
            $listData = PostModel::where('category_post_id',$data->id)->where('display',1)->where('type',1)->paginate(20);

            return view('web.post.index',compact('listData','data'));
        }
    }

    public function detailPost($slug){
        if (session('is_bot')) {
            session()->forget('is_bot');
            $data = PostModel::where('slug',$slug)->first();

            return view('web_bot.post.detail',compact('data'));
        }else{
            $data = PostModel::where('slug',$slug)->first();

            return view('web.post.detail',compact('data'));
        }
    }

    public function detailPage($slug){
        $data = PostModel::where('slug',$slug)->first();

        return view('web.page.index',compact('data'));
    }

}
