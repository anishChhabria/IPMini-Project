@extends('landingPage.landingpage')

@section('navbar')

<div>
    <nav id="topNav1" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div id="logo" class="col-3">
                {{config('app.name')}}
            </div>
            <div id="search" class="col-5 input-group md-form form-sm form-2 pl-0 ">
                <input id = "searchBar" class="form-control my-0 py-1 red-border" type="text" placeholder="Search..." aria-label="Search">
                <button id="searchButton"><i class="fas fa-search text-grey" aria-hidden="true"></i></button>
            </div>
            <div class="col-1 wishlist">
                <a id="wishlist" class="plain wishlist" href="/wishlist">
                    <i class="fa fa-heart" aria-hidden="true"></i> <span class='wishcart1'>Wishlist</span>
                </a>
            </div>
            <div class="col-1 cart">
                <a id="cart" class="plain cart" href="/cart">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class='wishcart1'>Cart</span>
                </a>
            </div>
            @guest
            <div class="col-1 userprofile">
                <li class="nav-item " style="padding:0px">
                    <a class="nav-link" href="{{ route('login') }}" style="padding: 0px;">{{ __('Login') }}</a>
                </li>
            </div>
            <div class="col-1 userprofile">
                <li class="nav-item" style="padding: 0px;">
                    <a class="nav-link" href="{{ route('register') }}" style="padding: 0px;">{{ __('Register') }}</a>
                </li>
            </div>
            @else
                <li class="nav-item dropdown col-2">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profileDropdownList" aria-labelledby="navbarDropdown" style="z-index: 6; position: absolute;">
                        <div class="profileDropdown">
                            <a class="dropdown-item" href="/profile">Profile</a>
                        </div>
                        <div class="profileDropdown">
                            <a class="dropdown-item" href="/orders">Orders</a>
                        </div>
                        <div class="profileDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </div>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </div>
    </nav> 
    <nav id="topNav2" class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/Category" data-target="category">
                            Category
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Brands" data-target="brands">
                            Brands
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Accessories">
                            Monitor
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Compare">
                            Compare
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Offers">
                            Offers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/AboutUs" data-target="pre-built">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ContactUs" data-target="custom-built">
                            Contact Us 
                        </a>
                    </li>
                    @if(Session::has('user') && Session::get('user')['email'] == '2017.anshul.chaudhary@ves.ac.in' )
                        <li>
                            <a href="/admin/dashboard" class="nav-link" >
                                Admin View
                            </a>
                        </li>
                    @endif
                </ul>
            </div>   
        </div>
    </nav>
</div>

<div class="container content">
    @yield('content')
</div>

@endsection