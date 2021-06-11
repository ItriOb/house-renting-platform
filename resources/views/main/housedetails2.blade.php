@extends('layouts.app')

@section('content')
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>House Details</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">

    <div class="container" id="mainContainer">
        <div class="row" id="upperCarousel">
            <div class="col-lg-12">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>

                        @foreach ($images as $image)
                        <li data-target="#demo" data-slide-to="{{$image->id}}"></li>
                        @endforeach
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{$house->image}}" alt="Los Angeles" width="1000" height="500">
                        </div>
                        @foreach ($images as $image)
                        <div class="carousel-item">
                            <img src="{{$image->image}}" alt="{{$image->image}}" width="1000" height="500">
                        </div>
                        @endforeach

                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>

        </div>


        <div class="row" id="txt">
            <div class="col-lg-6">
                <h1>{{$house->name}}</h1>
            </div>
            <div class="col-sm-3">
                @for ($i = 0; $i < $house->stars; $i++)
                    <i class="fa fa-star" style="color:gold"></i>
                    @endfor
                    <span>({{$house->stars}} stars)</span>

            </div>

        </div>

        <div>
            <h4><strong>Adress</strong> : {{$house->adress}}</h4>
            <br />
            <h4><strong>Phone Number</strong> : {{$house->phone}}</h4>
            <br />


            <h4><strong>Price </strong> : <strong>{{$house->price}}</strong> MAD/per night</h4>
            <br />


            <h4><strong>City </strong> : {{$house->city->name}}</h4>
        </div>


        <div class="row" id="txt">
            <div class="col-lg-12">
                <h2>Description : </h2>
                <p>{{$house->description}}</p>
            </div>
        </div>

    </div>





</div>
@endsection