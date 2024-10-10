@extends('web.index')
@section('title','Khởi nguồn cảm hứng')

@section('style_page')

@stop
{{--content of page--}}
@section('content')
    <div class="article-page v2">
        @if(count($category)>0)
            <section class="article-banner-top">
                <div class="block-bg"></div>
                <div class="block-menu w-90">
                    <div class="row">
                        @foreach($category as $categorys)
                            <div class="col-md-3">
                                <div class="menu-item"><a
                                        href="{{route('post',$categorys->slug)}}">
                                        <div class="menu-img"><img src="{{asset($categorys->src)}}"></div>
                                        <div class="menu-text">{{$categorys->name}}</div>
                                    </a></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
        @if(count($listData)>0)
            <div class="w-90" style="margin-top: 40px;">
                <div class="block-title mb-5"><a><h3>Bài viết mới nhất</h3></a> <span class="line"></span></div>
                <div class="content row">
                    @foreach($listData as $data)
                        <div class="item-article col-md-3">
                            <div class="box-inner ">
                                <a href="{{route('detail-post',$data->slug)}}">
                                    <div class="bg-img"
                                         style="background: url({{asset($data->src)}}) 0% 0% / cover no-repeat;"></div>
                                    <div class="txt">
                                        <h3>{{$data->name}}</h3>
                                        <p class="date mb-1"><i class="fa-regular fa-clock"></i>
                                            <span> {{ \Carbon\Carbon::parse($data->created_at)->format('Y-m-d H:i:s') }}</span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4 mb-5">
                {{ $listData->appends(request()->all())->links('web.partials.pagination') }}
            </div>
        @endif
    </div>

@stop
@section('script_page')

@stop
