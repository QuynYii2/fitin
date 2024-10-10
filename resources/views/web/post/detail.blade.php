@extends('web.index')
@section('title',$data->name ?? 'Default Title')

@section('style_page')

@stop
{{--content of page--}}
@section('content')
    <div class="box-home">
        <p>{{$data->name}}</p>
        <div class="content-post">
            {!! $data->content !!}
        </div>
    </div>

@stop
@section('script_page')

@stop
