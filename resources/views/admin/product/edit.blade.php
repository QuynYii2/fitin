@extends('admin.layout.index')
@section('main')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                        <form method="post" action="{{url('admin/product/update/'.$product->id)}}"
                              enctype="multipart/form-data" class="card p-3">
                        @csrf
                        <div class="row mb-3 box_parameter_2">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0 parameter_2">Tên sản phẩm</p>
                            </div>
                            <div class="col-9">
                                <input class="form-control" name="name" value="{{$product->name}}" required>
                            </div>
                        </div>
                        <div class="row mb-3 box_parameter_2">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0 parameter_2">Mã sản phẩm</p>
                            </div>
                            <div class="col-9">
                                <input class="form-control" name="code" value="{{$product->sku}}" required>
                            </div>
                        </div>
                            <div class="row mb-3">
                                <div class="col-3 d-flex align-items-center">
                                    <p class="m-0">Danh mục :</p>
                                </div>
                                <div class="col-9">
                                    <div class="row m-0 border">
                                        <div class="col-lg-4 pt-2 pb-2"
                                             style="border-right: 1px solid #dddddd; overflow: auto; max-height: 400px">
                                            @foreach($category_all as $key => $cate)
                                                <div class="d-flex align-items-center category p-1">
                                                    <div class="d-flex align-items-center" style="margin-right: 10px">
                                                        <input type="radio" style="width: 20px; height: 20px" id="cate{{$key}}"
                                                               value="{{$cate->id}}" name="category" @if($cate_big->parent_id == $cate->id) checked @elseif($cate_big->id == $cate->id) checked @endif></div>
                                                    <label for="cate{{$key}}" class="m-0">{{$cate->name}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div list_category_children class="col-lg-4 pb-2 pt-2"
                                             style="border-right: 1px solid #dddddd; overflow: auto; max-height: 400px">
                                            @foreach($category_child as $value)
                                                <div class="d-flex align-items-center category list_category_children p-1">
                                                    <div class="d-flex align-items-center" style="margin-right: 10px">
                                                        <input type="radio" style="width: 20px; height: 20px"
                                                               value="{{$value->id}}"
                                                               @if($product->category_id == $value->id) checked
                                                               @endif name="category_children">
                                                    </div>
                                                    <p class="m-0">{{$value->name}}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3 box_parameter_2">
                                <div class="col-3 d-flex align-items-center">
                                    <p class="m-0 parameter_2">Thương hiệu</p>
                                </div>
                                <div class="col-9">
                                    <select name="trademark_id" class="form-control">
                                        @foreach($trademark as $trademarks)
                                            <option value="{{$trademarks->id}}" @if($product->trademark_id == $trademarks->id) selected @endif>{{$trademarks->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        <div class="row mb-3 box_parameter_2">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0 parameter_2">Giá bán</p>
                            </div>
                            <div class="col-9">
                                <input class="form-control price format-currency" name="price" value="{{number_format($product->price)}}" required>
                            </div>
                        </div>
                            <div class="row mb-3 box_parameter_2">
                                <div class="col-3 d-flex align-items-center">
                                    <p class="m-0 parameter_2">Giá khuyến mãi</p>
                                </div>
                                <div class="col-9">
                                    <input class="form-control price format-currency" value="@if($product->price_promotional != 0) {{number_format($product->price_promotional)}} @endif"  name="price_promotional" >
                                </div>
                            </div>
                            <div class="card mb-5">
                                <div class="card-header bg-info text-white">
                                    Hình ảnh sản phẩm
                                </div>
                                <div class="card-body">
                                    <div class="image-uploader image_product has-files mt-2">
                                        <div class="uploaded">
                                            @foreach($product_img as $value)
                                                <div class="uploaded-images">
                                                    <img src="{{asset($value->src)}}">
                                                    <button type="button" value="{{$value->id}}" class="delete__image"><i
                                                            class="bi bi-x"></i></button>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="card mb-3">
                            <div class="card-header bg-info text-white">
                                Cập nhật hình ảnh sản phẩm
                            </div>
                            <div class="card-body">
                                <label class="mt-2 mb-2"><i class="fa fa-upload"></i> Chọn hoặc kéo ảnh vào khung bên
                                    dưới</label>
                                <div class="input-image-product">
                                </div>
                            </div>
                        </div>
                            <div class="card mb-3">
                                <a data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="true"
                                   aria-controls="collapseExample1" class="btn bg-info text-white card-header">
                                    <p class="d-flex align-items-center justify-content-between mb-0"><strong
                                            style="font-weight: unset">Mô tả sản phẩm</strong><i
                                            class="fa fa-angle-down"></i></p>
                                </a>
                                <div id="collapseExample1" class="collapse shadow-sm show">
                                    <div class="card">
                                        <div class="card-body mt-2">
                                        <textarea name="describe" id="describe"
                                                  class="ckeditor">{!! $product->describe !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="card mb-3">
                            <a data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="true"
                               aria-controls="collapseExample1" class="btn bg-info text-white card-header">
                                <p class="d-flex align-items-center justify-content-between mb-0"><strong
                                        style="font-weight: unset">Thông tin sản phẩm</strong><i
                                        class="fa fa-angle-down"></i></p>
                            </a>
                            <div id="collapseExample1" class="collapse shadow-sm show">
                                <div class="card">
                                    <div class="card-body mt-2">
                                        <textarea name="content" id="content"
                                                  class="ckeditor">{!! $product->content !!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label">Trạng thái: </label>
                            <div class="col-sm-8">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" name="display" type="checkbox" @if($product->display == 1) checked @endif
                                           id="flexSwitchCheckChecked">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Hiện sản phẩm</label>
                                </div>
                            </div>
                        </div>
                            <div class="row mb-4">
                                <label class="col-sm-3 col-form-label">Sản phẩm flash sale: </label>
                                <div class="col-sm-8">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" name="is_sale" type="checkbox" @if($product->is_sale == 1) checked @endif
                                        id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Flash sale</label>
                                    </div>
                                </div>
                            </div>

                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-success" style="margin-right: 15px">Cập nhật</button>
                            <button type="reset" class="btn btn-dark">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script src="{{url('assets/admin/js/input_file.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/admin/js/format_currency.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/admin/js/create_product.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height:'500px'
        });
        CKEDITOR.replace('describe', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height:'500px'
        });
    </script>
    <script>
        $('button.delete__image').confirm({
            title: 'Xác nhận!',
            content: 'Bạn có chắc chắn muốn xóa bản ghi này?',
            buttons: {
                ok: {
                    text: 'Xóa',
                    btnClass: 'btn-danger',
                    action: function(){
                        let data = {};
                        data['id'] = this.$target.attr("value");
                        $.ajax({
                            url: window.location.origin + '/admin/product/delete-img',
                            data: data,
                            dataType: 'json',
                            type: 'post',
                            success: function (data) {
                                if (data.status){
                                    location.reload();
                                }
                            }
                        });
                    }
                },
                close: {
                    text: 'Hủy',
                    action: function () {}
                }
            }
        });
        $('a.btn-delete-color').confirm({
            title: 'Xác nhận!',
            content: 'Bạn có chắc chắn muốn xóa bản ghi này?',
            buttons: {
                ok: {
                    text: 'Xóa',
                    btnClass: 'btn-danger',
                    action: function(){
                        location.href = this.$target.attr('href');
                    }
                },
                close: {
                    text: 'Hủy',
                    action: function () {}
                }
            }
        });
    </script>
@endsection
