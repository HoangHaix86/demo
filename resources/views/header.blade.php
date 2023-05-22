<body>
    <div class="background-home" style="">
        <div id="slides">
            <div class="slides-container">
                @if ($headerDataShared['slices'])
                    @foreach ($headerDataShared['slices'] as $link)
                        <img src="{{ asset('storage/' . $link) }}">
                    @endforeach
                @endif
                {{-- <img src="{{ asset('images/') }}/Service/Pool%203.jpg">
                <img src="{{ asset('images/') }}/Service/pool%206.jpg">
                <img src="{{ asset('images/') }}/Rooms/pool%20bar%203.jpg">
                <img src="{{ asset('images/') }}/Rooms/Balcony-%20Suite%20(4).jpg">
                <img src="{{ asset('images/') }}/Rooms/Balcony-%20Suite%20(5).jpg">
                <img src="{{ asset('images/') }}/Rooms/Balcony-%20Suite%20(6).jpg">
                <img src="{{ asset('images/') }}/Rooms/Balcony-%20Suite.jpg">
                <img src="{{ asset('images/') }}/Rooms/Balcony-%20Suite%20(2).jpg">
                <img src="{{ asset('images/') }}/Rooms/Balcony-%20Suite%20(3).jpg">
                <img src="{{ asset('images/') }}/Rooms/Balcony%20Hotel_%20Deluxe%20Ocean%20View%20(4).jpg">
                <img src="{{ asset('images/') }}/Rooms/Balcony%20Hotel_%20Deluxe%20Ocean%20View.jpg">
                <img src="{{ asset('images/') }}/Rooms/Balcony%20Hotel_%20Family%20Room.jpg">
                <img src="{{ asset('images/') }}/Rooms/Balcony%20Hotel_%20Superior%20City%20View%20Double%20(2).jpg">
                <img src="{{ asset('images/') }}/Rooms/Balcony%20Hotel_%20Superior%20City%20View%20Twin%20(2).jpg">
                <img src="{{ asset('images/') }}/Rooms/Balcony%20Hotel_%20Triple%20Room%20(2).jpg">
                <img src="{{ asset('images/') }}/Rooms/lobby%202.jpg">
                <img src="{{ asset('images/') }}/Rooms/Welcome%20drink.jpg">
                <img src="{{ asset('images/') }}/Rooms/Balcony-%20Restaurant%20Buffet%20Breakfast.jpg">
                <img src="{{ asset('images/') }}/Rooms/buffet%204.jpg">
                <img src="{{ asset('images/') }}/Rooms/restaurant.jpg">
                <img src="{{ asset('images/') }}/Rooms/Balcony-%20Restaurant%20(2).jpg">
                <img src="{{ asset('images/') }}/Others/_ND_0281-HDR.jpg">
                <img src="{{ asset('images/files/Lobby-%20fixed.jpg') }}">
                <img src="{{ asset('images/files/Balcony%20Hotel-%20Buffet%20Breakfast%20(14)-%20fixed.jpg') }}">
                <img src="{{ asset('images/files/Balcony%20Hotel-%20Buffet%20Breakfast%20(4)-%20fixed.jpg') }}">
                <img src="{{ asset('images/') }}/Service/pool%204.jpg"> --}}
            </div>
        </div>
    </div>



    <div id="wrap">
        <!--Menu top-->


        <header>
            <input type="hidden" value="vi-VN" id="Culture">
            <div class="my-menu">

                <div class="hidden-lg hidden-md hidden-sm define">
                    <div class="col-xs-6">
                        <a href="/"><img src="{{ asset('images/') }}/Logo/logo-text-o.png"
                                class="bayana-logo"></a>
                    </div>
                    <div class="col-xs-6 sl-lang">

                        <div class="dropdown mt5 dropdown-language">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dd-lang"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span>Tiếng Việt</span>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dd-lang">
                                <li><a href="{{ url('lang/vi') }}">Tiếng Việt</a></li>
                                <li><a href="{{ url('lang/en') }}">English</a></li>
                                <li><a href="{{ url('lang/cn') }}">简体中文</a></li>
                                <li><a href="{{ url('lang/ru') }}">Русский Язык</a></li>
                            </ul>
                        </div>
                        <div class="clearfix mb10"></div>
                        <a href="/RoomAvailable" class="btn-booking">@lang('messager.RESERVATIONS')</a>
                    </div>

                </div>
                <a class="hidden-xs" href="/">
                    <div class="logo hidden-xs">
                        <span>Balcony Hotel</span><br>
                        <!--<img src="/{{ asset('images/') }}/Logo/logo-star.png" class="logo-star">-->
                    </div>
                </a>
                <div class="reservation hidden-xs">
                    <div class="dropdown mt5 dropdown-language">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dd-lang"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span>@lang('messager.languge')</span>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dd-lang">
                            <li><a href="{{ url('lang/vi') }}">Tiếng Việt</a></li>
                            <li><a href="{{ url('lang/en') }}">English</a></li>
                            <li><a href="{{ url('lang/cn') }}">简体中文</a></li>
                            <li><a href="{{ url('lang/ru') }}">Русский Язык</a></li>
                        </ul>
                    </div>
                    <div class="clearfix mb10"></div>
                    <div>
                        <a href="/RoomAvailable" class="btn-booking">@lang('messager.RESERVATIONS')</a>
                        <!-- <div class="box-reser">
                        <form role="form" class="form-group" action="/RoomAvailable">
                            <div class='define'>
                                <div class="form-group">
                                    <div class='input-group date' id="check_in">
                                        <input type='text' class="form-control" placeholder="Ng&#224;y đến" name="checkin" id="check_in" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class='define'>
                                <div class="form-group">
                                    <div class='input-group date' id="check_out">
                                        <input type='text' class="form-control" placeholder="Ng&#224;y đi" name="checkout" id="check_out" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="define">

                                <div class="form-group text-left">

                                    <label class="col-sm-6 col-xs-12 mt5 control-label" style="color: #8C8888;font-weight: 300;">@lang('messager.Adult(s)')</label>
                                    <div class="input-group col-sm-6  col-xs-12">
                                        <input type="number" class="form-control numberMask" min="1" value="1" name="adult">

                                    </div>
                                </div>
                            </div>
                            <div class="define">
                                <div class="form-group text-left">

                                    <label class="col-sm-6 col-xs-12 mt5 control-label" style="color: #8C8888;font-weight: 300;">@lang('messager.Children')</label>
                                    <div class="input-group col-sm-6 col-xs-12">
                                        <input type="number" class="form-control numberMask" min="0" value="0" name="children">
                                    </div>
                                </div>

                            </div>
                            <div class="define">
                                <button class="btn-booking-s01">@lang('messager.RESERVATIONS')</button>
                            </div>
                            
                        </form>
                        
                    </div> -->
                    </div>


                </div>
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <div class="row">

                                    <ul class="nav navbar-nav">
                                        <li>
                                            <ul class="nav-cus-menu">
                                                <li class="active"><a class=""
                                                        href="/home/overview">{{ __('messager.HOTEL OVERVIEW') }}</a>
                                                </li>
                                                <li class="">
                                                    <a
                                                        href="{{ route('accommodations.index') }}">@lang('messager.ACCOMMODATION')</a>
                                                    <ul class="ul-nav-child">
                                                        @foreach ($headerDataShared['accommodations'] as $item)
                                                            <li><a href="{{ route('accommodations.show', ['slug' => $item->slug]) }}"
                                                                    title="{{ $item->title }}">{{ $item->title }}</a>
                                                            </li>
                                                        @endforeach

                                                        {{-- <li><a href="/room/premier-deluxe-city"
                                                                title="@lang('messager.ROOM2')">@lang('messager.ROOM2')</a></li>
                                                        <li><a href="/room/senior-deluxe-room"
                                                                title="@lang('messager.ROOM3')">@lang('messager.ROOM3')</a></li>
                                                        <li><a href="/room/deluxe-family-room"
                                                                title="@lang('messager.ROOM4')">@lang('messager.ROOM4')</a></li>
                                                        <li><a href="/room/executive-family"
                                                                title="@lang('messager.ROOM5')">@lang('messager.ROOM5')</a></li>
                                                        <li><a href="/room/balcony-signature"
                                                                title="@lang('messager.ROOM6')">@lang('messager.ROOM6') </a></li>
                                                        <li><a href="/room/triple-city-view"
                                                                title="@lang('messager.ROOM7')">@lang('messager.ROOM7') </a></li>
                                                        <li><a href="/room/king-family-suite"
                                                                title="@lang('messager.ROOM8')">@lang('messager.ROOM8')</a></li> --}}
                                                    </ul>
                                                </li>
                                                <li class="">
                                                    <a>@lang('messager.SERVICES AND FACILITIES') </a>
                                                    <ul class="ul-nav-child">
                                                        @foreach ($headerDataShared['services'] as $item)
                                                            <li><a href="{{ route('services.show', ['slug' => $item->slug]) }}"
                                                                    title="@lang('messager.SERVICES')">{{ $item->title }}</a>
                                                            </li>
                                                        @endforeach
                                                        {{-- <li><a href="/meeting-function/Services"
                                                                title="@lang('messager.SERVICES')">@lang('messager.SERVICES')</a></li>
                                                        <li><a href="/meeting-function/restaurant"
                                                                title="@lang('messager.Restaurant')">@lang('messager.Restaurant')</a></li> --}}
                                                    </ul>
                                                </li>

                                                <li class="">
                                                    <a href="{{ route('promotions.index') }}">@lang('messager.SPECIAL OFFERS')</a>
                                                    <ul class="ul-nav-child">
                                                        @foreach ($headerDataShared['promotions'] as $item)
                                                            <li><a href="{{ route('promotions.show', ['slug' => $item->slug]) }}')}}"
                                                                    title="{{ $item->title }}">{{ $item->title }}</a>
                                                            </li>
                                                        @endforeach
                                                        {{-- <li><a href="/promotion/eternity-honeymoon-package"
                                                                title="@lang('messager.KM1')">@lang('messager.KM1')</a></li> --}}
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a>@lang('messager.EXPLORE NHA TRANG')</a>
                                                    <ul class="ul-nav-child">
                                                        @foreach ($headerDataShared['explores'] as $item)
                                                            <li><a href="{{ route('explores.show', ['slug' => $item->slug]) }}"
                                                                    title="{{ $item->title }}">{{ $item->title }}</a>
                                                            </li>
                                                        @endforeach
                                                        {{-- <li><a href="/locations/diep-son-nha-trang"
                                                                title="@lang('messager.KP1')">@lang('messager.KP1')</a></li>
                                                        <li><a href="/locations/10-mon-ngon"
                                                                title="@lang('messager.KP2')">@lang('messager.KP2')</a></li>
                                                        <li><a href="/locations/nha-trang-speciality-can-cake"
                                                                title="@lang('messager.KP3')">@lang('messager.KP3')</a></li>
                                                        <li><a href="/locations/tourist-attractions-nha-trang"
                                                                title="@lang('messager.KP4')">@lang('messager.KP4')</a></li>
                                                        <li><a href="/locations/bo-nuong-lac-canh"
                                                                title="@lang('messager.KP5')">@lang('messager.KP5')</a></li>
                                                        <li><a href="/locations/vinh-cam-ranh"
                                                                title="@lang('messager.KP6')">@lang('messager.KP6')</a></li>
                                                        <li><a href="/locations/bai-dai"
                                                                title="@lang('messager.KP7')">@lang('messager.KP7')</a></li> --}}
                                                    </ul>
                                                </li>
                                                <li class=""><a class=""
                                                        href="{{ route('galleries.index') }}">@lang('messager.GALLERY')</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li style="text-align:right" class="hidden-sm hidden-xs">

                                        </li>
                                    </ul>


                                </div>

                            </div>
                        </div>
                    </div>
                </nav>

            </div>
        </header>

        <script type="text/javascript" src="{{ asset('js/loader.js') }}"></script>
