{{-- <div class="container"> --}}
@extends('layouts.dashboard')


@section('content')
<nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        <div id="logo" class="col-4">
            LOGO
        </div>
        <!-- <div id="search" class="col-6">
            <input class = "searchBar" type="text" placeholder="Search..." name="search">
            <button class = "searchButton" type="submit"><i class="fa fa-search"></i></button>
        </div> -->
        <div id="search" class="col-6 input-group md-form form-sm form-2 pl-0">
            <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search..." aria-label="Search">
            <div class="input-group-append">
                <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
                aria-hidden="true"></i></span>
            </div>  
        </div>
        <div id="userProfile" class="col-2">
            hello
        </div>
    </nav>
    
    <nav style="background-color: blue">
        <div class="container">
            home
        </div>
    </nav>
    @yield('nav')
@endsection
    
{{-- </div> --}}