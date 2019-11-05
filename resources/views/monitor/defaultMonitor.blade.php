@extends('pages.accessories')

@section('monitor')
    
<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>       
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('images/monitor/samsung.jpg')}}" alt="CorsairSetup" width="auto" height="500">
        </div>
        <div class="carousel-item">
            <img src="{{asset('images/monitor/asus.jpg')}}" alt="GskillRgbRam" width="auto" height="500">
        </div>
        <div class="carousel-item">
            <img src="{{asset('images/monitor/alienware.jpg')}}" alt="asus" width="auto" height="500">
        </div>
    </div>
</div>

@endsection