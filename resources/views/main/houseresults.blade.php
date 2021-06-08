@extends('layouts.app')

@section('content')
<div class="popular_places_area">
    <div class="container">
        <h1 id="houselist">Search for "Agadir"</h1>
    <h3 id="housefound">3 houses found</h3> 
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
                                <img src="https://d1qfj231ug7wdu.cloudfront.net/pictures/estate/2889/2888461/21417979275ca488d84133c3.72517247_7923e15b26_1024.jpg" alt="">
                                <a href="#" class="prise">$500</a>
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
                                <img src="https://www.immobilieragadir.com/_media/img/small/38a88c27-30ac-4e7f-b004-1bfe91ac7a74.jpg" alt="">
                                <a href="#" class="prise">$200</a>
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
                </div>
        </div>
    </div>
</div>

@endsection