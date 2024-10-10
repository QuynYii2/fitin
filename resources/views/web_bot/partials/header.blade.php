@php
    $category = \App\Models\CategoryBlogModel::where('type',2)->get();
@endphp
<div class="box-header">
    <div class="box-content-header">
        <img src="https://ok74.com/wp-content/uploads/2024/04/logo-okvip-2.webp" alt="">
        <div class="content-menu-desktop">
            <a href="{{route('home')}}">Home</a>
            @foreach($category as $item_cate)
            <a href="{{route('post',$item_cate->slug)}}">{{$item_cate->name}}</a>
                @endforeach
        </div>
        <div class="d-flex align-items-center box-dk-dn">
            <a href="#" class="btn-link-dk">Đăng Ký</a>
            <a href="#" class="btn-link-dn">Đăng Nhập</a>
        </div>
        <button class="btn btn-menu-mobile" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-bars"></i></button>
    </div>
</div>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="box-content-menu-mobile">
            <a href="{{route('home')}}" class="item-menu-mobile">Trang Chủ</a>
            @foreach($category as $item_cate)
                <a href="{{route('post',$item_cate->slug)}}" class="item-menu-mobile">{{$item_cate->name}}</a>
            @endforeach
            <a href="#" class="btn-link-dk">Đăng Ký</a>
            <a href="#" class="btn-link-dn">Đăng Nhập</a>
        </div>
    </div>
</div>
