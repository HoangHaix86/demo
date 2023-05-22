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
                    <a class="btn-cus-close" href="/"></a>
                    <div class="container contents" style="padding-right:0;margin-top:25px">
                        <div class="row">
                            <div class="col-sm-9 news-show">
                                <h3>@lang('messager.KP4Title')</h3>
                                <div class="news-detail">
                                    @lang('messager.KP4Content1')

                                    <p><img alt="Nhà thờ Chánh Tòa Nha Trang" src="{{asset('images/Locations/Nha-tho-Nui-03.jpg')}}" style="width: 800px; height: 534px;" class="mCS_img_loaded"></p>

                                   
                                    @lang('messager.KP4Content2')

                                    <p><img alt="" src="{{asset('images/Locations/3%20star%20hotel%20nha%20trang%20balcony_%20yersin%20museum%20nha%20trang%20(2).jpg')}}" style="width: 800px; height: 533px;" class="mCS_img_loaded"></p>

                                  
                                    @lang('messager.KP4Content3')

                                    <p><img alt="" src="{{asset('images/Locations/3%20star%20hotel%20nha%20trang%20balcony_%20Dam%20market.jpg')}}" style="width: 800px; height: 554px;" class="mCS_img_loaded"></p>

                                   
                                    @lang('messager.KP4Content4')

                                    <p><img alt="" src="{{asset('images/Locations/3%20star%20hotel%20nha%20trang%20balcony_%20long%20son%20pagoda.jpg')}}" style="width: 800px; height: 534px;" class="mCS_img_loaded"></p>

                                   
                                    @lang('messager.KP4Content5')

                                    <p><img alt="" src="{{asset('images/Locations/3%20star%20hotel%20nha%20trang%20balcony_%20Cham%20Temple%20PoNagar%20Nha%20Trang.jpg')}}" style="width: 800px; height: 531px;" class="mCS_img_loaded"></p>

                                  
                                    @lang('messager.KP4Content6')

                                    <p><img alt="" src="{{asset('images/Locations/nha-trang-3%20star%20hotel%20nha%20trang%20balcony_%20night%20market.jpg')}}" style="width: 800px; height: 462px;" class="mCS_img_loaded"></p>

                                   
                                    @lang('messager.KP4Content7')

                                    <p><em><img alt="" src="{{asset('images/Locations/3%20star%20hotel%20nha%20trang%20balcony_%20NATIONAL%20OCEANOGRAPHIC%20MUSEUM%20OF%20VIETNAM.jpg')}}" style="width: 800px; height: 535px;" class="mCS_img_loaded"></em></p>

                                    
                                    @lang('messager.KP4Content8')

                                    <p><em><img alt="" src="{{asset('images/Locations/3%20star%20hotel%20Nha%20Trang%20Balcony_%20Hon%20Chong%20Nha%20Trang.jpg')}}" style="width: 800px; height: 535px;" class="mCS_img_loaded"></em></p>

                                   
                                    @lang('messager.KP4Content9')

                                    <p><em><img alt="" src="{{asset('images/Locations/3%20star%20hotel%20Nha%20Trang%20Balcony_sailing%20club%20nha%20trang%20(1).jpg')}}" style="width: 800px; height: 532px;" class="mCS_img_loaded"></em></p>

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