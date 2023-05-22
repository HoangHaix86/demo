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
                               <h3>
                                @lang('messager.KP3Title')</h3>
                            <div class="news-detail">
                                
                            @lang('messager.KP3Content1')
                                <p><img alt="" src=" {{asset('images/can-cake-nha-trang-12-lifevietnamnet-1436.jpg')}}" style="width: 800px; height: 533px;" class="mCS_img_loaded"></p>

                                @lang('messager.KP3Content2')
                                <p><img alt="" src=" {{asset('images/can-cake-nha-trang-2-lifevietnamnet-1436.jpg')}}" style="width: 800px; height: 600px;" class="mCS_img_loaded"></p>

                                @lang('messager.KP3Content3')
                                <p><img alt="" src=" {{asset('images/can-cake-nha-trang-5-lifevietnamnet-1436.jpg')}}" style="width: 800px; height: 534px;" class="mCS_img_loaded"></p>

                                <p><img alt="" src=" {{asset('images/can-cake-nha-trang-6-lifevietnamnet-1436.jpg')}}" style="width: 800px; height: 533px;" class="mCS_img_loaded"></p>

                                @lang('messager.KP3Content4')
                                <p><img alt="" src=" {{asset('images/can-cake-nha-trang-8-lifevietnamnet-1436.jpg')}}" style="width: 800px; height: 534px;" class="mCS_img_loaded"></p>

                                @lang('messager.KP3Content5')

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
                                    <a href="/locations/tourist-attractions-nha-trang">
                                        <img src="{{asset('images/Locations/Nha-tho-da-nha-trang.jpg')}}" class="img-responsive mCS_img_loaded">
                                        <h5>@lang('messager.KP4Title')</h5>
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