@extends('layouts.app')

@section('content')
<div class="popular_places_area">
    <div class="container">
        <h1 id="houselist">Search for "{{$_GET['place']}}"</h1>
        <h3 id="housefound">{{count($houses)}} houses found</h3>
        <div class="row">
            <div class="row">
                @foreach ($houses as $house)
                <div class="col-lg-6 col-md-6">
                    <a href="details?id={{ $house->id }}&check_in={{$checkIn}}&check_out={{$checkOut}}">
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
                                            <a
                                                href="details?id={{ $house->id }}&check_in={{$checkIn}}&check_out={{$checkOut}}">({{$house->stars}}
                                                stars)</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection