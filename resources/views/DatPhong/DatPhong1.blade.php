@extends('layout')
@section('pageTitle', 'Reservations')
@section('breadcrumb-first', 'Reservations')
@section('breadcrumb-second', 'Reservations')
@section('main')
<style>
    #slides{
        display: none;
    }
</style>
<section class="mb90">
                <!--Silder-->
                <!--End Booking box-->
                <!--Slogan-->
                <div id="content"> 
                    

<div class="container">
    <div class="text-center" id="slogant">
        <h1>@lang('messager.RESERVATIONS')</h1>
    </div>
    <div id="crumbs">
        <ul>

            <li><a href="/RoomAvailable" class="active">@lang('messager.Room&Rate')</a></li>
            <li><a href="#4">@lang('messager.FormInformation')</a></li>
            <li><a href="#3">@lang('messager.Comfirmation')</a></li>
        </ul>
    </div>


    <div class="m-t-10">
        <div class="col-sm-12 col-xs-12  m-b-10 p-l-0">
                       
<input type="hidden" value="0" id="checkSubmit">
<input type="hidden" value="vi-VN" id="culture">
<script>
    function disableButton() {
        $("#checkSubmit").val(1);
    }
    $(function () {
        var check = $("#check").val();             
        $("#CheckBooking").click(function () {
            var code = $("#CheckCodeInput").val();
            if (code.length > 0) {
                $.get("/RoomAvailable/SearchBooking", { code: code }, function (data) {
                    if (data.length > 0) {

                        $('.search-booking').modal('show')
                        $("#contentCheckBooking").html(data);
                    }
                    else {
                        alert("Booking is not available");
                    }
                })

            }
        });
        $("#Scheck_in").on('dp.change', function () {
            $("#booking-room").hide();
        });
        $("#Scheck_out").on("dp.change", function () {
            $("#booking-room").hide();
        });
        $("#Adult").change(function () {
            $("#booking-room").hide();
        });
        $("#Children").change(function () {
            $("#booking-room").hide();
        });  
    })
</script>

@if(session()->has('message'))
        <div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<form action="{{ route('send.email') }}" class="contact100-form validate-form" method="post">
     @csrf
    <input id="HotelId" name="HotelId" type="hidden" value="4">
    <div class="booking-form">
        <div class="header">
            @lang('messager.ReservationForm')
        </div>
        <div class="form-group col-sm-3 col-xs-12">
            <label> @lang('messager.Check In') </label>
           
            <div class="input-group" id="Scheck_in">
                
                <input type="text" class="form-control " name="checkin">
                <div class="input-group-addon "><i class="fa fa-calendar"></i></div>
            </div>
        </div>
        <div class="form-group col-sm-3 col-xs-12">
            <label> @lang('messager.Check Out')</label>
            <div class="input-group " id="Scheck_out">
                <input type="text" class="form-control" name="checkout" >
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
        <div class="form-group col-sm-3 col-xs-12">
            <label class="control-label">@lang('messager.Adult(s)')</label>
            <input class="form-control numberMask" data-val="true" data-val-number="The field Adult must be a number." data-val-required="The Adult field is required." id="Adult" min="1" name="Adult" type="number" value="1">
        </div>
        <div class="form-group col-sm-3 col-xs-12">
            <label class="control-label">@lang('messager.Children')</label>
            <input class="form-control numberMask" data-val="true" data-val-number="The field Children must be a number." data-val-required="The Children field is required." min="0" name="Children" type="number" value="0">
        </div>
        
        <div class="form-group col-sm-6 col-xs-12">
            <label class="control-label">Mail</label>
            <input class="form-control" name="email" type="email" placeholder="Mail">
        </div>
        <div class="form-group col-sm-3 col-xs-12">
            <label class="control-label">Name</label>
            <input class="form-control" name="name" type="text" placeholder="Tên">
        </div>
        <div class="form-group col-sm-3 col-xs-12">
            <label class="control-label">phone</label>
            <input class="form-control" name="email" type="text" placeholder="phone">
        </div>
        
       
        
        <div class="form-group col-sm-12 col-xs-12">
            <label class="control-label">Ghi chú</label>
            <input class="form-control"  name="content" type="text" placeholder="content">
        </div>
        <button class="btn btn-success m-l-15 btn-checkbooking mb15" type="submit">@lang('messager.Continue')</button>
        <p>(@lang('messager.Click to check availability'))</p>
    </div>
 
</form>
<div class="clearfix mb30"></div>

<style>
    table.booking-info{
        width:100%;
        /*margin:20px auto;*/
    }
        table.booking-info tr td {
            padding: 25px 10px 0px 10px;
            vertical-align: bottom;
        } 
        table.booking-info tr td:nth-child(odd) {
            width: 60%;
        }
        table.booking-info tr td:nth-child(even){
            text-align:right;
        } 
        table.booking-info tr {
                border-bottom: 1px solid #dadada;
            }
</style>
        </div>

        
<!-- <div class="col-sm-8 p-r-0 m-r-0" id="booking-room">
    <form action="/summary/index" method="get" id="formSubmitRoomAvailable" onsubmit="return reservation.validateBeforeSubmit();">

        <div style="display: none">

            <input id="btshid" name="btshid" type="hidden" value="4">
            <input id="btsadult" name="btsadult" type="hidden" value="1">
            <input id="btschildren" name="btschildren" type="hidden" value="0">
            <input id="btscheckin" name="btscheckin" type="hidden" value="05-18-2022">
            <input id="btscheckout" name="btscheckout" type="hidden" value="05-19-2022">
        </div>


    </form>

</div> -->
<input type="hidden" id="noticeRoomTitle" value="CẢNH BÁO">
<input type="hidden" id="noticeRoomContent" value="Số lượng người cho phép đã vượt quá số lượng phòng ! Xin vui lòng chọn lại">
<input type="hidden" value="" id="RoomIds">
<script type="text/javascript">
    $(function () {
        reservation.initDialog();
    });
    $("#submitbooking").click(function () {
        var title = $("#noticeRoomTitle").val();
        var content = $("#noticeRoomContent").val();
        var adult = $("#Adult").val();
        var children = $("#Children").val();
        var totalPerson = parseInt(adult) + parseInt(children);
        var total = checkCount();
        if (totalPerson > total) {
            swal({ title: title, text: content, type: "warning" });
            return false;
        }
        var check = $("#checkSubmit").val();
        if (parseInt(check) == 0) {
            $("#formSubmitRoomAvailable").submit();
        }
        else {
            swal({ title: "Warning", text: "Please search before booking", type: "warning" });
            return false;
        }

    });
    var array = [];

    $(function () {
        var a = $("#RoomIds").val();
        array = a.split(',');
    });
    function checkCount() {
        var total = 0;
        $.each(array, function (i, value) {
            var maxperson = $("#MaxPerson-" + value).val();
            var numberofRoom = $("#nr_rooms_" + value).val();
            total += (parseInt(maxperson) * parseInt(numberofRoom));
            console.log(maxperson + '        ' + numberofRoom);
        });
        return total;
    }
</script>
    </div>
</div>



                </div>
            </section>
            @endsection