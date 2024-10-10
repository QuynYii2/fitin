@extends('web.index')
@section('title','Trang chủ')

@section('style_page')

@stop
{{--content of page--}}
@section('content')
    <div class="content fitv2">

        @if(count($bannerTop)>0)
            <section class="sec-banner-main container">
                <div class="banner-main-inner">
                    <div class="row clearfix">
                        <div class="col-sm-6 "><a
                                @if($bannerTop[0]->link) href="{{$bannerTop[0]->link}}" @endif><img
                                    src="{{@$bannerTop[0]->src}}" class="d-block w-100"></a></div>
                        @if(isset($bannerTop[1]))
                            <div class="col-sm-6 banner-slider bg-none swiper pt-0 pb-0 swiper-banner-top">
                                <div class="swiper-wrapper">
                                    @foreach($bannerTop as $index => $bannerTops)
                                        @if($index>0)
                                            <div class="swiper-slide">
                                                <a @if($bannerTops->link) href="{{$bannerTops->link}}" @endif>
                                                    <img src="{{$bannerTops->src}}"
                                                         class="d-block w-100">
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        @endif

        @if($bannerCenter)
            <section class="sec-banner container mb-1">
                <div class="banner-horizontal "><a
                        @if($bannerCenter->link) href="{{$bannerCenter->link}}" @endif
                    class="d-block w-100"><img src="{{$bannerCenter->src}}"></a></div>
            </section>
        @endif

        @if(count($listCate)>0)
            <section class="sec-categories container mb-3">
                <div class="title-h2 text-center"><h2>DANH MỤC SẢN PHẨM</h2></div>
                <div class="row clearfix cate-block justify-center">
                    @foreach($listCate as $cates)
                        <a href="{{route('category',$cates->slug)}}" class="col-md-2 col-sm-4 col-6">
                            <div class="cate-item">
                                <div class="cate-img"><img
                                        src="{{asset($cates->src)}}"
                                        class="img-responsive"></div>
                                <h3>{{$cates->name}}</h3></div>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif

        <section class="sec-products sec-product-flash flash-sale-carousel-wrapper"
                 style="background: rgb(244, 199, 92);">
            <div class="container">
                <div class="title-header row clearfix header-block">
                    <div class="col-sm-4"><img
                            src="{{asset('assets/web/images/flash-sale.png')}}"
                            class="img-responsive"></div>
                </div>
                <div class="product-item-sale-block fit-product-list fit-slider fit-product-slider d-flex">
                    @for($i=0;$i<4;$i++)
                        <div class="fit-product-item">
                            <div class="fit-product-item-inner">
                                <div class="status-product-item"><span class="stt-promote">-10%</span></div>
                                <div class="thumbs-lg" style="position: relative;"><a
                                        href="#"
                                        class="view-img-a">
                                        <img
                                            src="https://web.archive.org/web/20200527163310im_/https://cdn.fitin.vn/cms-ecom/thumbs/300x300/images/2020/04/01/ghe-day-du-the-palm-xanh-ngoc-2-1585735690.jpg"
                                            id="addToCart_5094"></a></div>
                                <div class="product-item-info"><span class="category-name"></span>
                                    <div class="related-product-info row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a
                                                href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/ghe-day-du-the-palm-5094.html"
                                                title="Ghế Dây Dù Furnist The Palm Xanh Ngọc" class="txt-bold">
                                                Ghế Dây Dù Furnist The Palm Xanh Ngọc
                                            </a></div>
                                    </div>
                                    <div class="related-product-price price-block">
                                        <div class="ml-0 mr-0 row">
                                            <div class="pl-0 col-8"><p class="current-price">1,620,000 đ</p>
                                                <p class="price">1,800,000 đ</p></div>
                                            <div class="col-brand col-4">
                                                <div class="brand-image-wp"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/thuong-hieu/furnist.html"
                                                        title="Furnist"><img
                                                            src="https://web.archive.org/web/20200512015804im_/https://cdn.fitin.vn/cms-ecom/images/2019/12/04/furnist-1575456016.png"
                                                            alt="Furnist" class="brand-image"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>

        @if(count($bannerBottom)>2)
            <section class="sec-banner grid2-3banner container">
                <div class="row clearfix">
                    <div class="col-md-7">
                        <div class="block-banner-lg banner-slider bg-none pt-0 pb-0 swiper swiper-banner-center">
                            <div class="swiper-wrapper">
                                @foreach($bannerBottom->slice(0, count($bannerBottom) - 2) as $bannerBottoms)
                                    <div class="swiper-slide">
                                        <a @if($bannerBottoms->link) href="{{$bannerBottoms->link}}" @endif>
                                            <img height="490" style="object-fit: cover"
                                                 src="{{$bannerBottoms->src}}"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    @php
                        $lastTwoBanners = $bannerBottom->slice(-2);
                    @endphp
                    <div class="col-md-5">
                        @if(isset($lastTwoBanners[count($bannerBottom) - 2]))
                            <div class="block-banner-sm banner-top ">
                                <a href="{{ $lastTwoBanners[count($bannerBottom) - 2]->link ?? '#' }}"><img
                                        height="230"
                                        src="{{ $lastTwoBanners[count($bannerBottom) - 2]->src }}"
                                        class="img-responsive"></a>
                            </div>
                        @endif
                        @if(isset($lastTwoBanners[count($bannerBottom) - 1]))
                            <div class="block-banner-sm banner-bottom ">
                                <a href="{{ $lastTwoBanners[count($bannerBottom) - 1]->link ?? '#' }}"><img
                                        height="230"
                                        src="{{ $lastTwoBanners[count($bannerBottom) - 1]->src }}"
                                        class="img-responsive"></a>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        @endif

        <section class="product-style2">
            <div class="container">
                <div class="title-h2 pb-4"><h2>TOP SẢN PHẨM BÁN CHẠY</h2></div>
                <div class=" swiper swiper-product">
                    <div class="swiper-wrapper">
                        @for($j=0;$j<8;$j++)
                            <div class="swiper-slide">
                                <div class="fit-product-item">
                                    <div class="fit-product-item-inner">
                                        <div class="status-product-item"></div>
                                        <div class="thumbs-lg" style="position: relative;">
                                            <a href="#" class="view-img-a">
                                                <img
                                                    src="https://web.archive.org/web/20200512015804im_/https://cdn.fitin.vn/cms-ecom/thumbs/300x300/images/2020/04/29/antulb-2-eacf1db4c63c46c5828b3689efc8f8c8-master-1588137201.jpg"
                                                    id="addToCart_1340">
                                            </a>
                                        </div>
                                        <div class="product-item-info">
                                            <span class="category-name"></span>
                                            <div class="related-product-info row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <a href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/ghe-lam-viec-antu-1-1340.html"
                                                       title="Ghế Làm Việc Make My Home Antu Nâu Nhạt"
                                                       class="txt-bold">
                                                        Ghế Làm Việc Make My Home Antu Nâu Nhạt
                                                    </a>
                                                </div>
                                                <div
                                                    class="related-product-rating col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div data-rating="0" class="react-rater">
                                                        <div>
                                                            <div class="react-rater-star is-disabled"><i
                                                                    class="fa fa-star"></i></div>
                                                        </div>
                                                        <div>
                                                            <div class="react-rater-star is-disabled"><i
                                                                    class="fa fa-star"></i></div>
                                                        </div>
                                                        <div>
                                                            <div class="react-rater-star is-disabled"><i
                                                                    class="fa fa-star"></i></div>
                                                        </div>
                                                        <div>
                                                            <div class="react-rater-star is-disabled"><i
                                                                    class="fa fa-star"></i></div>
                                                        </div>
                                                        <div>
                                                            <div class="react-rater-star is-disabled"><i
                                                                    class="fa fa-star"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="related-product-price price-block">
                                                <div class="ml-0 mr-0 row">
                                                    <div class="pl-0 col-8"><p class="current-price">1,375,000 đ</p>
                                                    </div>
                                                    <div class="col-brand col-4">
                                                        <div class="brand-image-wp">
                                                            <a href="#">
                                                                <img
                                                                    src="https://web.archive.org/web/20200512015804im_/https://cdn.fitin.vn/cms-ecom/images/2019/12/23/make-my-home-1577087855.png"
                                                                    class="brand-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                </div>

            </div>
        </section>

        @if(count($keySearch)>0)
            <section class="sec-keyword container">
                <div class="title-h2"><h2>TỪ KHÓA</h2></div>
                <div
                    class="swiper swiper-key ml-0 mr-0 mt-3 mb-3 fit-slider fit-keyword-slider flickity-enabled is-draggable">
                    <div class="swiper-wrapper">
                        @foreach($keySearch as $searchs)
                            <div class="swiper-slide">
                                <a href="{{route('category',$searchs->slug)}}" class="item-keySearch">
                                    <label>{{$searchs->name}}</label>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </section>
        @endif

        @if(count($listNew)>0)
            <section class="sec-articles">
                <div class="container">
                    <div class="title-h2"><h2>BÀI VIẾT GẦN ĐÂY</h2></div>
                    <div class="fit-slider fit-article-slider swiper swiper-blog">
                        <div class="swiper-wrapper">
                            @foreach($listNew as $listNews)
                                <div class="item-article swiper-slide">
                                    <div class="box-inner">
                                        <a href="{{route('detail-post',$listNews->slug)}}" target="_blank">
                                            <div class="bg-img"
                                                 style="background: url({{asset($listNews->src)}}) 0% 0% / cover no-repeat;"></div>
                                            <div class="txt">
                                                <h3>{{$listNews->name}}</h3>
                                                <p class="date mb-1"><i class="fa-regular fa-clock"></i>
                                                    <span> {{ \Carbon\Carbon::parse($listNews->created_at)->format('Y-m-d H:i:s') }}</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </section>
        @endif

        @if(count($trademark)>0)
            <section class="sec-brands container">
                <div class="title-h2 mb-3"><h2>THƯƠNG HIỆU ĐỒNG HÀNH</h2></div>
                <div class="swiper swiper-brand fit-brands-slider">
                    <div class="swiper-wrapper">
                        @foreach($trademark as $trademarks)
                            <div class="swiper-slide">
                                <a @if($trademarks->link) href="{{$trademarks->link}}" @endif class="item-brands ">
                                    <img src="{{asset($trademarks->src)}}" class="img-responsive">
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </section>
        @endif

        <div class="newsletter-block"
             style="background: url({{asset('assets/web/images/newsletter-bg.png')}});background-size: cover;background-position: 50%">
            <div class="newsletter-wrapper"><p>Đăng ký nhận bản tin khuyến mãi</p>
                <p>Đừng bỏ lỡ hàng ngàn sản phẩm và chương trình siêu hấp dẫn!</p>
                <form name="frmNewsletter" id="frmNewsletter" method="POST" action="">
                    <div class="d-flex">
                        <input autocomplete="off" type="text" id="newsletter_email"
                               name="newsletter_email" placeholder="Nhập email của bạn" value=""
                               class="form-control">
                        <button type="submit" class="btn btn-primary hvr-sweep-to-right">GỬI</button>
                    </div>
                    <p class="error message-error text-left mt-2 text-danger"></p></form>
            </div>
        </div>
    </div>

@stop
@section('script_page')
    <script>
        var swiper = new Swiper('.swiper-banner-top', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
        });
        var swiperCenter = new Swiper('.swiper-banner-center', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3500,
                disableOnInteraction: false
            },
        });

        var swiperProduct = new Swiper('.swiper-product', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            breakpoints: {
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                450: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                320: {
                    slidesPerView: 1.5,
                    spaceBetween: 10,
                }
            }
        });

        var swiperBlog = new Swiper('.swiper-blog', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            breakpoints: {
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                450: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                320: {
                    slidesPerView: 1.5,
                    spaceBetween: 10,
                }
            }
        });

        var swiperKey = new Swiper('.swiper-key', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            breakpoints: {
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                450: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                320: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                }
            }
        });

        var swiperBrand = new Swiper('.swiper-brand', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            breakpoints: {
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                450: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                320: {
                    slidesPerView: 2.5,
                    spaceBetween: 10,
                }
            }
        });
    </script>
@stop
