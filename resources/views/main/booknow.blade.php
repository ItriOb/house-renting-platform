@extends('layouts.app')

@section('content')
<!-- ========== MOBILE MENU ========== -->
<nav id="mobile-menu"></nav>
<!-- ========== WRAPPER ========== -->
<div class="wrapper">
    <!-- ========== TOP MENU ========== -->


    <!-- ========== PAGE TITLE ========== -->

    <!-- ========== MAIN ========== -->
    <main>
        <div class="container">
            <div class="row">
                <!-- CONTENT -->
                <div class="col-lg-9 col-12">
                    <h1>BOOK YOUR STAY</h1>
                    <p class="section-subtitle" id="bookyourhouse">Book your house Now</p>
                    @php
                    $checkIn = strtotime($_GET['checkIn']);
                    $checkOut = strtotime($_GET['checkOut']);
                    $dateDiff = $checkOut - $checkIn;
                    $nbNights = round($dateDiff / (60*60*24));
                    $totalPrice = round($dateDiff / (60*60*24)) *
                    $_GET['price'];
                    @endphp
                    <!-- BOOKING FORM -->
                    <form class="booking-form-advanced" id="booking-form" action="{{route('finishOrder')}}"
                        method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input name="firstname" type="text" class="form-control" placeholder="First Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input name="lastname" type="text" class="form-control" placeholder="Last Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="form-control" name="email" type="email"
                                        placeholder="Your Email Address" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input name="phone" type="text" class="form-control" placeholder="Your Phone Number"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Check In" class="label2">Check In : </label>
                                    <input type="date" placeholder="Check In" class="form-control" class="disabled" name="checkIn"
                                        required value="{{$_GET['checkIn']}}">

                                </div>

                            </div>
                            <input type="hidden" value="{{$totalPrice}}" name="totalprice">
                            <input type="hidden" value="{{$_GET['houseId']}}" name="houseid">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Check Out" class="label2">Check Out : </label>
                                    <input type="date" placeholder="Check Out"  name="checkOut" class="form-control"
                                        required value="{{$_GET['checkOut']}}">
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <h1>Order Summary</h1>
                                <div class="form-group"
                                    style="border: grey solid 1px; padding-left:20px; padding-top:20px; padding-bottom: 20px">
                                    <p id="nights"><strong>Number of Nights</strong> : <span class="float-right mar">{{$nbNights}}</span></p>
                                    <p id="price"><strong>TOTAL PRICE</strong> : <span class="float-right mar">{{$totalPrice}} MAD</span></p>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="search_btn float-right">
                                    <button class="boxed-btn4 " type="submit" id="search">Book now</button>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>

            </div>
        </div>
    </main>
    <!-- ========== FOOTER ========== -->

</div>
@endSection