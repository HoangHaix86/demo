@extends('layout')
@section('pageTitle', 'King Family Suite Ocean View')
@section('breadcrumb-first', 'King Family Suite Ocean View')
@section('breadcrumb-second', 'King Family Suite Ocean View')
@section('main')
<section class="mb30">
                <!--Silder-->
                

                <!--End Booking box-->
                <!--Slogan-->
                <div id="content">
                    

    <div class="container-fluid">
        <div class="row">
            <div class="container" style="position:relative">
                <a class="btn-cus-close" href="/accommodation"></a>
                <div class="container contents" style="padding-right:0;margin-top:25px">
                    <div class="row">
                        <div class="room-title col-sm-12 mb20">
                         <h3>Phòng Deluxe City View có ban công</h3>
                       </div>
                            <div class="col-sm-5 mb20">
                                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                        <li data-thumb="{{asset('images/Rooms/King Family Suite- Balcony B (2).jpg')}}">
                                            <img src="{{asset('images/Rooms/King Family Suite- Balcony B (2).jpg')}}" class="img-responsive">
                                        </li>
                                        <li data-thumb="{{asset('images/Rooms/King Family Suite- Balcony B (3).jpg')}}">
                                            <img src="{{asset('images/Rooms/King Family Suite- Balcony B (3).jpg')}}" class="img-responsive">
                                        </li>
                                        <li data-thumb="{{asset('images/Rooms/King Family Suite- Balcony B (4).jpg')}}">
                                            <img src="{{asset('images/Rooms/King Family Suite- Balcony B (4).jpg')}}" class="img-responsive">
                                        </li>
                                        <li data-thumb="{{asset('images/Rooms/King Family Suite- Balcony B (5).jpg')}}">
                                            <img src="{{asset('images/Rooms/King Family Suite- Balcony B (5).jpg')}}" class="img-responsive">
                                        </li>
                                        <li data-thumb="{{asset('images/Rooms/King Family Suite- Balcony B (6).jpg')}}">
                                            <img src="{{asset('images/Rooms/King Family Suite- Balcony B (6).jpg')}}" class="img-responsive">
                                        </li>
                                        <li data-thumb="{{asset('images/Rooms/King Family Suite- Balcony B (7).jpg')}}">
                                            <img src="{{asset('images/Rooms/King Family Suite- Balcony B (7).jpg')}}" class="img-responsive">
                                        </li>
                                        <li data-thumb="{{asset('images/Rooms/King Family Suite- Balcony B (8).jpg')}}">
                                            <img src="{{asset('images/Rooms/King Family Suite- Balcony B (8).jpg')}}" class="img-responsive">
                                        </li>
                                </ul>
                            </div>

                            <div class="col-sm-7">
                            @lang('messager.Room8Detail')
                        </div>

                        <div class="clearfix mb20"></div>
                        <div class="col-sm-12 room-detail">
                        <div style="line-height: 20.8px;">

@lang('messager.Room8Content')
</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

<style>
    .room-detail ul {
        -webkit-padding-start: 40px;
    }
</style>

                </div>
            </section>
            @endsection