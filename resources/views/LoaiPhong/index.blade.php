@extends('layout')
@section('pageTitle', 'Thông tin phòng')
@section('breadcrumb-first', 'Thông tin phòng')
@section('breadcrumb-second', 'DThông tin phòng')
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
                        <a class="btn-cus-close" href="index.html"></a>
                        <div class="container contents" style="padding-right:0;margin-top:25px">

                            <div class="row mt20">
                                {{-- @foreach ($accommodation as $item)
                                    <div class="col-sm-4 mb10">
                                        <div class="block-contain">
                                            <a href="/room/Deluxe-city-view" title="Phòng Deluxe City View có ban công"><img
                                                    src="{{ asset('images/Rooms/Balcony%20Hotel_%20Superior%20City%20View%20Twin%20(2).jpg') }}"
                                                    class="img-responsive mCS_img_loaded"></a>
                                            <h4 style="color:#3EACD2"><a href="/room/Deluxe-city-view"
                                                    title="Phòng Deluxe City View có ban công">{{ $item->title }}</a></h4>
                                            <div class="short-line"></div>
                                            <div class="pad-left-15 pad-right-15 child-content">
                                                <p>Phòng Deluxe City View có diện tích 24m2, sàn gỗ cao cấp, thiết kế ấm
                                                    cúng...
                                                </p>
                                            </div>
                                            <div class="short-line"></div>
                                            <div class="readMore mb20">
                                                <a class="mb20" href="/room/Deluxe-city-view" title="Read More">Đọc
                                                    tiếp</a>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach --}}
                                <div class="col-sm-4 mb10">
                                    <div class="block-contain">
                                        <a href="/room/premier-deluxe-city"
                                            title="Phòng Premier Deluxe City View có ban công"><img
                                                src="{{ asset('images/Rooms/Balcony%20Hotel_%20Superior%20City%20View%20Double%20(2).JPG') }}"
                                                class="img-responsive mCS_img_loaded"></a>
                                        <h4 style="color:#3EACD2"><a href="/room/premier-deluxe-city"
                                                title="Phòng Premier Deluxe City View có ban công">Phòng Premier Deluxe City
                                                View có ban công</a></h4>
                                        <div class="short-line"></div>
                                        <div class="pad-left-15 pad-right-15 child-content">
                                            <p>Phòng Premier Deluxe diện tích 26 m2 được thiết kế để mang lại sự thoải mái
                                                cho du khách với sàn gỗ cao cấp, thiết kế ấm cúng...</p>
                                        </div>
                                        <div class="short-line"></div>
                                        <div class="readMore mb20">
                                            <a class="mb20" href="/room/premier-deluxe-city" title="Read More">Đọc
                                                tiếp</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-4 mb10">
                                    <div class="block-contain">
                                        <a href="/room/senior-deluxe-room" title="Phòng Senior Ocean View có ban công"><img
                                                src="{{ asset('images/Rooms/Balcony%20Hotel_%20Deluxe%20Ocean%20View%20(4).jpg') }}"
                                                class="img-responsive mCS_img_loaded"></a>
                                        <h4 style="color:#3EACD2"><a href="/room/senior-deluxe-room"
                                                title="Phòng Senior Ocean View có ban công">Phòng Senior Ocean View có ban
                                                công</a></h4>
                                        <div class="short-line"></div>
                                        <div class="pad-left-15 pad-right-15 child-content">
                                            <p>Phòng Senior Ocean View có diện tích 28 m2, sàn gỗ cao cấp, thiết kế ấm cúng,
                                                trang thiết bị tiện nghi hiện đại như Tivi LCD 42 inch...</p>
                                        </div>
                                        <div class="short-line"></div>
                                        <div class="readMore mb20">
                                            <a class="mb20" href="/room/senior-deluxe-room" title="Read More">Đọc tiếp</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="clearfix mb20"></div>
                                <div class="col-sm-4 mb10">
                                    <div class="block-contain">
                                        <a href="/room/deluxe-family-room" title="Phòng Family City có ban công"><img
                                                src="{{ asset('images/Rooms/Balcony%20Hotel_%20Family%20Room%20(3).jpg') }}"
                                                class="img-responsive mCS_img_loaded"></a>
                                        <h4 style="color:#3EACD2"><a href="/room/deluxe-family-room"
                                                title="Phòng Family City có ban công">Phòng Family City có ban công</a></h4>
                                        <div class="short-line"></div>
                                        <div class="pad-left-15 pad-right-15 child-content">
                                            <p>Với diện tích 32 m2, phòng Family City View là lựa chọn lý tưởng cho kỳ nghỉ
                                                của bạn cùng gia đình thân thương tại thành phố biển...</p>
                                        </div>
                                        <div class="short-line"></div>
                                        <div class="readMore mb20">
                                            <a class="mb20" href="/room/deluxe-family-room" title="Read More">Đọc tiếp</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-4 mb10">
                                    <div class="block-contain">
                                        <a href="/room/executive-family" title="Phòng Family hướng biển có ban công"><img
                                                src="{{ asset('images/Rooms/Balcony%20Hotel_%20Family%20Room%20(2).jpg') }}"
                                                class="img-responsive mCS_img_loaded"></a>
                                        <h4 style="color:#3EACD2"><a href="/room/executive-family"
                                                title="Phòng Family hướng biển có ban công">Phòng Family hướng biển có ban
                                                công</a></h4>
                                        <div class="short-line"></div>
                                        <div class="pad-left-15 pad-right-15 child-content">
                                            <p>Với diện tích phòng 35 m2, Phòng Family Ocean View được thiết kế để giúp kỳ
                                                nghỉ dưỡng của bạn và gia đình tại Nha Trang thật sự thoải mái như ở nhà.
                                            </p>
                                        </div>
                                        <div class="short-line"></div>
                                        <div class="readMore mb20">
                                            <a class="mb20" href="/room/executive-family" title="Read More">Đọc tiếp</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-4 mb10">
                                    <div class="block-contain">
                                        <a href="/room/balcony-signature" title="Balcony Signature Ocean View "><img
                                                src="{{ asset('images/Rooms/Balcony-%20Suite%20(4).jpg') }}"
                                                class="img-responsive mCS_img_loaded"></a>
                                        <h4 style="color:#3EACD2"><a href="/room/balcony-signature"
                                                title="Balcony Signature Ocean View ">Balcony Signature Ocean View </a>
                                        </h4>
                                        <div class="short-line"></div>
                                        <div class="pad-left-15 pad-right-15 child-content">
                                            <p>Với diện tích 60 m2, phòng Suite Ocean View là loại phòng rộng nhất tại Khách
                                                sạn Balcony Nha Trang. Balcony Signature Ocean View mang đến cho du khách
                                                không gian sống sang trọng và tiện nghi</p>
                                        </div>
                                        <div class="short-line"></div>
                                        <div class="readMore mb20">
                                            <a class="mb20" href="/room/balcony-signature" title="Read More">Đọc
                                                tiếp</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="clearfix mb20"></div>
                                <div class="col-sm-4 mb10">
                                    <div class="block-contain">
                                        <a href="/room/triple-city-view"
                                            title="PHÒNG CLUB TRIPLE CITY VIEW CÓ CỬA SỔ"><img
                                                src="{{ asset('images/Rooms/Club%20Triple%20City%20View-%20Block%20B.jpg') }}"
                                                class="img-responsive mCS_img_loaded"></a>
                                        <h4 style="color:#3EACD2"><a href="/room/triple-city-view"
                                                title="PHÒNG CLUB TRIPLE CITY VIEW CÓ CỬA SỔ">PHÒNG CLUB TRIPLE CITY VIEW
                                                CÓ CỬA SỔ</a></h4>
                                        <div class="short-line"></div>
                                        <div class="pad-left-15 pad-right-15 child-content">
                                            <p>Với diện tích 30 m2, phòng CLUB TRIPLE CITY VIEW là lựa chọn lý tưởng cho kỳ
                                                nghỉ của bạn và gia đình thân thương tại thành phố biển Nha Trang. Phòng
                                                được thiết kế hiện đại và đầy đủ trang thiết bị tiện nghi. </p>
                                        </div>
                                        <div class="short-line"></div>
                                        <div class="readMore mb20">
                                            <a class="mb20" href="/room/triple-city-view" title="Read More">Đọc
                                                tiếp</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-4 mb10">
                                    <div class="block-contain">
                                        <a href="/room/king-family-suite"
                                            title="KING FAMILY SUITE OCEAN VIEW CÓ BAN CÔNG"><img
                                                src="{{ asset('images/Rooms/King%20Family%20Suite-%20Balcony%20B%20(4).jpg') }}"
                                                class="img-responsive mCS_img_loaded"></a>
                                        <h4 style="color:#3EACD2"><a href="/room/king-family-suite"
                                                title="KING FAMILY SUITE OCEAN VIEW CÓ BAN CÔNG">KING FAMILY SUITE OCEAN
                                                VIEW CÓ BAN CÔNG</a></h4>
                                        <div class="short-line"></div>
                                        <div class="pad-left-15 pad-right-15 child-content">
                                            <p>Với diện tích 42m2 và 2 giường đôi lớn, KING FAMILY SUITE OCEAN VIEW hiện là
                                                loại phòng lớn nhất cho gia đình tại khách sạn với không gian sinh hoạt rộng
                                                rãi. Ban công riêng giúp khách hàng có thể tận hưởng trọn vẹn vịnh Nha Trang
                                                xinh đẹp.</p>
                                        </div>
                                        <div class="short-line"></div>
                                        <div class="readMore mb20">
                                            <a class="mb20" href="/room/king-family-suite" title="Read More">Đọc
                                                tiếp</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
