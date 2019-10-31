@extends('pages.pre-built')

@section('prebuilt')
    
<div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators" style="z-index:2;">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>       
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
            <a href="/profile">
                <img src="{{asset('images/prebuilt/img1.jpg')}}" alt="Los Angeles" width="auto" height="500">
            </a>
            </div>
            <div class="carousel-item">
            <a href="">
                <img src="{{asset('images/prebuilt/img5.jpg')}}" alt="Chicago" width="auto" height="500">
            </a>
            </div>
            <div class="carousel-item">
            <a href="">
                <img src="{{asset('images/prebuilt/img9.jpg')}}" alt="New York" width="auto" height="500">
            </a>
            </div>
        </div>
    </div>
    <div>
        {{-- <div id="asdfgh" class="col-md-12">
        @for ($i = 1; $i < 10; $i++)
            @if (($i-1)/3 == 0 )
                <br>
            @endif
            
                <div class="product-top col-md-1">
                    <img src="{{asset('images/category/asusStrixXG258q.jpg')}}" alt="hello" height="150" width="auto">
                    <div class="overlay">
                    </div>
                    <div style="text-align:center;">
                        asus Motherboard
                    </div>
                </div>
            
            
        @endfor --}}
    </div>  
</div>


@endsection
