<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SettingModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $titlePage = 'Cài đặt';
        $page_menu = 'setting';
        $page_sub = null;
        $data = SettingModel::first();

        return view('admin.setting.index',compact('titlePage','page_menu','page_sub','data'));
    }

    public function save(Request $request){
        $setting = SettingModel::first();
        if ($setting){
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
                if (isset($setting->logo) && Storage::exists(str_replace('/storage', 'public', $setting->logo))) {
                    Storage::delete(str_replace('/storage', 'public', $setting->logo));
                }
                $setting->logo = $imagePath;
            }

            $setting->describe = $request->get('describe');
            $setting->contact = $request->get('contact');
            $setting->facebook = $request->get('facebook');
            $setting->instagram = $request->get('instagram');
            $setting->url_301 = $request->get('url_301');
            $setting->meta_title = $request->get('meta_title');
            $setting->meta_description = $request->get('meta_description');
            $setting->meta_keywords = $request->get('meta_keywords');
            $setting->save();
        }else{
            $imagePath = null;
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
            }
            $setting = new SettingModel([
                'describe'=>$request->get('describe'),
                'contact'=>$request->get('contact'),
                'facebook'=>$request->get('facebook'),
                'logo'=>$imagePath,
                'instagram'=>$request->get('instagram'),
                'url_301'=>$request->get('url_301'),
                'meta_title'=>$request->get('meta_title'),
                'meta_description'=>$request->get('meta_description'),
                'meta_keywords'=>$request->get('meta_keywords'),
            ]);
            $setting->save();
        }

        return redirect()->back()->with(['success'=>"Lưu thông tin thành công"]);
    }
}
