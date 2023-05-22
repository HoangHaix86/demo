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
                        <a class="btn-cus-close" href="/accommodation"></a>
                        <div class="container contents" style="padding-right:0;margin-top:25px">
                            <div class="row">
                                <div class="room-title col-sm-12 mb20">
                                    <h3>{{ $accommodation->title }}</h3>
                                </div>
                                <div class="col-sm-5 mb20">
                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                        @foreach ($accommodation->images as $item)
                                            <li data-thumb="{{ asset('storage/' . $item) }}">
                                                <img src="{{ asset('storage/' . $item) }}" class="img-responsive">
                                            </li>
                                        @endforeach
                                        {{-- <li data-thumb="{{ asset('images/Rooms/Balcony Hotel_ Family Room.jpg') }}">
                                            <img src="{{ asset('images/Rooms/Balcony Hotel_ Family Room.jpg') }}"
                                                class="img-responsive">
                                        </li>
                                        <li
                                            data-thumb="{{ asset('images/Rooms/Balcony Hotel_ Superior City View Twin (2).jpg') }}">
                                            <img src="{{ asset('images/Rooms/Balcony Hotel_ Superior City View Twin (2).jpg') }}"
                                                class="img-responsive">
                                        </li>
                                        <li data-thumb="{{ asset('images/Rooms/Balcony Hotel_ Family Room.jpg') }}">
                                            <img src="{{ asset('images/Rooms/Balcony Hotel_ Family Room.jpg') }}"
                                                class="img-responsive">
                                        </li>
                                        <li
                                            data-thumb="{{ asset('images/Rooms/Balcony Hotel_ Superior City View Twin (2).jpg') }}">
                                            <img src="{{ asset('images/Rooms/Balcony Hotel_ Superior City View Twin (2).jpg') }}"
                                                class="img-responsive">
                                        </li>
                                        <li data-thumb="{{ asset('images/Rooms/Balcony Hotel_ Family Room.jpg') }}">
                                            <img src="{{ asset('images/Rooms/Balcony Hotel_ Family Room.jpg') }}"
                                                class="img-responsive">
                                        </li>
                                        <li
                                            data-thumb="{{ asset('images/Rooms/Balcony Hotel_ Superior City View Twin (2).jpg') }}">
                                            <img src="{{ asset('images/Rooms/Balcony Hotel_ Superior City View Twin (2).jpg') }}"
                                                class="img-responsive">
                                        </li> --}}
                                    </ul>
                                </div>

                                <div class="col-sm-7">
                                    <p>Số phòng : {{ $accommodation->room_number }}</p>
                                    <p>Diện tích: {{ $accommodation->area }}</p>
                                    <p>Địa điểm: {{ $accommodation->address }}</p>
                                    <p>Kích thước giường: {{ $accommodation->bed_size }}</p>
                                </div>

                                <div class="clearfix mb20"></div>
                                <div class="col-sm-12 room-detail">
                                    <div style="line-height: 20.8px;">
                                        {!! html_entity_decode($accommodation->content, ENT_QUOTES, 'UTF-8') !!}
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
