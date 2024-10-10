@extends('admin.layout.index')
@section('main')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">{{$titlePage}}</h5>
                            </div>
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">IP</th>
                                    <th scope="col">Quốc gia</th>
                                    <th scope="col">Thành phố</th>
                                    <th scope="col">Trang</th>
                                    <th scope="col">Thời gian vào</th>
                                    <th scope="col">Thời gian rời</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($listData as $key => $value)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{ $value->ip }}</td>
                                            <td>{{ $value->country }}</td>
                                            <td>{{ $value->city }}</td>
                                            <td>{{ $value->page }}</td>
                                            <td>{{ $value->enter_time }}</td>
                                            <td>{{ $value->leave_time ?? 'Đang truy cập' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $listData->appends(request()->all())->links('admin.pagination_custom.index') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main><!-- End #main -->
@endsection
@section('script')

@endsection
