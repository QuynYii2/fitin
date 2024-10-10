<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\CategoryModel;
use App\Models\HomeModel;
use App\Models\NewModel;
use App\Models\TrademarkModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $trademark = TrademarkModel::where('display',1)->get();
        $bannerTop = BannerModel::where('display',1)->where('type',2)->orderBy('location','asc')->get();
        $bannerCenter = BannerModel::where('display',1)->where('type',3)->orderBy('location','asc')->first();
        $bannerBottom = BannerModel::where('display',1)->where('type',4)->orderBy('location','asc')->get();
        $listNew = NewModel::where('display',1)->orderBy('created_at','desc')->take(10)->get();
        $listCate = CategoryModel::where('parent_id',0)->get();
        $keySearch = CategoryModel::where('is_key',1)->get();

        return view('web.home.index',compact('trademark','bannerTop','bannerCenter','bannerBottom','listNew','listCate','keySearch'));
    }

    public function category($slug)
    {
        $category = CategoryModel::where('slug',$slug)->first();
        $listCate = CategoryModel::where('parent_id',$category->parent_id)->get();

        return view('web.category.index',compact('category','listCate'));
    }

}
