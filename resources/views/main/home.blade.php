@extends('layouts.app')


@section('content')
<div class="destination_banner_wrap overlay">
        <div class="destination_text text-center">
            <h3>Hi There</h3>
            <p>Where would you like to go</p>
            <a href="#scrolltobook" class="boxed-btn3" id="book">Book now</a>
        </div>
</div>
<div class="where_togo_area" id="scrolltobook">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="form_area">
                        <h3>Where you want to go?</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="search_wrap">
                        <form class="search_form" action="#">
                            <div class="input_field">
                            <label for="place" class="label">Place : </label>
                                <input type="text" name="place" placeholder="Where to go?">
                            </div>
                            <div class="input_field">
                            <label for="Check In" class="label">Check In : </label>
                            <input type="date" placeholder="Check In" >
                            </div>
                            <div class="input_field">
                            <label for="Check Out" class="label">Check Out : </label>
                            <input type="date" placeholder="Check Out">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="search_btn">
                    <a href="{{ route('houseresults')}}"><button class="boxed-btn4 " type="submit" >Search</button></a>
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- popular_destination_area_start  -->
<div class="popular_destination_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Popular Destination</h3>
                    <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_destination">
                    <div class="thumb">
                        <img src="img/destination/1.png" alt="">
                    </div>
                    <div class="content">
                        <p class="d-flex align-items-center">Italy <a href="travel_destination.html">  07 Places</a> </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_destination">
                    <div class="thumb">
                        <img src="img/destination/2.png" alt="">
                    </div>
                    <div class="content">
                        <p class="d-flex align-items-center">Brazil <a href="travel_destination.html">  03 Places</a> </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_destination">
                    <div class="thumb">
                        <img src="img/destination/3.png" alt="">
                    </div>
                    <div class="content">
                        <p class="d-flex align-items-center">America <a href="travel_destination.html">  10 Places</a> </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_destination">
                    <div class="thumb">
                        <img src="img/destination/4.png" alt="">
                    </div>
                    <div class="content">
                        <p class="d-flex align-items-center">Nepal <a href="travel_destination.html">  02 Places</a> </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_destination">
                    <div class="thumb">
                        <img src="img/destination/5.png" alt="">
                    </div>
                    <div class="content">
                        <p class="d-flex align-items-center">Maldives <a href="travel_destination.html">  02 Places</a> </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_destination">
                    <div class="thumb">
                        <img src="img/destination/6.png" alt="">
                    </div>
                    <div class="content">
                        <p class="d-flex align-items-center">Indonesia <a href="travel_destination.html">  05 Places</a> </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popular_destination_area_end  -->





@endsection