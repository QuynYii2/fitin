@php
    $setting = \App\Models\SettingModel::first();
    $postFooter1 = \App\Models\PostModel::where('type',1)->get();
    $postFooter2 = \App\Models\PostModel::where('type',2)->get();
@endphp
<div class="footer line-t">
    <div class="footer-top w-90">
        <div class="row">
            <div class="w-50 f-l-res mr-bt-20 col-md-3">
                <h4 class="txt-tranform">LIÊN HỆ VỚI FITIN</h4>
                <div class="contact-footer">
                    {!! @$setting->contact !!}
                </div>
                <a href="{{route('home')}}" class="logo-ft"><img alt="logo" src="{{asset(@$setting->logo??'assets/web/images/logo-footer.png')}}" class="App-logo"></a>
            </div>
            <div class="w-50 f-l-res mr-bt-20 col-md-3">
                <h4 class="txt-tranform">về chúng tôi</h4>
                @if(count($postFooter1)>0)
                <ul class="block-item-ft">
                    @foreach($postFooter1 as $postFooter1s)
                    <li>
                        <a href="{{route('detail-page',$postFooter1s->slug)}}" title="{{$postFooter1s->name}}" class="link">{{$postFooter1s->name}}</a>
                    </li>
                    @endforeach
                </ul>
                    @endif
            </div>
            <div class="w-50 f-l-res mr-bt-20 col-md-3">
                <h4 class="txt-tranform">HỖ TRỢ KHÁCH HÀNG</h4>
                <ul class="block-item-ft">
                    @if(count($postFooter2)>0)
                        @foreach($postFooter2 as $postFooter2s)
                    <li>
                        <a href="{{route('detail-page',$postFooter1s->slug)}}" title="{{$postFooter2s->name}}" class="link">{{$postFooter2s->name}}</a>
                    </li>
                        @endforeach
                   @endif
                </ul>
            </div>
            <div class="w-50 f-l-res mr-bt-20 col-md-3">
                <h4 class="txt-tranform">KẾT NỐI VỚI CHÚNG TÔI</h4>
                <ul class="block-item-ft fsocial">
                    <li>
                        <a @if($setting->facebook) href="{{@$setting->facebook}}" @endif target="_blank" rel="noopener noreferrer"><img src="{{asset('assets/web/images/facebok.png')}}" alt="facebook"></a>
                    </li>
                    <li>
                        <a @if($setting->instagram) href="{{@$setting->instagram}}" @endif target="_blank" rel="noopener noreferrer"><img src="{{asset('assets/web/images/instagram.png')}}" alt="instagram"></a>
                    </li>
                </ul>
                <h4 class="mr-t-20 txt-tranform">TẢI ỨNG DỤNG FITIN</h4>
                <div class="block-item-ft fapp-store mb-2">
                    <li>
                        <a href="#" rel="noopener noreferrer" target="_blank"><img src="{{asset('assets/web/images/app-ios.jpg')}}" alt=""></a>
                    </li>
                    <li>
                        <a target="_blank"><img src="{{asset('assets/web/images/code.png')}}" alt="" class="code-img"></a>
                    </li>
                </div>
                <h4 class="txt-tranform">PHƯƠNG THỨC THANH TOÁN</h4>
                <ul class="block-item-ft fpayment">
                    <li>
                        <img src="{{asset('assets/web/images/visa-electron-at.png')}}" alt="visa">
                    </li>
                    <li>
                        <img src="{{asset('assets/web/images/mastercard-at.png')}}" alt="master">
                    </li>
                    <li>
                        <img src="{{asset('assets/web/images/group-7-at.png')}}" alt="cash">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <div class="w-90 dp-flex-w-sbt align-i-center">
            <div class="contact-footer">
                {!! @$setting->describe !!}
            </div>
            <div class="dadangky">
                <a rel="noopener noreferrer" href="#" target="_blank">
                    <img src="{{asset('assets/web/images/dadangky.png')}}" alt="Image" class="img-responsive">
                </a>
            </div>
        </div>
    </div>
</div>
