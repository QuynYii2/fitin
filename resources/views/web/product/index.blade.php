@extends('web.index')
@section('title','Chi tiết sản phẩm')
@section('style_page')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
@stop
{{--content of page--}}
@section('content')
    <div class="breadcrumb breadcrumb-product">
        <div class="container">
            <ul>
                <li><a href="{{route('home')}}">Trang chủ </a></li>
                <li><a>{{$product->name}}</a></li>
            </ul>
        </div>
    </div>

    <div class="main-child main-child1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-detail-product">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="list-img mb-4">
                                    <div class="slider-all" style="margin-bottom: 15px">
                                        @if(isset($dataImage))
                                            @foreach($dataImage as $index => $img)
                                                <div class="item" id="gc_container_owl">
                                                    <img src="{{asset($img->src)}}" style="height: 409px;width: 100%;">
                                                </div>
                                            @endforeach
                                        @endif

                                    </div>
                                    <div class="slider-one">
                                        @if(isset($dataImage))
                                            @foreach($dataImage as $index => $img_color)
                                                <a data-index="{{ $index }}">
                                                    <img src="{{asset($img_color->src)}}"
                                                         style="height: 95px;width: 100%;padding-right: 5px">
                                                </a>
                                            @endforeach
                                        @endif
                                        @if(isset($dataImage))
                                            @foreach($dataImage as $index => $img)
                                                <a data-index="{{ $index }}">
                                                    <img src="{{asset($img->src)}}"
                                                         style="height: 95px;width: 100%;padding-right: 5px">
                                                </a>
                                            @endforeach
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="borderImgRadius color_each swatch detail-product-right">
                                    <h3 class="titless">{{$product->name}}</h3>
                                    <div id="show_flashdata_frontend_products">
                                    </div>
                                    <div style="display: flex;justify-content: space-between;align-items: center">
                                        <ul>
                                            <li>Mã sản
                                                phẩm: {{$product->sku}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="selec-size select-swap">
                                    {!! $product->describe !!}
                                </div>
                                @if($product->price_promotional != 0)
                                    <p class="price pt-2" style="font-size: 16px">Giá gốc: <span
                                            style="text-decoration: line-through">{{number_format($product->price)}}đ</span>
                                    </p>
                                    <p class="current-price" style="font-size: 16px">Giá khuyến mãi: <span
                                            style="color: red">{{number_format($product->price_promotional)}}đ</span>
                                    </p>
                                @else
                                    <p class="current-price pt-2" style="font-size: 16px">Giá bán: <span
                                            style="color: red">{{number_format($product->price)}}đ</span></p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <h3 class="title1" style="margin-bottom: 0">Thông tin sản phẩm</h3>
                    <div class="information-product" style="padding-top: 0px">
                        {!! $product->content !!}
                    </div>
                    @if(count($product_more)>0)
                        <div class="other-product mt-4">
                            <h3 class="title1">Các sản phẩm khác</h3>
                            <div class="fitv2 ">
                                <div class="product-item-sale-block fit-product-list fit-slider fit-product-slider d-flex">
                                    @foreach($product_more as $sale)
                                        <div class="fit-product-item">
                                            <div class="fit-product-item-inner">
                                                @if($sale->price_promotional != 0)
                                                    <div class="status-product-item"><span class="stt-promote">-{{round( 100 - ($sale->price_promotional / $sale->price * 100))}}%</span>
                                                    </div>
                                                @endif
                                                <div class="thumbs-lg" style="position: relative;"><a
                                                        href="{{route('detail-product',$sale->slug)}}"
                                                        class="view-img-a">
                                                        <img src="{{$sale->src}}" id="addToCart_5094"></a></div>
                                                <div class="product-item-info"><span class="category-name"></span>
                                                    <div class="related-product-info row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a
                                                                href="{{route('detail-product',$sale->slug)}}"
                                                                class="txt-bold">
                                                                {{$sale->name}}
                                                            </a></div>
                                                    </div>
                                                    <div class="related-product-price price-block">
                                                        <div class="ml-0 mr-0 row">
                                                            <div class="pl-0 col-8">
                                                                @if($sale->price_promotional != 0)
                                                                    <p class="current-price">{{number_format($sale->price_promotional)}}
                                                                        đ</p>
                                                                    <p class="price">{{number_format($sale->price)}} đ</p>
                                                                @else
                                                                    <p class="current-price">{{number_format($sale->price)}}
                                                                        đ</p>
                                                                @endif
                                                            </div>
                                                            <div class="col-brand col-4">
                                                                <div class="brand-image-wp">
                                                                    <a><img src="{{$sale->src_trademark}}"
                                                                            class="brand-image"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@stop
@section('script_page')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.slider-all').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-one'
        });
        $('.slider-one').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-all',
            dots: false,
            focusOnSelect: true,
            prevArrow: '<div class="d-none"></div>',
            nextArrow: '<div class="d-none"></div>',
        });
    </script>
@stop
