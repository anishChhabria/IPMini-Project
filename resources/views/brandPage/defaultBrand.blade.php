@extends('pages.brands')

@section('brand')
    
<div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>       
    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('images/brand/corsairSetup.png')}}" alt="CorsairSetup" width="auto" height="500">
        </div>
        <div class="carousel-item">
            <img src="{{asset('images/brand/GskillpTridentZ.jpg')}}" alt="GskillRgbRam" width="auto" height="500">
        </div>
        <div class="carousel-item">
            <img src="{{asset('images/category/asusStrixXG258q.jpg')}}" alt="asus" width="auto" height="500">
        </div>
    </div>
</div>

@endsection