<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\CategoryNewModel;
use App\Models\ExperienceModel;
use App\Models\NewModel;
use App\Models\PostModel;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post($slug){
            $data = CategoryNewModel::where('slug',$slug)->first();
            $listData = NewModel::where('category_new_id',$data->id)->where('display',1)->orderBy('created_at','desc')->paginate(24);

            return view('web.new.list',compact('listData','data'));
    }

    public function detailPost($slug){
            $data = NewModel::where('slug',$slug)->first();
            return view('web.new.detail',compact('data'));
    }

    public function detailPage($slug){
        $data = PostModel::where('slug',$slug)->first();

        return view('web.page.index',compact('data'));
    }

    public function experience(){
        $data = ExperienceModel::first();

        return view('web.page.index',compact('data'));
    }

    public function new(){
        $category = CategoryNewModel::all();
        $listData = NewModel::where('display',1)->orderBy('created_at','desc')->paginate(24);

        return view('web.new.index',compact('category','listData'));
    }

}
