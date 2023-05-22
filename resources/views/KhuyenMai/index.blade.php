@extends('layout')
@section('pageTitle', 'Khuyến mãi')
@section('breadcrumb-first', 'Khuyến mãi')
@section('breadcrumb-second', 'Khuyến mãi')
@section('main')

            <section class="mb30">
                <!--Silder-->
                

                <!--End Booking box-->
                <!--Slogan-->
                <div id="content">
                    
<div class="container-fluid">
    <!--<img src="/upload/images/Others/resoft-bayana-2_06.png" class="view-camera">-->
    <div class="row">
        <div class="container" style="position:relative">
            <a class="btn-cus-close" href="index.html"></a>
            <div class="container contents" style="padding-right:0;margin-top:25px">

                <div class="row mt20">
                <div class="col-sm-4 mb10">
                                    <div class="block-contain">
                                        <a href="/promotion/eternity-honeymoon-package" title="Phòng Deluxe City View có ban công"><img src="{{asset('images/files/low-season-package-02.png')}}" class="img-responsive mCS_img_loaded"></a>
                                        <h4 style="color:#3EACD2"><a href="/promotion/eternity-honeymoon-package" title="Phòng Deluxe City View có ban công">@lang('messager.KM1Title')</a></h4>
                                        <div class="short-line"></div>
                                        <div class="pad-left-15 pad-right-15 child-content">
                                            <p>@lang('messager.KM1Detail') </p>
                                        </div>
                                        <div class="short-line"></div>
                                        <div class="readMore mb20">
                                            <a class="mb20" href="/promotion/eternity-honeymoon-package" title="Read More">Đọc tiếp</a>
                                        </div>

                                    </div>
                                </div>
                </div>
            </div>
        </div>

    </div>
    
</div>

                </div>
            </section>
            @endsection