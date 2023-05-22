@extends('layout')
@section('pageTitle', 'Restaurant')
@section('breadcrumb-first', 'Restaurant')
@section('breadcrumb-second', 'Restaurant')
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
            <a class="btn-cus-close" href="/"></a>
            <div class="container contents mCustomScrollbar _mCS_1 mCS_no_scrollbar" style="margin-top:25px"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 981px;"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                <div class="row">
                        <div class="room-title col-sm-12 mb20">
                             <h3>@lang('messager.DV2Title')</h3>
                        </div>
                        <div class="col-sm-5 mb20">
                                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                        <li data-thumb="{{asset('images/Spa-dinning/Balcony Hotel_ Restaurant.jpg')}}">
                                            <img src="{{asset('images/Spa-dinning/Balcony Hotel_ Restaurant.jpg')}}" class="img-responsive">
                                        </li>
                                        <li data-thumb="{{asset('images/Spa-dinning/Balcony Hotel_ Restaurant (3).jpg')}}">
                                            <img src="{{asset('images/Spa-dinning/Balcony Hotel_ Restaurant (3).jpg')}}" class="img-responsive">
                                        </li>
                                        
                                        <li data-thumb="{{asset('images/Spa-dinning/Balcony Hotel_ Restaurant (4).jpg')}}">
                                            <img src="{{asset('images/Spa-dinning/Balcony Hotel_ Restaurant (4).jpg')}}" class="img-responsive">
                                        </li>
                                        <li data-thumb="{{asset('images/Spa-dinning/Balcony Hotel- Buffet Breakfast (3).jpg')}}">
                                            <img src="{{asset('images/Spa-dinning/Balcony Hotel- Buffet Breakfast (3).jpg')}}" class="img-responsive">
                                        </li>
                                        <li data-thumb="{{asset('images/Spa-dinning/Balcony Hotel- Buffet Breakfast (9).jpg')}}">
                                            <img src="{{asset('images/Spa-dinning/Balcony Hotel- Buffet Breakfast (9).jpg')}}" class="img-responsive">
                                        </li>
                                        <li data-thumb="{{asset('images/Spa-dinning/Balcony Hotel- Buffet Breakfast (11).jpg')}}">
                                            <img src="{{asset('images/Spa-dinning/Balcony Hotel- Buffet Breakfast (11).jpg')}}" class="img-responsive">
                                        </li>
                                </ul>
                            </div>

                            <div class="col-sm-7 meeting-content">
                            @lang('messager.DV2Content')

                        </div>

                        <div class="clearfix mb20"></div>

                </div>

            </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><a href="#" class="mCSB_buttonUp" oncontextmenu="return false;"></a><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div><a href="#" class="mCSB_buttonDown" oncontextmenu="return false;"></a></div></div></div>
        </div>
    </div>
</div>

                </div>
            </section>
            @endsection