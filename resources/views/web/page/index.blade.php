@extends('web.index')
@section('title',@$data->name)

@section('style_page')
    <style>
        .page-info-content img{
            max-width: 100%;
        }
    </style>
@stop
{{--content of page--}}
@section('content')
    <div class="content">
        <div class="pages">
            <div class="page-info-wrapper">
                <div class="w-90">
                    <div class="page-info-title mb-4"><h3>{{$data->name}}</h3></div>
                    <div class="page-info-content">
                        {!! $data->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('script_page')

@stop
