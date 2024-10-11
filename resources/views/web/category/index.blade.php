@extends('web.index')
@section('title','Danh mục')

@section('style_page')
    <link rel="stylesheet" href="{{ asset('assets/web/css/category.css') }}">
@stop
{{--content of page--}}
@section('content')
    <div class="content">
        <div>
            <div class="product-category-wrapper w-90">
                <div class="dp-flex-w-sbt align-i-center justify-start nowrap mr-t-30 mr-bt-30">
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Trang chủ</a></li>
                        <li>
                            <a>{{$category->name}}</a>
                        </li>
                    </ol>
                </div>
                <div class="row">
                    <div class="position-unset w-100-res767 col-md-3">
                        <div class="categories-menu">
                            <div class="menu-feature">
                                <div class="menu-block menu-has-child"><h3 class="main-title">DANH MỤC SẢN PHẨM</h3>
                                    @if(count($listCate)>0)
                                    <ul class="submenu menu">
                                        @foreach($listCate as $cate)
                                        <li class="filter-block"><strong class="menu-header "><a
                                                    href="{{route('category',$cate->slug)}}"
                                                    class="title link @if($cate->id == $category->id) active @endif">
                                                    {{$cate->name}}
                                                </a> </strong>
                                        </li>
                                        @endforeach
                                    </ul>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-unset col-md-9 col-sm-12 content-product-category">
                        <div class="content-catagory">
                            <div class="category-title"><h1 class="title-content">{{$category->name}}</h1></div>
                            <div class="filter-list-box"></div>
                            <div class="product-list">
                                @if(count($listData)>0)
                                <div class="products-wrapper">
                                    @foreach($listData as $item)
                                    <div class="product-item">
                                        <div class="product-list-item">
                                            @if($item->price_promotional != 0)
                                                <div class="status-product-item"><span class="stt-promote">-{{round( 100 - ($item->price_promotional / $item->price * 100))}}%</span></div>
                                            @endif
                                            <div class="view-img-big" style="position: relative;"><a href="{{route('detail-product',$item->slug)}}"><img
                                                        src="{{asset($item->src)}}"
                                                        id="addToCart_228"></a></div>
                                            <div class="product-list-detail"><span class="category-name"></span>
                                                <div class="related-product-info row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a
                                                            href="{{route('detail-product',$item->slug)}}"
                                                             class="txt-bold">
                                                           {{$item->name}}
                                                        </a></div>
                                                    <div
                                                        class="related-product-rating col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div data-rating="0" class="react-rater">
                                                            <div>
                                                                <div class="react-rater-star is-disabled "><i
                                                                        class="fa fa-star"></i></div>
                                                            </div>
                                                            <div>
                                                                <div class="react-rater-star is-disabled "><i
                                                                        class="fa fa-star"></i></div>
                                                            </div>
                                                            <div>
                                                                <div class="react-rater-star is-disabled "><i
                                                                        class="fa fa-star"></i></div>
                                                            </div>
                                                            <div>
                                                                <div class="react-rater-star is-disabled "><i
                                                                        class="fa fa-star"></i></div>
                                                            </div>
                                                            <div>
                                                                <div class="react-rater-star is-disabled "><i
                                                                        class="fa fa-star"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="related-product-price price-block">
                                                    <div class="ml-0 mr-0 row">
                                                        <div class="pl-0 col-8">
                                                            @if($item->price_promotional != 0)
                                                                <p class="current-price">{{number_format($item->price_promotional)}}
                                                                    đ</p>
                                                                <p class="price">{{number_format($item->price)}}
                                                                    đ</p>
                                                            @else
                                                                <p class="current-price">{{number_format($item->price)}}
                                                                    đ</p>
                                                            @endif
                                                        </div>
                                                        <div class="col-brand col-4">
                                                            <div class="brand-image-wp"><a>
                                                                    <img src="{{asset($item->src_trademark)}}"
                                                                         class="brand-image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  @endforeach
                                </div>
                                @else
                                <div class="product_not_founds">
                                    <div role="alert" class="alert alert-warning">
                                        Sản phẩm bạn đang tìm không có.
                                    </div>
                                </div>
                                    @endif
                            </div>
                            <div class="d-flex justify-content-center mt-4 mb-5">
                                {{ $listData->appends(request()->all())->links('web.partials.pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('script_page')

@stop
