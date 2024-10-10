<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ExperienceModel;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $titlePage = 'Hướng dẫn trải nghiệm';
        $page_menu = 'experience';
        $page_sub = null;
        $data = ExperienceModel::first();

        return view('admin.experience.index',compact('titlePage','page_menu','page_sub','data'));
    }

    public function save(Request $request){
        $experience = ExperienceModel::first();
        if ($experience){
            $experience->name = $request->get('name');
            $experience->content = $request->get('content');
            $experience->save();
        }else{
            $experience = new ExperienceModel([
                'name'=>$request->get('name'),
                'content'=>$request->get('content'),
            ]);
            $experience->save();
        }

        return redirect()->back()->with(['success'=>"Lưu thông tin thành công"]);
    }
}
