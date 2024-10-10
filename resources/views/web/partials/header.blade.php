@php
    $setting = \App\Models\SettingModel::first();
    $bannerHeader = \App\Models\BannerModel::where('display',1)->where('type',1)->orderBy('location','asc')->first();
@endphp
<div class="header-wrapper">
    @if(isset($bannerHeader))
    <div class="header-banner">
        <a target="_blank" rel="noopener noreferrer"
                                 @if($bannerHeader->link) href="{{$bannerHeader->link}}" @endif><img
                src="{{@$bannerHeader->src}}" class="img-responsive"></a></div>
    @endif
        <div class="fitv2">
        <header class="fit-header">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <div class="align-self-center"><a
                            href="{{route('home')}}"
                            class="fit-header-logo"><img
                                src="{{asset(@$setting->logo??'assets/web/images/logo-footer.png')}}"
                                class="img-responsive"></a></div>
                    <div class="align-self-center">
                        <form autocomplete="off"
                              action=""
                              class="fit-header-search">
                            <button class="fit-btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <input placeholder="Tìm kiếm" name="q" autocomplete="off" class="search"></form>
                    </div>
                    <div class="align-self-center">
                        <div class="fit-header-account hasnt-account d-flex">
                            <div class="flex-shrink-1 col-img-account"> <i class="fa-regular fa-user" style="padding-top: 3px;font-size: 15px"></i></div>
                            <div class="flex-shrink-1 info-account align-self-center"><p class="link-reg-login"><a
                                        href="#">Đăng
                                        nhập</a>/<a
                                        href="#">Đăng
                                        ký</a></p> <a>Tài khoản</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="menu-wrapper d-md-block">
            <nav class="menu-homepage w-90">
                <ul class="navbar-nav">
                    <li class="nav-item"><a
                            href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/page/huong-dan-trai-nghiem-homestyler-&amp;-ar"
                            class="nav-link"><i class="fa-solid fa-book icon-menu"></i> <span>Hướng dẫn trải nghiệm</span></a>
                    </li>
                    <li class="nav-item"><a
                            href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc"
                            class="nav-link"><i class="fa-solid fa-couch icon-menu"></i> <span>Danh mục sản phẩm</span>
                            <i class="fa-solid fa-angle-down ml-2"></i></a>
                        <div class="sub-menu">
                            <div class="sub-menu-collection">
                                <div class="list-collect col-sm-8 col-xs-12">
                                    <div class="row">
                                        <div class="col col-sm-3 mr-bt-20"><h2><a
                                                    href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/giuong"
                                                    title="GIƯỜNG">
                                                    GIƯỜNG
                                                </a></h2>
                                            <ul>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/giuong-tang-1568892109.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/giuong/giuongtang"
                                                        title="GIƯỜNG">
                                                        Giường tầng
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/giuong-hoc-keo-1568892069.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/giuong/giuonghockeo"
                                                        title="GIƯỜNG">
                                                        Giường hộc kéo
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/giuong-doi-1568891970.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/giuong/giuongdoi"
                                                        title="GIƯỜNG">
                                                        Giường đôi
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/20/giuong-don-1568970518.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/giuong/giuongdon"
                                                        title="GIƯỜNG">
                                                        Giường đơn
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="col col-sm-3 mr-bt-20"><h2><a
                                                    href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/tu"
                                                    title="TỦ">
                                                    TỦ
                                                </a></h2>
                                            <ul>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/tu-trang-tri-1568881790.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/tu/tutrangtri"
                                                        title="TỦ">
                                                        Tủ trang trí
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/tukeo-1568881748.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/tu/tungankeo"
                                                        title="TỦ">
                                                        Tủ ngăn kéo
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/tu-quan-ao-1568881664.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/tu/tuquanao"
                                                        title="TỦ">
                                                        Tủ quần áo
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/tu-giay-1568881453.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/tu/tugiay"
                                                        title="TỦ">
                                                        Tủ giày
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/tu-bep-1568881427.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/tu/tubep"
                                                        title="TỦ">
                                                        Tủ bếp
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/tu-dau-giuong-1568881391.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/tu/tudaugiuong"
                                                        title="TỦ">
                                                        Tủ đầu giường
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="col col-sm-3 mr-bt-20"><h2><a
                                                    href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/ban"
                                                    title="BÀN">
                                                    BÀN
                                                </a></h2>
                                            <ul>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/ban-lam-viec-1568880802.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/ban/banlamviec"
                                                        title="BÀN">
                                                        Bàn làm việc
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/ban-an-1568880772.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/ban/banan"
                                                        title="BÀN">
                                                        Bàn ăn
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/ghe-bar2-1568882005.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/ban/banbar"
                                                        title="BÀN">
                                                        Bàn bar
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/10/29/ban-trang-diem-1572324252.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/ban/bantrangdiem"
                                                        title="BÀN">
                                                        Bàn trang điểm
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="col col-sm-3 mr-bt-20"><h2><a
                                                    href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/ghe"
                                                    title="GHẾ">
                                                    GHẾ
                                                </a></h2>
                                            <ul>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/ghe-lam-viec-1568880613.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/ghe/ghelamviec"
                                                        title="GHẾ">
                                                        Ghế làm việc
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/ghe-thu-gian-1568880581.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/ghe/ghethugian"
                                                        title="GHẾ">
                                                        Ghế thư giãn
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/ghe-bar-1568880473.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/ghe/ghebar"
                                                        title="GHẾ">
                                                        Ghế bar
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/ghe-an-1568880429.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/ghe/ghean"
                                                        title="GHẾ">
                                                        Ghế ăn
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="col col-sm-3 mr-bt-20"><h2><a
                                                    href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/sofadon"
                                                    title="SOFA ĐƠN">
                                                    SOFA ĐƠN
                                                </a></h2>
                                            <ul>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/ghe-luoi-1568880379.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/sofadon/ghedongheluoi"
                                                        title="SOFA ĐƠN">
                                                        Ghế đôn/Ghế lười
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/ghe-bang2-1568881703.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/sofadon/ghebang"
                                                        title="SOFA ĐƠN">
                                                        Ghế băng
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/ghe-doc-sach-2-1568881282.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/sofadon/ghedocsach"
                                                        title="SOFA ĐƠN">
                                                        Ghế đọc sách
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/ghe-banh-1568879351.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/sofadon/ghebanh"
                                                        title="SOFA ĐƠN">
                                                        Ghế bành
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="col col-sm-3 mr-bt-20"><h2><a
                                                    href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/sofa"
                                                    title="SOFA">
                                                    SOFA
                                                </a></h2>
                                            <ul>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/20/sofa-goc-1568879512-1568964167.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/sofa/sofagoc"
                                                        title="SOFA">
                                                        Sofa góc
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/18/sofa-giuong-1568792176.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/sofa/sofagiuong"
                                                        title="SOFA">
                                                        Sofa giường
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/18/sofa-3-cho-ngoi-1568792150.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/sofa/sofa3cho"
                                                        title="SOFA">
                                                        Sofa 3 chỗ
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/18/sofa-2-cho-ngoi-1568792091.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/sofa/sofa2cho"
                                                        title="SOFA">
                                                        Sofa 2 chỗ
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="col col-sm-3 mr-bt-20"><h2><a
                                                    href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/bancafe1"
                                                    title="BÀN CAFE">
                                                    BÀN CAFE
                                                </a></h2>
                                            <ul>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/ban-trang-tri-1568881160.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/bancafe1/bantrangtri"
                                                        title="BÀN CAFE">
                                                        Bàn trang trí
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/ban-goc-1568881039.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/bancafe1/bangoc"
                                                        title="BÀN CAFE">
                                                        Bàn góc
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/ban-cafe-1568880848.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/bancafe1/bancafe"
                                                        title="BÀN CAFE">
                                                        Bàn cafe
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="col col-sm-3 mr-bt-20"><h2><a
                                                    href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/ke"
                                                    title="KỆ">
                                                    KỆ
                                                </a></h2>
                                            <ul>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/tu-treo-tuong-1568892353.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/ke/ketreotuong"
                                                        title="KỆ">
                                                        Kệ treo tường
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/ke-sach-1568892209.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/ke/kesach"
                                                        title="KỆ">
                                                        Kệ sách
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/ke-tivi-1568892163.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/ke/ketivi"
                                                        title="KỆ">
                                                        Kệ tivi
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="col col-sm-3 mr-bt-20"><h2><a
                                                    href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/phukien"
                                                    title="PHỤ KIỆN">
                                                    PHỤ KIỆN
                                                </a></h2>
                                            <ul>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/goi-1568892550.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/phukien/goi"
                                                        title="PHỤ KIỆN">
                                                        Gối
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/nem-1568892488.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/phukien/nem"
                                                        title="PHỤ KIỆN">
                                                        Nệm
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/khan-tam-1568892519.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/phukien/khamtam"
                                                        title="PHỤ KIỆN">
                                                        Khăn
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/tham-1568892467.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/phukien/tham"
                                                        title="PHỤ KIỆN">
                                                        Thảm
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/09/19/thung-rac-1568892401.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/phukien/thungrac"
                                                        title="PHỤ KIỆN">
                                                        Thùng rác
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/10/29/guong-1572338236.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/phukien/guong"
                                                        title="PHỤ KIỆN">
                                                        Gương
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/11/28/basket-1574934820.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/phukien/gio"
                                                        title="PHỤ KIỆN">
                                                        Giỏ
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/11/28/moc-ao-1574934762.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/phukien/do-gia-dung"
                                                        title="PHỤ KIỆN">
                                                        Đồ Gia Dụng
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="col col-sm-3 mr-bt-20"><h2><a
                                                    href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/trangtri"
                                                    title="TRANG TRÍ">
                                                    TRANG TRÍ
                                                </a></h2>
                                            <ul>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/10/29/tranh-canvas-1572344948.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/trangtri/tranh"
                                                        title="TRANG TRÍ">
                                                        Tranh
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/10/29/lo-trang-tri-1572345209.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/trangtri/lotrangtri"
                                                        title="TRANG TRÍ">
                                                        Lọ trang trí
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/10/29/cay-trang-tri-1572345615.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/trangtri/caytrangtri"
                                                        title="TRANG TRÍ">
                                                        Cây trang trí
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/10/29/dong-ho-1572345636.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/trangtri/dongho"
                                                        title="TRANG TRÍ">
                                                        Đồng hồ
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/10/29/nen-1572345673.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/trangtri/nen"
                                                        title="TRANG TRÍ">
                                                        Nến
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2019/10/29/trang-tri-1572345777.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/trangtri/den"
                                                        title="TRANG TRÍ">
                                                        Đèn
                                                    </a></li>
                                                <li data-thumb="https://cdn.fitin.vn/cms-ecom/images/2020/01/03/phu-kien-trang-tri-1578022486.jpg"
                                                    class="menu-cat-thumb"><a
                                                        href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/trangtri/phu-kien-trang-tri"
                                                        title="TRANG TRÍ">
                                                        Phụ kiện trang trí
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="col col-sm-3 mr-bt-20"><h2><a
                                                    href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/danh-muc/combo"
                                                    title="Bộ sản phẩm">
                                                    Bộ sản phẩm
                                                </a></h2></div>
                                    </div>
                                </div>
                                <div class="img-collect col-sm-4">
                                    <div class="row"><img
                                            src="https://web.archive.org/web/20200512015804im_/https://cdn.fitin.vn/cms-ecom/images/2019/09/19/giuong-tang-1568892109.jpg"
                                            alt="Fitin.vn" class="thumb-menu-cat"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a
                            href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/projects"
                            class="nav-link"><i class="fa-brands fa-windows icon-menu"></i>
                            <span>Tư vấn thiết kế nội thất</span> <i class="fa-solid fa-angle-down ml-2"></i></a>
                        <ul class="sub-menu">
                            <li>
                                <ul class="sub-menu-thumbnail" style="justify-content: space-around;">
                                    <li>
                                        <div class="item-project"><a
                                                href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/projects">
                                                <div class="item-img"><img
                                                        src="https://web.archive.org/web/20200512015804im_/https://fitin.vn/images/menu-home/menu3-1.jpg"
                                                        alt="Fit In | Home Planner, Style Editor and Architectural Visualization"
                                                        class="img-responsive"></div>
                                                <div class="txt-desc"><p>Dự Án</p></div>
                                            </a></div>
                                    </li>
                                    <li>
                                        <div class="item-project"><a rel="noopener noreferrer" target="_blank"
                                                                     href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/caitaonoithat/">
                                                <div class="item-img"><img
                                                        src="https://web.archive.org/web/20200512015804im_/https://fitin.vn/images/menu-home/menu3-2.jpg"
                                                        alt="Fit In | Home Planner, Style Editor and Architectural Visualization"
                                                        class="img-responsive"></div>
                                                <div class="txt-desc"><p>Cải tạo phòng</p></div>
                                            </a></div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a
                            href="https://web.archive.org/web/20200512015804mp_/https://fitin.vn/cam-nang-noi-that"
                            class="nav-link"><i class="fa-solid fa-fire-flame-curved icon-menu"></i> <span>Khơi nguồn cảm hứng</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
