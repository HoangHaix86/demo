@extends('layout')
@section('pageTitle', 'Deluxe City View Room')
@section('breadcrumb-first', 'Deluxe City View Room')
@section('breadcrumb-second', 'Deluxe City View Room')
@section('main')

<section class="mb30">
    <!--Silder-->


    <!--End Booking box-->
    <!--Slogan-->
    <div id="content">

        <div class="container-fluid">
            <div class="row">
                <div class="container" style="position:relative">
                    <a class="btn-cus-close" href="../index.html"></a>
                    <div class="container contents" style="padding-right:0;margin-top:25px">
                        <div class="row">
                            <div class="col-sm-9 news-show">
                                <h3>@lang('messager.KP5Title')</h3>
                                <div class="news-detail">
                                @lang('messager.KP5Content1')

                                    <p style="line-height:15.6pt"><i><span style="font-size: 13pt;"><img alt="" src="{{asset('images/bo-nuong-lac-canh.jpg')}}" style="width: 800px; height: 571px;" class="mCS_img_loaded"></span></i></p>

                                    @lang('messager.KP5Content2')

                                    <p style="text-align:justify;line-height:15.6pt"><i><span style="font-size: 13pt;"><img alt="" src="{{asset('images/bo-nuong-lac-canh-8-lifevietnamnet-1548(1).jpg')}}" style="width: 800px; height: 533px;" class="mCS_img_loaded"></span></i></p>

                                    @lang('messager.KP5Content3')

                                    <p style="line-height:15.6pt"><i><span style="font-size: 13pt;"><img alt="" src="{{asset('images/bo-nuong-lac-canh-5-lifevietnamnet-1548.jpg')}}" style="width: 800px; height: 629px;" class="mCS_img_loaded"></span></i></p>

                                    @lang('messager.KP5Content4')

                                    <p><img alt="" src="{{asset('images/bo-nuong-lac-canh-2-lifevietnamnet-1548.jpg')}}" style="width: 800px; height: 800px;" class="mCS_img_loaded"></p>

                                    @lang('messager.KP5Content5')
                                    <p><span style="font-size:14px;"><em><img alt="" src="{{asset('images/bo-nuong-lac-canh-7-lifevietnamnet-1548.jpg')}}" style="width: 800px; height: 468px;" class="mCS_img_loaded"></em></span></p>

                                    @lang('messager.KP5Content6')

                                    <p style="line-height:15.6pt"><i><span style="font-size: 13pt;"><img alt="" src="{{asset('images/bo-nuong-lac-canh-3-lifevietnamnet-1548.jpg')}}" style="width: 800px; height: 478px;" class="mCS_img_loaded"></span></i></p>

                                    @lang('messager.KP5Content7')

                                    <p style="line-height:15.6pt">&nbsp;</p>

                                </div>

                            </div>
                            <div class="col-sm-3 news-related">
                                <h3>ĐỊA ĐIỂM KHÁC</h3>
                                <div class="short-line"></div>
                                <div class="define mb20">
                                    <a href="/locations/diep-son-nha-trang">
                                        <img src="{{asset('images/18300955_1420333341338509_6463312596549226128_n.jpg')}}" class="img-responsive mCS_img_loaded">
                                        <h5>@lang('messager.KP1Title')</h5>
                                    </a>
                                </div>
                                <div class="define mb20">
                                    <a href="/locations/10-mon-ngon">
                                        <img src="{{asset('images/nem-nuong(1).jpg')}}" class="img-responsive mCS_img_loaded">
                                        <h5>@lang('messager.KP2Title')</h5>
                                    </a>
                                </div>
                                <div class="define mb20">
                                    <a href="/locations/nha-trang-speciality-can-cake">
                                        <img src="{{asset('images/can-cake-nha-trang-12-lifevietnamnet-1436.jpg')}}" class="img-responsive mCS_img_loaded">
                                        <h5>@lang('messager.KP3Title')</h5>
                                    </a>
                                </div>
                            </div>


                            <div class="clearfix mb20"></div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection