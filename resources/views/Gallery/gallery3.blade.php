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
                        <img src="{{asset('images/Service/Swimming%20pool.jpg')}}" class="img-responsive">
                        <img src="{{asset('images/Service/Swimming%20pool%202.JPG')}}" class="img-responsive">
                        <img src="{{asset('images/Service/Swimming%20pool%201.JPG')}}" class="img-responsive">
                        <img src="{{asset('images/Service/pool%206.jpg')}}" class="img-responsive">
                        <img src="{{asset('images/Service/Balcony-%20Pool.jpg')}}" class="img-responsive">
                        <img src="{{asset('images/Service/Balcony-%20Pool%20(2).JPG')}}" class="img-responsive">
                        <img src="{{asset('images/Service/Pool%20Bar%202.jpg')}}" class="img-responsive">
                        <img src="{{asset('images/Service/pool%20bar%203.jpg')}}" class="img-responsive">
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