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
                        <button class="boxed-btn4 " type="submit" >Search</button>
                    </div>
                </div>
            </div>
        </div>
</div>



@endsection