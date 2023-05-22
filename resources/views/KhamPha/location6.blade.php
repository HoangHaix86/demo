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
                                <h3>@lang('messager.KP6Title')</h3>
                                <div class="news-detail">
                                     
                                        @lang('messager.KP6Content1')

                                        <p><img alt="Vinh-Cam-Ranh" src="{{asset('images/Locations/')}}" style="width: 800px; height: 534px;" class="mCS_img_loaded"></p>

                                        @lang('messager.KP6Content2')

                                        <p><img alt="Vinh-Cam-Ranh-Bai-Dai" src="{{asset('images/Locations/')}}" style="width: 800px; height: 533px;" class="mCS_img_loaded"></p>

                                        @lang('messager.KP6Content3')


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