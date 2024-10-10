@extends('web_bot.index')
@section('title',$data->name ?? 'Default Title')

@section('style_page')
    <link rel="stylesheet" href="{{asset('assets/web/css/post.css')}}">
@stop
{{--content of page--}}
@section('content')
    <div class="box-post">
        <p class="name-page">Bài viết</p>
        <div class="box-contnet-post">
            @foreach($listData as $item)
            <a href="{{route('detail-post',$item->slug)}}" class="item-post">
                <img src="{{asset($item->src)}}" alt="" class="img-post">
                <p class="title-post">{{$item->name}}</p>
            </a>
                @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $listData->links('pagination::bootstrap-5') }}
        </div>
    </div>

@stop
@section('script_page')

@stop
