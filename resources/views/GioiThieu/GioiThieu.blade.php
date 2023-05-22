@extends('layout')
@section('pageTitle', "@lang('messager.GtPageTitle')")
@section('breadcrumb-first', "@lang('messager.GtPageTitle')")
@section('breadcrumb-second', "@lang('messager.GtPageTitle')")
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
                            <div class="news-show">
                                <h3>@lang('messager.GtTitle')</h3>
                                <div class="col-sm-3">
                                    <img src="{{asset('images/Others/31205255982_31df2e7169_o.jpg')}}" title="В отеле " alt="В отеле " class="img-responsive" />
                                </div>
                                <div class="col-sm-9">
                                    @lang('messager.GtContent')
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