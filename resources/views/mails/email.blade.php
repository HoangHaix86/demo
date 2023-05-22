@extends('layout')
@section('pageTitle', 'Reservations')
@section('breadcrumb-first', 'Reservations')
@section('breadcrumb-second', 'Reservations')
@section('main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- <form action="{{ route('send.email') }}" class="contact100-form validate-form" method="post">
    @csrf
    <span class="contact100-form-title">
        Contact Form
    </span>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    <div class="wrap-input100 validate-input" data-validate="Name is required">
        <input class="input100" type="text" name="name" placeholder="Name">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
        </span>
        @error('name')
        <span class="text-danger"> {{ $message }} </span>
        @enderror
    </div>
    <div class="wrap-input100 validate-input" data-validate="Name is required">
        <input class="input100" type="number" name="phone" placeholder="phone">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
        </span>
        @error('phone')
        <span class="text-danger"> {{ $message }} </span>
        @enderror
    </div>
    <div class="wrap-input100 validate-input" data-validate="Name is required">
        <input class="input100" type="number" name="Adult" placeholder="Adult" value="1">

    </div>
    <div class="wrap-input100 validate-input" data-validate="Name is required">
        <input class="input100" type="number" name="Children" placeholder="Children" value="0">

    </div>
    <div class="wrap-input100 validate-input" data-validate="Name is required">
        <input class="input100" type="date" name="checkin" placeholder="checkin">

    </div>

    <div class="wrap-input100 validate-input" data-validate="Name is required">
        <input class="input100" type="date" name="checkout" placeholder="checkout">

    </div>
    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email" placeholder="Email">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
    </div>
    <div class="wrap-input100 validate-input" data-validate="Subject is required">
        <input class="input100" type="text" name="subject" placeholder="subject">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
        @error('subject')
        <span class="text-danger"> {{ $message }} </span>
        @enderror
    </div>


    <div class="wrap-input100 validate-input" data-validate="Message is required">
        <textarea class="input100" name="content" placeholder="Message"></textarea>
        <span class="focus-input100"></span>
        @error('content')
        <span class="text-danger"> {{ $message }} </span>
        @enderror
    </div>

    <div class="container-contact100-form-btn">
        <button type="submit" class="contact100-form-btn">
            Send
        </button>
    </div>
</form> -->

<section class="mb90">
    <!--Silder-->
    <!--End Booking box-->
    <!--Slogan-->
    <div id="content">

   
        <div class="container">
            <div class="text-center" id="slogant">
                <h1>@lang('messager.Booking')</h1>
            </div>
            <div id="crumbs">
                <ul>

                    <li><a href="/RoomAvailable" class="active">@lang('messager.Booking')</a></li>
                </ul>
            </div>


            <div class="m-t-10">
                <div class="col-sm-12 col-xs-12  m-b-10 p-l-0">

                    <!-- <form action="{{ route('send.email') }}" class="contact100-form validate-form" method="post">
                        @csrf -->
                    <form id="contact-frm" name="contact-frm" class="contact100-form validate-form">
                    <div class="booking-form">
                        <div class="header">
                            @lang('messager.ReservationForm')
                        </div>
                        <div class="a-success">
                            
                        </div>
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        <div class="form-group col-sm-3 col-xs-12">
                            <label> @lang('messager.Check In') </label>

                            <div class="input-group" id="Scheck_in">

                                <input type="text" class="form-control " name="checkin" id="checkin">
                                <div class="input-group-addon "><i class="fa fa-calendar"></i></div>
                            </div>
                            @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 col-xs-12">
                            <label> @lang('messager.Check Out') </label>

                            <div class="input-group" id="Scheck_out">

                                <input type="text" class="form-control " name="checkout" id="checkout">
                                <div class="input-group-addon "><i class="fa fa-calendar"></i></div>
                            </div>
                            @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 col-xs-12">
                            <label class="control-label">@lang('messager.Adult(s)')</label>
                            <input class="form-control" min="1" name="Adult" id="Adult" type="number" value="1">
                        </div>
                        <div class="form-group col-sm-3 col-xs-12">
                            <label class="control-label">@lang('messager.Children')</label>
                            <input class="form-control" min="0" name="Children" id="Children" type="number" value="0">
                        </div>

                        <div class="form-group col-sm-6 col-xs-12">
                            <label class="control-label">Mail</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group col-sm-3 col-xs-12">
                            <label class="control-label">@lang('messager.Name')</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="@lang('messager.Name')">
                        </div>
                        <div class="form-group col-sm-3 col-xs-12">
                            <label class="control-label">@lang('messager.Phone')</label>
                            <input class="form-control" type="number" name="phone" id="phone" placeholder="@lang('messager.Phone')">
                        </div>
                        <div class="form-group col-sm-12 col-xs-12 " style="text-align: right;">
                            <button  id="btn-submit-mail" type="button" class="btn-success btn btn-submit-mail">
                                Đặt phòng
                            </button>

                            
                                                    </div>
                            <p>
                            &nbsp;
                            </p>
                      <!-- <button id="btn-submit-mail" class="btn btn-success m-l-15 btn-checkbooking mb15" type="button">Tiếp tục</button> -->
                    </div>

                    </form>
                    <div class="clearfix mb30"></div>

                    <style>
                        table.booking-info {
                            width: 100%;
                            /*margin:20px auto;*/
                        }

                        table.booking-info tr td {
                            padding: 25px 10px 0px 10px;
                            vertical-align: bottom;
                        }

                        table.booking-info tr td:nth-child(odd) {
                            width: 60%;
                        }

                        table.booking-info tr td:nth-child(even) {
                            text-align: right;
                        }

                        table.booking-info tr {
                            border-bottom: 1px solid #dadada;
                        }
                    </style>
                </div>

            </div>
        </div>



    </div>
    <script>
      $("#btn-submit-mail").click(function() {
        
        let x = document.forms["contact-frm"]["name","email","phone"].value;
        if (x == "") {
            alert("@lang('messager.Entercompleteinformation')");
            return false;
        }
    

const data = {
    "user_id": "nyaRh-XSXofdD5B4Q",
    "service_id": "service_8dkaf2x",
    "template_id": "template_kpgqnlf",
    "template_params": {
        from_name: $('#name').val(),
        checkin: $('#checkin').val(),
        checkout: $('#checkout').val(),
        Adult: $('#Adult').val(),
        Children: $('#Children').val(),
        email: $('#email').val(),
        phone: $('#phone').val(),
    }
}
$.ajax('https://api.emailjs.com/api/v1.0/email/send', {
    type: 'POST',
    data: JSON.stringify(data),
    contentType: 'application/json',
}).done(function() {
  
    $('#name').val('')
    $('#email').val('')
    $('#phone').val('')
})

event.preventDefault()
event.stopPropagation()
$(".a-success").append("@lang('messager.Email sent successfully')");
$(".a-success").addClass("alert alert-success");
})

    </script>
</section>
@endsection