@extends('web.index')
@section('title',$data->name)

@section('style_page')

@stop
{{--content of page--}}
@section('content')
    <div class="article-page v2">
        <div class="w-90" style="margin-top: 40px;">
            <div class="block-title mb-5"><a><h3>{{$data->name}} mới nhất</h3></a> <span class="line"></span></div>
            @if(count($listData)>0)
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
                <div class="d-flex justify-content-center mt-4 mb-5">
                    {{ $listData->appends(request()->all())->links('web.partials.pagination') }}
                </div>
            @endif
        </div>

    </div>

@stop
@section('script_page')

@stop
