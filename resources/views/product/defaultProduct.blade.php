{{-- @extends('navbar.navs') --}}

{{-- @section('contents') --}}
{{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
{{-- <div class="col-sm-1 col-md-12 col-lg-12"> --}}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{asset('images/la.jpg')}}" alt="Pic1" style="width:75%; height:50%">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>LA is always so much fun!</p>
                </div>
            </div>
            <div class="item ">
                <img src="{{asset('images/ny.jpg')}}" alt="Pic2" style="width:75%; height:50%">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>Thank you, New York!</p>
                </div>    
            </div>
            <div class="item">
                <img src="{{asset('images/chicago.jpg')}}" alt="Pic3" style="width:75%; height:50%">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>      
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    
{{-- </div> --}}
{{-- @endsection --}}