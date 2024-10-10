@extends('web_bot.index')
@section('title',$data->title ?? 'Default Title')

@section('style_page')

@stop
{{--content of page--}}
@section('content')
    <div class="box-home content-post">
        {!! $data->content !!}
    </div>

@stop
@section('script_page')

@stop
