<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\CategoryModel;
use App\Models\ConsultingDesignModel;
use App\Models\HomeModel;
use App\Models\NewModel;
use App\Models\ProductImageModel;
use App\Models\ProductModel;
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
        $listSale = ProductModel::where('display',1)->where('is_sale',1)->orderBy('created_at','desc')->take(4)->get();
        foreach ($listSale as $sale){
            $sale->src = ProductImageModel::where('product_id',$sale->id)->first()->src??null;
            $sale->src_trademark = TrademarkModel::find($sale->trademark_id)->src??null;
        }
        $listProduct = CategoryModel::where('is_home',1)->get();
        foreach ($listProduct as $item){
            $cate = CategoryModel::where('parent_id',$item->id)->pluck('id');
            $item->data = ProductModel::whereIn('category_id',$cate)->orderBy('created_at','desc')->take(8)->get();
            foreach ($item->data as $value){
                $value->src = ProductImageModel::where('product_id',$value->id)->first()->src??null;
                $value->src_trademark = TrademarkModel::find($value->trademark_id)->src??null;
            }
        }

        return view('web.home.index',compact('trademark','bannerTop','bannerCenter','bannerBottom','listNew','listCate','keySearch','listSale','listProduct'));
    }

    public function category($slug)
    {
        $category = CategoryModel::where('slug',$slug)->first();
        $listCate = CategoryModel::where('parent_id',$category->parent_id)->get();
        if ($category->parent_id != 0){
            $listData = ProductModel::where('category_id',$category->id)->orderBy('created_at','desc')->paginate(24);
        }else{
            $data = CategoryModel::where('parent_id',$category->id)->pluck('id');
            $listData = ProductModel::whereIn('category_id',$data)->orderBy('created_at','desc')->paginate(24);
        }
        foreach ($listData as $value){
            $value->src = ProductImageModel::where('product_id',$value->id)->first()->src??null;
            $value->src_trademark = TrademarkModel::find($value->trademark_id)->src??null;
        }

        return view('web.category.index',compact('category','listCate','listData'));
    }

    public function consultingDesign($id)
    {
        $listData = ConsultingDesignModel::where('type',$id)->orderBy('created_at','desc')->paginate(24);
        if ($id == 1){
            $name = 'Dự án';
        }else{
            $name = 'Cải tạo phòng';
        }

        return view('web.consulting_design.list',compact('listData','name'));
    }

    public function detailConsultingDesign($slug){
        $data = ConsultingDesignModel::where('slug',$slug)->first();

        return view('web.consulting_design.detail',compact('data'));
    }

    public function detailProduct($slug){
        $product = ProductModel::where('slug',$slug)->first();
        $dataImage = ProductImageModel::where('product_id',$product->id)->get();
        $product_more = ProductModel::where('id','!=',$product->id)->take(4)->get();
        foreach ($product_more as $value){
            $value->src = ProductImageModel::where('product_id',$value->id)->first()->src??null;
            $value->src_trademark = TrademarkModel::find($value->trademark_id)->src??null;
        }

        return view('web.product.index',compact('product','dataImage','product_more'));
    }

}
