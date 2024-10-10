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
                                                </a> <span class="menu-plug">(221)</span></strong>
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
                                <div class="products-wrapper">
                                    @for($i=0;$i<10;$i++)
                                    <div class="product-item">
                                        <div class="product-list-item">
                                            <div class="status-product"></div>
                                            <div class="view-img-big" style="position: relative;"><a href="#"><img
                                                        src="https://web.archive.org/web/20200512015603im_/https://cdn.fitin.vn/cms-ecom/thumbs/300x300/product-tmp/2020/04/22/170110621-1560827576646swyp-1587529449.jpg"
                                                        id="addToCart_228"></a></div>
                                            <div class="product-list-detail"><span class="category-name"></span>
                                                <div class="related-product-info row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a
                                                            href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/ban-laptop-index-living-mall-smart-5900.html"
                                                            title="Bàn Laptop Index Living Mall Smart" class="txt-bold">
                                                            Bàn Laptop Index Living Mall Smart
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
                                                        <div class="pl-0 col-8"><p class="current-price">619,000 đ</p>
                                                        </div>
                                                        <div class="col-brand col-4">
                                                            <div class="brand-image-wp"><a
                                                                    href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/thuong-hieu/index-living-mall.html"
                                                                    title="Index Living Mall"><img
                                                                        src="https://web.archive.org/web/20200512015603im_/https://cdn.fitin.vn/cms-ecom/images/2020/01/17/index-livingmall-1579255376.png"
                                                                        alt="Index Living Mall" class="brand-image"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  @endfor
                                </div>
                                <div class="product_not_founds" style="display: none;">
                                    <div role="alert" class="alert alert-warning">
                                        Sản phẩm bạn đang tìm không có.
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-bar">
                                <ul unselectable="unselectable" class="rc-pagination"><span>Trang: </span>
                                    <li tabindex="0"
                                        class="rc-pagination-item rc-pagination-item-1 rc-pagination-item-active">
                                        <a>1</a></li>
                                    <li class="rc-pagination-item rc-pagination-item-2"><a
                                            href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ban?page=2">2</a>
                                    </li>
                                    <li class="rc-pagination-item rc-pagination-item-3"><a
                                            href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ban?page=3">3</a>
                                    </li>
                                    <li class="rc-pagination-item rc-pagination-item-4"><a
                                            href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ban?page=4">4</a>
                                    </li>
                                    <li class="rc-pagination-item rc-pagination-item-5"><a
                                            href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ban?page=5">5</a>
                                    </li>
                                    <li tabindex="0" class="rc-pagination-jump-next"><a
                                            href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ban?page=6"
                                            class="rc-pagination-item-link"></a></li>
                                    <li class="rc-pagination-item rc-pagination-item-33"><a
                                            href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ban?page=33">33</a>
                                    </li>
                                </ul>
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
