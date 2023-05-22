@extends('layout')
@section('pageTitle', 'Trang chủ')
@section('breadcrumb-first', 'Trang chủ')
@section('breadcrumb-second', 'Trang chủ')
@section('main')
<section class="mb30">
                <!--Silder-->
                

                <!--End Booking box-->
                <!--Slogan-->
                <div id="content">
                    
<script>
    $(document).ready(function () {
        var cbr = $("#val_boxreser").val();
        if(cbr==1)
        {
            $(".box-reser").show();
        }
        else
        {
            $(".box-reser").hide();
        }
    })
</script>
<input type="hidden" id="val_boxreser" value="1"/>
<div class="container-fluid">
    <div class="logo-image hidden-xs">
        <a><img src="{{ asset('images/files/%5e3488F80CFAD96AD7F1AE8AD207C5295D00E7ECE6010AE108F4%5epimgpsh_fullsize_distr.png') }}" /></a>
    </div>
    <!-- <div class="intro-bayana hidden-xs col-sm-7 col-sm-offset-5 col-md-6 col-md-offset-6 col-lg-5 col-lg-offset-7">
        <div class="row">
                <div class="PromoSlider flexslider">
                    <ul class="slides">
                            <li>
                                <div class="">
                                    <div class="">
                                        <div class="col-sm-6">
                                            <div class="">
                                                <h4>ETERNITY HONEYMOON PACKAGE</h4>
                                                <p>G&#243;i ưu đ&#227;i “Eternity Honeymoon” Package ch&#237;nh l&#224; m&#243;n qu&#224; m&#224; Kh&#225;ch sạn Balcony Nha Trang ...</p>
                                                <p class="text-right"><a href="promotion/eternity-honeymoon-package.html">Đọc tiếp</a></p>
                                            </div>

                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <img src="{{ asset('images/files/low-season-package-02.png')}}" title="ETERNITY HONEYMOON PACKAGE" alt="ETERNITY HONEYMOON PACKAGE" class="img-responsive" />
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </li>
                    </ul>
                </div>
        </div>

        


    </div> -->
    <div class="intro-bayana hidden-xs col-sm-7 col-sm-offset-5 col-md-6 col-md-offset-6 col-lg-5 col-lg-offset-7">
        <div class="row">
                <div class="PromoSlider flexslider">
                    <ul class="slides">
                            <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
                                <div class="">
                                    <div class="">
                                        <div class="col-sm-6">
                                            <div class="">
                                                <h4>ETERNITY HONEYMOON PACKAGE</h4>
                                                <p>Gói ưu đãi “Eternity Honeymoon” Package chính là món quà mà Khách sạn Balcony Nha Trang ...</p>
                                                <p class="text-right"><a href="/promotion/eternity-honeymoon-package">Đọc tiếp</a></p>
                                            </div>

                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <img src="{{asset('images/files/low-season-package-02.png')}}" title="ETERNITY HONEYMOON PACKAGE" alt="ETERNITY HONEYMOON PACKAGE" class="img-responsive" draggable="false">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </li>
                    </ul>
                <ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1">Next</a></li></ul></div>
        </div>

        


    </div>
</div>
<script>
    $(document).ready(function () {

        $('.PromoSlider.flexslider').flexslider({
            animation: "fade",
            controlNav: false,
            slideshow: false,
            directionNav:true
         });
    })
</script>
<style>
    .flexslider{
        margin:0;
        background:transparent;
        border:none;
    }
    .flexslider:hover .flex-direction-nav .flex-prev{
        left:0;
    }
</style>
                </div>
            </section>
@endsection