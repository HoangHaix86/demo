@extends('layout')
@section('pageTitle', 'Gallery')
@section('breadcrumb-first', 'Gallery')
@section('breadcrumb-second', 'Gallery')
@section('main')
  <!-- End Menu top-->
  <section class="mb30">
                <!--Silder-->
                

                <!--End Booking box-->
                <!--Slogan-->
                <div id="content">
                    
<div class="define" style="margin-top:-90px;z-index:-1">
    <div class="gallerySlider" style="">
        <div id="sliders">
                <div class="slides-container">
                        <img src="{{asset('images/Others/Balcony%20Hotel-%20Reception.jpg')}}" class="img-responsive">
                        <img src="{{asset('images/Others/Balcony%20Hotel-%20Reception(4).jpg')}}" class="img-responsive">
                        <img src="{{asset('images/Rooms/lobby%202.jpg')}}" class="img-responsive">
                        <img src="{{asset('images/Rooms/lobby%203.jpg')}}" class="img-responsive">
                        <img src="{{asset('images/Rooms/lobby%204.jpg')}}" class="img-responsive">
                        <img src="{{asset('images/Others/_ND_0281-HDR.jpg')}}" class="img-responsive">
                        <img src="{{asset('images/Others/_ND_0279-HDR.jpg')}}" class="img-responsive">
                        <img src="{{asset('images/Others/_ND_0282-HDR.jpg')}}" class="img-responsive">
                        <img src="{{asset('images/Rooms/buffet%205.jpg')}}" class="img-responsive">
                        <img src="{{asset('images/files/Lobby-%20fixed.jpg')}}" class="img-responsive">
                </div>
                <nav class="slides-navigation">
                    <a href="#" class="next"></a>
                    <a href="#" class="prev"></a>
                </nav>
        </div>
    </div>
    
    
</div>

                </div>
            </section>
@endsection