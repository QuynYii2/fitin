<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\HomeModel;
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

        return view('web.home.index',compact('trademark','bannerTop','bannerCenter','bannerBottom'));
    }

    public function category()
    {
        return view('web.category.index');
    }

}
