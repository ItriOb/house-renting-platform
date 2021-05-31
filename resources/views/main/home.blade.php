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
                        <img src="{{asset('img/destination/6.png')}}" alt="">
                    </div>
                    <div class="content">
                        <p class="d-flex align-items-center">Indonesia <a href="travel_destination.html">  05 Places</a> </p>
                        
                    </div>
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

<!-- newletter_area_start  -->
<div class="newletter_area overlay">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-10">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="newsletter_text">
                            <h4>Subscribe Our Newsletter</h4>
                            <p>Subscribe newsletter to get offers and about
                                new places to discover.</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="mail_form">
                            <div class="row no-gutters">
                                <div class="col-lg-9 col-md-8">
                                    <div class="newsletter_field">
                                        <input type="email" placeholder="Your mail" >
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="newsletter_btn">
                                        <button class="boxed-btn4 " type="submit" >Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- newletter_area_end  -->

<div class="popular_places_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Popular Places</h3>
                    <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="img/place/1.png" alt="">
                        <a href="#" class="prise">$500</a>
                    </div>
                    <div class="place_info">
                        <a href="destination_details.html"><h3>California</h3></a>
                        <p>United State of America</p>
                        <div class="rating_days d-flex justify-content-between">
                            <span class="d-flex justify-content-center align-items-center">
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i>
                                 <a href="#">(20 Review)</a>
                            </span>
                            <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="img/place/2.png" alt="">
                        <a href="#" class="prise">$500</a>
                    </div>
                    <div class="place_info">
                        <a href="destination_details.html"><h3>Korola Megna</h3></a>
                        <p>United State of America</p>
                        <div class="rating_days d-flex justify-content-between">
                            <span class="d-flex justify-content-center align-items-center">
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i>
                                 <a href="#">(20 Review)</a>
                            </span>
                            <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="img/place/3.png" alt="">
                        <a href="#" class="prise">$500</a>
                    </div>
                    <div class="place_info">
                        <a href="destination_details.html"><h3>London</h3></a>
                        <p>United State of America</p>
                        <div class="rating_days d-flex justify-content-between">
                            <span class="d-flex justify-content-center align-items-center">
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i>
                                 <a href="#">(20 Review)</a>
                            </span>
                            <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="img/place/4.png" alt="">
                        <a href="#" class="prise">$500</a>
                    </div>
                    <div class="place_info">
                        <a href="destination_details.html"><h3>Miami Beach</h3></a>
                        <p>United State of America</p>
                        <div class="rating_days d-flex justify-content-between">
                            <span class="d-flex justify-content-center align-items-center">
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i>
                                 <a href="#">(20 Review)</a>
                            </span>
                            <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="img/place/5.png" alt="">
                        <a href="#" class="prise">$500</a>
                    </div>
                    <div class="place_info">
                        <a href="destination_details.html"><h3>California</h3></a>
                        <p>United State of America</p>
                        <div class="rating_days d-flex justify-content-between">
                            <span class="d-flex justify-content-center align-items-center">
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i>
                                 <a href="#">(20 Review)</a>
                            </span>
                            <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="img/place/6.png" alt="">
                        <a href="#" class="prise">$500</a>
                    </div>
                    <div class="place_info">
                        <a href="destination_details.html"><h3>Saintmartine Iceland</h3></a>
                        <p>United State of America</p>
                        <div class="rating_days d-flex justify-content-between">
                            <span class="d-flex justify-content-center align-items-center">
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i>
                                 <a href="#">(20 Review)</a>
                            </span>
                            <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="more_place_btn text-center">
                    <a class="boxed-btn4" href="#">More Places</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="video_area video_bg overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video_wrap text-center">
                    <h3>Enjoy Video</h3>
                    <div class="video_icon">
                        <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=f59dDEk57i0">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="travel_variation_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_travel text-center">
                    <div class="icon">
                        <img src="img/svg_icon/1.svg" alt="">
                    </div>
                    <h3>Comfortable Journey</h3>
                    <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_travel text-center">
                    <div class="icon">
                        <img src="img/svg_icon/2.svg" alt="">
                    </div>
                    <h3>Luxuries Hotel</h3>
                    <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_travel text-center">
                    <div class="icon">
                        <img src="img/svg_icon/3.svg" alt="">
                    </div>
                    <h3>Travel Guide</h3>
                    <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- testimonial_area  -->
<div class="testimonial_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <div class="author_thumb">
                                        <img src="img/testmonial/author.png" alt="">
                                    </div>
                                    <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                    <div class="testmonial_author">
                                        <h3>- Micky Mouse</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <div class="author_thumb">
                                        <img src="img/testmonial/author.png" alt="">
                                    </div>
                                    <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                    <div class="testmonial_author">
                                        <h3>- Tom Mouse</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <div class="author_thumb">
                                        <img src="img/testmonial/author.png" alt="">
                                    </div>
                                    <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                    <div class="testmonial_author">
                                        <h3>- Jerry Mouse</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /testimonial_area  -->


<div class="recent_trip_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Recent Trips</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_trip">
                    <div class="thumb">
                        <img src="img/trip/1.png" alt="">
                    </div>
                    <div class="info">
                        <div class="date">
                            <span>Oct 12, 2019</span>
                        </div>
                        <a href="#">
                            <h3>Journeys Are Best Measured In
                                New Friends</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_trip">
                    <div class="thumb">
                        <img src="img/trip/2.png" alt="">
                    </div>
                    <div class="info">
                        <div class="date">
                            <span>Oct 12, 2019</span>
                        </div>
                        <a href="#">
                            <h3>Journeys Are Best Measured In
                                New Friends</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_trip">
                    <div class="thumb">
                        <img src="img/trip/3.png" alt="">
                    </div>
                    <div class="info">
                        <div class="date">
                            <span>Oct 12, 2019</span>
                        </div>
                        <a href="#">
                            <h3>Journeys Are Best Measured In
                                New Friends</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection