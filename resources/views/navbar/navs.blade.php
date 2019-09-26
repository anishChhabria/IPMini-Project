@extends('layouts.dashboard')

@section('nav')

<!-- <script>
    $(document).ready(function(){
            
        var trigger = $('#hello div a'),
            container = $('#content');
        console.log(trigger);
        trigger.on('click()',function(){
            console.log('Hii');
            var $this = $(this),
                target = $this.data('target');
                console.log(target);

            container.load(target + '.blade.php');

            return false;
        });
    }); 
</script> -->


{{-- <div>
    for best view try to access the website on laptop/desktop 
</div> --}}
<nav id="topNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div id="logo" class="col-4">
            LOGO
        </div>
        <div id="search" class="col-6 input-group md-form form-sm form-2 pl-0 ">
            <input id = "searchBar" class="form-control my-0 py-1 red-border" type="text" placeholder="Search..." aria-label="Search">
            <button id="searchButton"><i class="fas fa-search text-grey" aria-hidden="true"></i></button>
        </div>
        <div id="userProfile" class="col-2">
        <p class="navbar-text navbar-right actions">
            <a class="plain" href="#">Log In</a>
            
        </p>
        </div>
    </div>

        <div id='hello' class="container">
            <div class="col-1.5">
                <a class="plain" href="" data-target="/category"> 
                    Shop by <br> 
                    Category
                </a>
            </div>
            <div class="col-1.5">
                <a class="plain" href="/brand">
                    Shop by <br>
                    Brand
                </a>
            </div>
            <div class="col-1.5">
                <a class="plain" href="/preBulit">
                    Pre-built <br>
                    Computer
                </a>
            </div>
            <div class="col-1.5">
                <a class="plain" href="/custom">
                    Built your <br>
                    Computer
                </a>
            </div>
            <div class="col-1.5">
                <a class="plain" href="/monitor">
                    Monitor
                </a>
            </div>
            <div class="col-1.5">
                <a class="plain" href="/accessories">
                    Accessories
                </a>
            </div>
            <div class="col-0.5">
                <a class="plain" href="/compare">
                    Compare
                </a>
            </div>
            <div class="col-0.5">
                <a class="plain" href="/offers">
                    Offer
                </a>
            </div>
            <div class="col-0.5">
                <a class="plain wishlist" href="/wishlist">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col-0.5">
                <a class="plain cart" href="/cart">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </a>
            </div>
        </div>
</nav>

<div id='content' class = "container">
    @yield('contents')
</div>
@endsection