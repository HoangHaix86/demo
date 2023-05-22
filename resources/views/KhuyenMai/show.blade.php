@extends('layout')
@section('pageTitle', 'STAY MORE, SAVE MORE PROMOTION')
@section('breadcrumb-first', 'STAY MORE, SAVE MORE PROMOTION')
@section('breadcrumb-second', 'STAY MORE, SAVE MORE PROMOTION')
@section('main')
<section class="mb30">
    <!--Silder-->


    <!--End Booking box-->
    <!--Slogan-->
    <div id="content">

        <div class="container-fluid">
            <div class="row">
                <div class="container" style="position:relative">
                    <a class="btn-cus-close" href="/promotions"></a>
                    <div class="container contents" style="padding-right:0;margin-top:25px">
                        <div class="row">
                            <div class="col-sm-8 news-show">
                                <h3>ETERNITY HONEYMOON PACKAGE</h3>
                                <div class="news-detail">
                                    <img class="img-responsive mb20 mCS_img_loaded" src="{{asset('images/files/low-season-package-02.png')}}">
                                    @lang('messager.KM1Content')

                                </div>

                            </div>
                            <div class="col-sm-4 news-related">
                                <h3>KHUYẾN MÃI KHÁC</h3>
                                <div class="short-line"></div>
                                <div class="define mb20">
                                   
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