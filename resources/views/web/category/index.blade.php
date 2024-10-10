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
                    <ol role="navigation" aria-label="breadcrumbs" class="breadcrumb">
                        <li><a href="{{route('home')}}">Trang chủ</a></li>
                        <li>
                            <a href="#">BÀN</a>
                        </li>
                    </ol>
                </div>
                <div class="row">
                    <div class="position-unset w-100-res767 col-md-3">
                        <div class="categories-menu">
                            <div class="menu-feature">
                                <div class="menu-block menu-has-child"><h3 class="main-title">DANH MỤC SẢN PHẨM</h3>
                                    <ul class="submenu menu">
                                        <li>
                                            <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc"
                                               class="title link ">TẤT CẢ</a> <span class="menu-plug">
                    (5376)
                </span></li>
                                        <li class="filter-block"><strong class="menu-header "><a
                                                    href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/giuong"
                                                    class="title link ">
                                                    GIƯỜNG
                                                </a> <span class="menu-plug">(221)</span> <img
                                                    src="https://web.archive.org/web/20200512015603im_/https://fitin.vn/images/down.png"
                                                    alt="" class="icon"></strong>
                                            <ul class="menu-content-show ">
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/giuong/giuongtang"
                                                       class="link ">Giường tầng</a> <span class="menu-plug">(1)</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/giuong/giuonghockeo"
                                                       class="link ">Giường hộc kéo</a> <span
                                                        class="menu-plug">(7)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/giuong/giuongdoi"
                                                       class="link ">Giường đôi</a> <span class="menu-plug">(186)</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/giuong/giuongdon"
                                                       class="link ">Giường đơn</a> <span class="menu-plug">(21)</span>
                                                </li>
                                                <br></ul>
                                        </li>
                                        <li class="filter-block"><strong class="menu-header "><a
                                                    href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/tu"
                                                    class="title link ">
                                                    TỦ
                                                </a> <span class="menu-plug">(741)</span> <img
                                                    src="https://web.archive.org/web/20200512015603im_/https://fitin.vn/images/down.png"
                                                    alt="" class="icon"></strong>
                                            <ul class="menu-content-show ">
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/tu/tutrangtri"
                                                       class="link ">Tủ trang trí</a> <span
                                                        class="menu-plug">(296)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/tu/tungankeo"
                                                       class="link ">Tủ ngăn kéo</a> <span
                                                        class="menu-plug">(121)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/tu/tuquanao"
                                                       class="link ">Tủ quần áo</a> <span class="menu-plug">(146)</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/tu/tugiay"
                                                       class="link ">Tủ giày</a> <span class="menu-plug">(29)</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/tu/tubep"
                                                       class="link ">Tủ bếp</a> <span class="menu-plug">(83)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/tu/tudaugiuong"
                                                       class="link ">Tủ đầu giường</a> <span
                                                        class="menu-plug">(66)</span></li>
                                                <br></ul>
                                        </li>
                                        <li class="filter-block"><strong class="menu-header "><a
                                                    href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ban"
                                                    class="title link active">
                                                    BÀN
                                                </a> <span class="menu-plug">(488)</span> <img
                                                    src="https://web.archive.org/web/20200512015603im_/https://fitin.vn/images/down.png"
                                                    alt="" class="icon"></strong>
                                            <ul class="menu-content-show ">
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ban/banlamviec"
                                                       class="link ">Bàn làm việc</a> <span
                                                        class="menu-plug">(176)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ban/banan"
                                                       class="link ">Bàn ăn</a> <span class="menu-plug">(278)</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ban/banbar"
                                                       class="link ">Bàn bar</a> <span class="menu-plug">(4)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ban/bantrangdiem"
                                                       class="link ">Bàn trang điểm</a> <span
                                                        class="menu-plug">(28)</span></li>
                                                <br></ul>
                                        </li>
                                        <li class="filter-block"><strong class="menu-header "><a
                                                    href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ghe"
                                                    class="title link ">
                                                    GHẾ
                                                </a> <span class="menu-plug">(396)</span> <img
                                                    src="https://web.archive.org/web/20200512015603im_/https://fitin.vn/images/down.png"
                                                    alt="" class="icon"></strong>
                                            <ul class="menu-content-show ">
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ghe/ghelamviec"
                                                       class="link ">Ghế làm việc</a> <span
                                                        class="menu-plug">(51)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ghe/ghethugian"
                                                       class="link ">Ghế thư giãn</a> <span
                                                        class="menu-plug">(54)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ghe/ghebar"
                                                       class="link ">Ghế bar</a> <span class="menu-plug">(26)</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ghe/ghean"
                                                       class="link ">Ghế ăn</a> <span class="menu-plug">(265)</span>
                                                </li>
                                                <br></ul>
                                        </li>
                                        <li class="filter-block"><strong class="menu-header "><a
                                                    href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/sofadon"
                                                    class="title link ">
                                                    SOFA ĐƠN
                                                </a> <span class="menu-plug">(266)</span> <img
                                                    src="https://web.archive.org/web/20200512015603im_/https://fitin.vn/images/down.png"
                                                    alt="" class="icon"></strong>
                                            <ul class="menu-content-show ">
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/sofadon/ghedongheluoi"
                                                       class="link ">Ghế đôn/Ghế lười</a> <span
                                                        class="menu-plug">(146)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/sofadon/ghebang"
                                                       class="link ">Ghế băng</a> <span class="menu-plug">(25)</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/sofadon/ghedocsach"
                                                       class="link ">Ghế đọc sách</a> <span
                                                        class="menu-plug">(11)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/sofadon/ghebanh"
                                                       class="link ">Ghế bành</a> <span class="menu-plug">(73)</span>
                                                </li>
                                                <br></ul>
                                        </li>
                                        <li class="filter-block"><strong class="menu-header "><a
                                                    href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/sofa"
                                                    class="title link ">
                                                    SOFA
                                                </a> <span class="menu-plug">(268)</span> <img
                                                    src="https://web.archive.org/web/20200512015603im_/https://fitin.vn/images/down.png"
                                                    alt="" class="icon"></strong>
                                            <ul class="menu-content-show ">
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/sofa/sofagoc"
                                                       class="link ">Sofa góc</a> <span class="menu-plug">(61)</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/sofa/sofagiuong"
                                                       class="link ">Sofa giường</a> <span class="menu-plug">(23)</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/sofa/sofa3cho"
                                                       class="link ">Sofa 3 chỗ</a> <span class="menu-plug">(111)</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/sofa/sofa2cho"
                                                       class="link ">Sofa 2 chỗ</a> <span class="menu-plug">(67)</span>
                                                </li>
                                                <br></ul>
                                        </li>
                                        <li class="filter-block"><strong class="menu-header "><a
                                                    href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/bancafe1"
                                                    class="title link ">
                                                    BÀN CAFE
                                                </a> <span class="menu-plug">(286)</span> <img
                                                    src="https://web.archive.org/web/20200512015603im_/https://fitin.vn/images/down.png"
                                                    alt="" class="icon"></strong>
                                            <ul class="menu-content-show ">
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/bancafe1/bantrangtri"
                                                       class="link ">Bàn trang trí</a> <span
                                                        class="menu-plug">(40)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/bancafe1/bangoc"
                                                       class="link ">Bàn góc</a> <span class="menu-plug">(57)</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/bancafe1/bancafe"
                                                       class="link ">Bàn cafe</a> <span class="menu-plug">(175)</span>
                                                </li>
                                                <br></ul>
                                        </li>
                                        <li class="filter-block"><strong class="menu-header "><a
                                                    href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ke"
                                                    class="title link ">
                                                    KỆ
                                                </a> <span class="menu-plug">(471)</span> <img
                                                    src="https://web.archive.org/web/20200512015603im_/https://fitin.vn/images/down.png"
                                                    alt="" class="icon"></strong>
                                            <ul class="menu-content-show ">
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ke/ketreotuong"
                                                       class="link ">Kệ treo tường</a> <span
                                                        class="menu-plug">(32)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ke/kesach"
                                                       class="link ">Kệ sách</a> <span class="menu-plug">(147)</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/ke/ketivi"
                                                       class="link ">Kệ tivi</a> <span class="menu-plug">(273)</span>
                                                </li>
                                                <br></ul>
                                        </li>
                                        <li class="filter-block"><strong class="menu-header "><a
                                                    href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/phukien"
                                                    class="title link ">
                                                    PHỤ KIỆN
                                                </a> <span class="menu-plug">(1099)</span> <img
                                                    src="https://web.archive.org/web/20200512015603im_/https://fitin.vn/images/down.png"
                                                    alt="" class="icon"></strong>
                                            <ul class="menu-content-show ">
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/phukien/goi"
                                                       class="link ">Gối</a> <span class="menu-plug">(183)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/phukien/nem"
                                                       class="link ">Nệm</a> <span class="menu-plug">(50)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/phukien/khamtam"
                                                       class="link ">Khăn</a> <span class="menu-plug">(110)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/phukien/tham"
                                                       class="link ">Thảm</a> <span class="menu-plug">(164)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/phukien/thungrac"
                                                       class="link ">Thùng rác</a> <span class="menu-plug">(43)</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/phukien/guong"
                                                       class="link ">Gương</a> <span class="menu-plug">(111)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/phukien/gio"
                                                       class="link ">Giỏ</a> <span class="menu-plug">(51)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/phukien/do-gia-dung"
                                                       class="link ">Đồ Gia Dụng</a> <span
                                                        class="menu-plug">(337)</span></li>
                                                <br></ul>
                                        </li>
                                        <li class="filter-block"><strong class="menu-header "><a
                                                    href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/trangtri"
                                                    class="title link ">
                                                    TRANG TRÍ
                                                </a> <span class="menu-plug">(1099)</span> <img
                                                    src="https://web.archive.org/web/20200512015603im_/https://fitin.vn/images/down.png"
                                                    alt="" class="icon"></strong>
                                            <ul class="menu-content-show ">
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/trangtri/tranh"
                                                       class="link ">Tranh</a> <span class="menu-plug">(397)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/trangtri/lotrangtri"
                                                       class="link ">Lọ trang trí</a> <span
                                                        class="menu-plug">(43)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/trangtri/caytrangtri"
                                                       class="link ">Cây trang trí</a> <span
                                                        class="menu-plug">(32)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/trangtri/dongho"
                                                       class="link ">Đồng hồ</a> <span class="menu-plug">(39)</span>
                                                </li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/trangtri/nen"
                                                       class="link ">Nến</a> <span class="menu-plug">(32)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/trangtri/den"
                                                       class="link ">Đèn</a> <span class="menu-plug">(470)</span></li>
                                                <br>
                                                <li>
                                                    <a href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/trangtri/phu-kien-trang-tri"
                                                       class="link ">Phụ kiện trang trí</a> <span
                                                        class="menu-plug">(84)</span></li>
                                                <br></ul>
                                        </li>
                                        <li class="filter-block"><strong class="menu-header "><a
                                                    href="https://web.archive.org/web/20200512015603mp_/https://fitin.vn/danh-muc/combo"
                                                    class="title link ">
                                                    Bộ sản phẩm
                                                </a> <span class="menu-plug">(41)</span> <img
                                                    src="https://web.archive.org/web/20200512015603im_/https://fitin.vn/images/down.png"
                                                    alt="" class="icon"></strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-unset col-md-9 col-sm-12 content-product-category">
                        <div class="content-catagory">
                            <div class="category-title"><h1 class="title-content">BÀN</h1></div>
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
