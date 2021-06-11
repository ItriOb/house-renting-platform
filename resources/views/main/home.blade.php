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
            <div class="col-lg-9">
                <div class="search_wrap">
                    <form class="search_form" action="{{route('search')}}" method="GET">
                        <div class="input_field">
                            <label for="place" class="label">Place : </label>
                            <input type="text" name="place" placeholder="Where to go?" required>
                        </div>
                        <div class="input_field">
                            <label for="Check In" class="label">Check In : </label>
                            <input type="date" placeholder="Check In" name="check_in" required>
                        </div>
                        <div class="input_field">
                            <label for="Check Out" class="label">Check Out : </label>
                            <input type="date" placeholder="Check Out" name="check_out" required>
                        </div>
                        <div class="search_btn">
                                            <button class="boxed-btn4 " type="submit" id="search">Search</button>
                                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- popular_destination_area_start  -->
<!-- d -->
<div class="popular_places_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Houses List</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                @foreach ($houses->take(2) as $house)
                <div class="col-lg-6 col-md-6">
                    <a href="details2?id={{ $house->id }}">
                        <div class="single_place">
                            <div class="thumb">
                                <img src="{{$house->image}}" alt="">
                                <a href="#" class="prise">{{$house->price}} MAD</a>
                            </div>
                            <div class="place_info">
                                <a href="">
                                    <h3>{{$house->name}}</h3>
                                </a>
                                <p>{{$house->city->name}}</p>
                                <div class="rating_days d-flex justify-content-between">
                                    <span class="d-flex justify-content-center align-items-center">
                                        @for ($i = 0; $i < $house->stars; $i++)
                                            <i class="fa fa-star"></i>

                                            @endfor
                                            <a href="#">({{$house->stars}} stars)</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                @endforeach

                <div class="col-lg-12">
                    <div class="more_place_btn text-center">
                        <a class="boxed-btn4" href="{{route('houselist')}}">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popular_destination_area_end  -->
<div class="container">
    <div class="row ctc-form">
        <div class="col-12">
            <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
            <form class="form-contact contact_form" action="{{route('message')}}" method="post" id="contactForm"
                novalidate="novalidate">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="name" id="name" type="text"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="email" id="email" type="email"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                placeholder="Email" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="subject" id="subject" type="text"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                placeholder="Enter Subject" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                                placeholder=" Enter Message" required></textarea>
                        </div>
                    </div>


                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                </div>
                @csrf
            </form>
        </div>
        <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                    <h3>Hay Salam</h3>
                    <p>Agadir</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                <div class="media-body">
                    <h3>+212600000000</h3>
                    <p>Mon to Fri 9am to 6pm</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                    <h3>support@travelo.com</h3>
                    <p>Send us your query anytime!</p>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection