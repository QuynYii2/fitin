@extends('admin.layout.index')
@section('title', 'Hướng dẫn trải nghiệm')

@section('style')

@endsection

@section('main')
    <main id="main" class="main d-flex flex-column justify-content-center">
        <div class="">
            <h1 class="h3 mb-4 text-gray-800">{{$titlePage}}</h1>
            <hr>
            <form action="{{ route('admin.experience.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-3">
                    <div class="col-2">Tiêu đề:</div>
                    <div class="col-10">
                        <input class="form-control" name="name" value="{{@$data->name}}" type="text" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">Mội dung:</div>
                    <div class="col-10">
                        <textarea name="content" id="content" required rows="4"
                                  class="form-control">{!! @$data->content !!}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Lưu</button>
            </form>
        </div>

    </main>
@endsection
@section('script')
    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height:'700px'
        });

    </script>
@endsection
