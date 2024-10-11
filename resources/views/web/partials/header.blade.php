@php
    $setting = \App\Models\SettingModel::first();
    $bannerHeader = \App\Models\BannerModel::where('display',1)->where('type',1)->orderBy('location','asc')->first();
    $categoryList = \App\Models\CategoryModel::where('parent_id',0)->get();
    foreach ($categoryList as $itemCate){
        $itemCate->childCate = \App\Models\CategoryModel::where('parent_id',$itemCate->id)->get();
    }
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
                            <div class="flex-shrink-1 col-img-account"><i class="fa-regular fa-user"
                                                                          style="padding-top: 3px;font-size: 15px"></i>
                            </div>
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
                            href="{{route('experience')}}"
                            class="nav-link"><i class="fa-solid fa-book icon-menu"></i>
                            <span>Hướng dẫn trải nghiệm</span></a>
                    </li>
                    <li class="nav-item"><a
                            class="nav-link"><i class="fa-solid fa-couch icon-menu"></i> <span>Danh mục sản phẩm</span>
                            <i class="fa-solid fa-angle-down ml-2"></i></a>
                        <div class="sub-menu">
                            <div class="sub-menu-collection">
                                <div class="list-collect col-sm-8 col-xs-12">
                                    <div class="row">
                                        @if(count($categoryList)>0)
                                            @foreach($categoryList as $categoryLists)
                                                <div class="col col-sm-3 mr-bt-20"><h2><a
                                                            href="{{route('category',$categoryLists->slug)}}">
                                                            {{$categoryLists->name}}
                                                        </a></h2>
                                                    @if(count($categoryLists->childCate)>0)
                                                        <ul>
                                                            @foreach($categoryLists->childCate as $cateChild)
                                                                <li class="menu-cat-thumb"><a
                                                                        href="{{route('category',$cateChild->slug)}}">
                                                                        {{$cateChild->name}}
                                                                    </a></li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="img-collect col-sm-4">
                                    <div class="row"><img
                                            src="{{asset('assets/web/images/giuong-tang.jpg')}}"
                                            class="thumb-menu-cat"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fa-brands fa-windows icon-menu"></i>
                            <span>Tư vấn thiết kế nội thất</span> <i class="fa-solid fa-angle-down ml-2"></i></a>
                        <ul class="sub-menu">
                            <li>
                                <ul class="sub-menu-thumbnail" style="justify-content: space-around;">
                                    <li>
                                        <div class="item-project"><a
                                                href="{{url('tu-van-thiet-ke-noi-that/1')}}">
                                                <div class="item-img"><img
                                                        src="{{asset('assets/web/images/menu3-1.jpg')}}"
                                                        class="img-responsive"></div>
                                                <div class="txt-desc"><p>Dự Án</p></div>
                                            </a></div>
                                    </li>
                                    <li>
                                        <div class="item-project"><a rel="noopener noreferrer" target="_blank"
                                                                     href="{{url('tu-van-thiet-ke-noi-that/2')}}">
                                                <div class="item-img"><img
                                                        src="{{asset('assets/web/images/menu3-2.jpg')}}"
                                                        class="img-responsive"></div>
                                                <div class="txt-desc"><p>Cải tạo phòng</p></div>
                                            </a></div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a
                            href="{{route('new')}}"
                            class="nav-link"><i class="fa-solid fa-fire-flame-curved icon-menu"></i> <span>Khơi nguồn cảm hứng</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
