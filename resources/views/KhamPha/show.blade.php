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
                                    {{-- {{ $explore->content }} --}}
                                    {!! html_entity_decode(nl2br(e($explore->content))) !!}

                                </div>
                                <div class="col-sm-3 news-related">
                                    <h3>ĐỊA ĐIỂM KHÁC</h3>
                                    <div class="short-line"></div>
                                    <div class="define mb20">
                                        <a href="/locations/10-mon-ngon">
                                            <img src="{{ asset('images/nem-nuong(1).jpg') }}"
                                                class="img-responsive mCS_img_loaded">
                                            <h5>@lang('messager.KP2Title')</h5>
                                        </a>
                                    </div>
                                    <div class="define mb20">
                                        <a href="/locations/nha-trang-speciality-can-cake">
                                            <img src="{{ asset('images/can-cake-nha-trang-12-lifevietnamnet-1436.jpg') }}"
                                                class="img-responsive mCS_img_loaded">
                                            <h5>@lang('messager.KP3Title')</h5>
                                        </a>
                                    </div>
                                    <div class="define mb20">
                                        <a href="/locations/tourist-attractions-nha-trang">
                                            <img src="{{ asset('images/Locations/Nha-tho-da-nha-trang.jpg') }}"
                                                class="img-responsive mCS_img_loaded">
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
