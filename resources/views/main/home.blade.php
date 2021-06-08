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
                                    <input type="text" name="place" placeholder="Where to go?" required>
                                </div>
                                <div class="input_field">
                                <label for="Check In" class="label">Check In : </label>
                                <input type="date" placeholder="Check In" required>
                                </div>
                                <div class="input_field">
                                <label for="Check Out" class="label">Check Out : </label>
                                <input type="date" placeholder="Check Out" required>
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
                        <div class="col-lg-6 col-md-6">
                            <div class="single_place">
                            <div class="thumb">
                                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/43/7f/b2/house-bungalow.jpg?w=900&h=-1&s=1" alt="">
                                <a href="#" class="prise">$1000</a>
                            </div>
                            <div class="place_info">
                                <a href="destination_details.html"><h3>Agadir</h3></a>
                                <p>Morocco</p>
                                <div class="rating_days d-flex justify-content-between">
                                    <span class="d-flex justify-content-center align-items-center">
                                         <i class="fa fa-star"></i> 
                                         <i class="fa fa-star"></i> 
                                         <i class="fa fa-star"></i> 
                                         <i class="fa fa-star"></i> 
                                         <i class="fa fa-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6">
                        <div class="single_place">
                            <div class="thumb">
                                <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aG91c2V8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt="">
                                <a href="#" class="prise">$300</a>
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
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single_place">
                            <div class="thumb">
                                <img src="data:image/jpeg;base64,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" alt="">
                                <a href="#" class="prise">$250</a>
                            </div>
                            <div class="place_info">
                                <a href="destination_details.html"><h3>London</h3></a>
                                <p>England</p>
                                <div class="rating_days d-flex justify-content-between">
                                    <span class="d-flex justify-content-center align-items-center">
                                         <i class="fa fa-star"></i> 
                                         <i class="fa fa-star"></i> 
                                         <i class="fa fa-star"></i> 
                                         <i class="fa fa-star disabled"></i> 
                                         <i class="fa fa-star " id="disabled"></i> 
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single_place">
                            <div class="thumb">
                                <img src="https://assets.architecturaldesigns.com/plan_assets/325006612/large/48606FM_rendering_1604503913.jpg?1604503913" alt="">
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
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
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
            <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                </div>
            </form>
        </div>
        <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                    <h3>Buttonwood, California.</h3>
                    <p>Rosemead, CA 91770</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                <div class="media-body">
                    <h3>+1 253 565 2365</h3>
                    <p>Mon to Fri 9am to 6pm</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                    <h3>support@colorlib.com</h3>
                    <p>Send us your query anytime!</p>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection