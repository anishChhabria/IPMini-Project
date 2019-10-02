@extends('landingPage.landingpage')

@section('navbar')

<div>
    for best experience try to access the website on laptop/desktop 
</div>
<div>
    <nav id="topNav1" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div id="logo" class="col-3">
                LOGO
            </div>
            <div id="search" class="col-5 input-group md-form form-sm form-2 pl-0 ">
                <input id = "searchBar" class="form-control my-0 py-1 red-border" type="text" placeholder="Search..." aria-label="Search">
                <button id="searchButton"><i class="fas fa-search text-grey" aria-hidden="true"></i></button>
            </div>
            <div class="col-1 wishlist">
                <a id="wishlist" class="plain wishlist" href="/wishlist">
                    <i class="fa fa-heart" aria-hidden="true"></i> wishlist
                </a>
            </div>
            <div class="col-2 cart">
                <a id="cart" class="plain cart" href="/cart">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> 99-items 
                    <br>
                    ₹-100000      
                </a>
            </div>
            <div class="col-1 userprofile">
                <a class="plain" href="#">LogIn/Register</a>
            </div>
        </div>
    </nav>
    <nav id="topNav2" class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/Category" data-target="category">
                            Category
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/Brands" data-target="brands">
                            Brands
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/Prebuilt" data-target="pre-built">
                            Pre-built
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/Custombuilt" data-target="custom-built">
                            Custom-built 
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/Monitor" data-target="monitor">
                            Monitor
                        </a>
                    </li>  
                    <li class="nav-item active">
                        <a class="nav-link" href="/Accessories">
                            Accessories
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/Compare">
                            Compare
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/Offers">
                            Offers
                        </a>
                    </li>
                </ul>
            </div>   
        </div>
    </nav>
</div>

<div id="content" class="container">
    @yield('category')
    @yield('brands')
    @yield('prebuilt')
    @yield('custombuilt')
    @yield('monitor')
    @yield('accessories')
    @yield('compare')
    @yield('offers')
</div>

@endsection