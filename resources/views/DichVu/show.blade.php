@extends('layout')
@section('pageTitle', 'DỊCH VỤ')
@section('breadcrumb-first', 'DỊCH VỤ')
@section('breadcrumb-second', 'DỊCH VỤ')
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
                        <div class="container contents mCustomScrollbar _mCS_1 mCS_no_scrollbar" style="margin-top:25px">
                            <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0"
                                style="max-height: 981px;">
                                <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                    style="position:relative; top:0; left:0;" dir="ltr">
                                    <div class="row">
                                        <div class="room-title col-sm-12 mb20">
                                            <h3>{{ $service->title }}</h3>
                                        </div>
                                        <div class="col-sm-5 mb20">
                                            <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                                @foreach ($service->images as $item)
                                                    <li data-thumb="{{ asset('storage/' . $item) }}">
                                                        <img src="{{ asset('storage/' . $item) }}"
                                                            class="img-responsive">
                                                    </li>
                                                @endforeach
                                                {{-- <li data-thumb="{{ asset('images/Others/Balcony Hotel- Reception.jpg') }}">
                                                    <img src="{{ asset('images/Others/Balcony Hotel- Reception.jpg') }}"
                                                        class="img-responsive">
                                                </li>

                                                <li
                                                    data-thumb="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}">
                                                    <img src="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}"
                                                        class="img-responsive">
                                                </li>
                                                <li
                                                    data-thumb="{{ asset('images/service/Balcony Hotel_Swimming Pool (2).jpg') }}">
                                                    <img src="{{ asset('images/service/Balcony Hotel_Swimming Pool (2).jpg') }}"
                                                        class="img-responsive">
                                                </li>
                                                <li
                                                    data-thumb="{{ asset('images/service/Balcony Hotel_Swimming Pool (3).jpg') }}">
                                                    <img src="{{ asset('images/service/Balcony Hotel_Swimming Pool (3).jpg') }}"
                                                        class="img-responsive">
                                                </li>
                                                <li
                                                    data-thumb="{{ asset('images/service/Balcony Hotel_Swimming Pool (4).jpg') }}">
                                                    <img src="{{ asset('images/service/Balcony Hotel_Swimming Pool (4).jpg') }}"
                                                        class="img-responsive">
                                                </li> --}}
                                            </ul>
                                        </div>

                                        <div class="col-sm-7">
                                            {!! html_entity_decode($service->content, ENT_QUOTES, 'UTF-8') !!} 
                                        </div>
                                        <!-- <div class="col-sm-5">
                                        <div class="lSSlideOuter "><div class="lSSlideWrapper usingCss" style="transition-duration: 500ms; transition-timing-function: ease;">
                                        <ul id="image-gallery" class="gallery list-unstyled lightSlider lSSlide lsGrab" style="width: 3528px; transform: translate3d(-2205px, 0px, 0px); height: 249px; padding-bottom: 0%;">
                                                <li data-thumb="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}" class="clone left" style="width: 441px; margin-right: 0px;">
                                                    <img src="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}" class="img-responsive mCS_img_loaded">
                                                </li>
                                                <li data-thumb="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}" class="clone left" style="width: 441px; margin-right: 0px;">
                                                    <img src="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}" class="img-responsive mCS_img_loaded">
                                                </li>
                                                <li data-thumb="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}" class="clone left" style="width: 441px; margin-right: 0px;">
                                                    <img src="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}" class="img-responsive mCS_img_loaded">
                                                </li>
                                                <li data-thumb="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}" class="clone left" style="width: 441px; margin-right: 0px;">
                                                    <img src="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}" class="img-responsive mCS_img_loaded">
                                                </li>
                                                <li data-thumb="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}" class="clone left" style="width: 441px; margin-right: 0px;">
                                                    <img src="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}" class="img-responsive mCS_img_loaded">
                                                </li>
                                                <li data-thumb="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}" class="clone left" style="width: 441px; margin-right: 0px;">
                                                    <img src="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}" class="img-responsive mCS_img_loaded">
                                                </li>
                                                <li data-thumb="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}" class="clone left" style="width: 441px; margin-right: 0px;">
                                                    <img src="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}" class="img-responsive mCS_img_loaded">
                                                </li>
                                                <li data-thumb="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}" class="clone left" style="width: 441px; margin-right: 0px;">
                                                    <img src="{{ asset('images/service/Balcony Hotel_Swimming Pool.jpg') }}" class="img-responsive mCS_img_loaded">
                                                </li>
                                            </ul>
                                            <div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div></div><ul class="lSPager lSGallery" style="margin-top: 5px; transition-duration: 500ms; width: 535.7px; transform: translate3d(-89.7px, 0px, 0px);"><li style="width:100%;width:84.2px;margin-right:5px" class=""><a href="#"><img src="/Upload/images/Others/Balcony%20Hotel-%20Reception.jpg" class="mCS_img_loaded"></a></li><li style="width:100%;width:84.2px;margin-right:5px" class=""><a href="#"><img src="/Upload/images/Others/Balcony%20Hotel-%20Reception(4).jpg" class="mCS_img_loaded"></a></li><li style="width:100%;width:84.2px;margin-right:5px" class=""><a href="#"><img src="/Upload/images/Service/Balcony%20Hotel_Swimming%20Pool%20(2).jpg" class="mCS_img_loaded"></a></li><li style="width:100%;width:84.2px;margin-right:5px" class=""><a href="#"><img src="/Upload/images/Service/Balcony%20Hotel_Swimming%20Pool%20(3).jpg" class="mCS_img_loaded"></a></li><li style="width:100%;width:84.2px;margin-right:5px" class="active"><a href="#"><img src="/Upload/images/Service/Balcony%20Hotel_Swimming%20Pool%20(4).jpg" class="mCS_img_loaded"></a></li><li style="width:100%;width:84.2px;margin-right:5px" class=""><a href="#"><img src="/Upload/images/Service/Balcony%20Hotel_Swimming%20Pool.jpg" class="mCS_img_loaded"></a></li></ul></div>

                                </div>
                                <div class="col-sm-7 meeting-content">
                                    <p>Trải nghiệm kỳ nghỉ thư giãn và đáng nhớ tại Khách sạn Balcony Nha Trang. Dừng chân tại khách sạn chúng tôi, du khách sẽ được tận hưởng toàn diện tiện ích và dịch vụ cao cấp sau:</p>

        <ul>
         <li>Nhà hàng và quầy Bar</li>
         <li>Phòng họp</li>
         <li>Dịch vụ phòng 24/24</li>
         <li>Quầy dịch vụ văn phòng</li>
         <li>Hồ bơi ngoài trời</li>
         <li>Máy tập gym</li>
         <li>Thang máy</li>
         <li>Kết nối Internet (gồm cả có dây và không dây) miễn phí</li>
         <li>Dịch vụ chuyển đổi ngoại tệ</li>
         <li>Dịch vụ giặt ủi và sấy khô quần áo</li>
         <li>Dịch vụ đặt tour du lịch</li>
         <li>Dịch vụ đưa đón bằng xe ô tô</li>
         <li>Bãi&nbsp;đậu xe</li>
         <li>Dịch vụ bảo đảm an ninh 24/24</li>
         <li>Các phòng đều có ban công</li>
        </ul>

                                </div> -->
                                        <div class="clearfix mb20"></div>

                                    </div>

                                </div>
                                <div id="mCSB_1_scrollbar_vertical"
                                    class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical"
                                    style="display: none;"><a href="#" class="mCSB_buttonUp"
                                        oncontextmenu="return false;"></a>
                                    <div class="mCSB_draggerContainer">
                                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                            style="position: absolute; min-height: 30px; height: 0px; top: 0px;"
                                            oncontextmenu="return false;">
                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                        </div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div><a href="#" class="mCSB_buttonDown" oncontextmenu="return false;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
