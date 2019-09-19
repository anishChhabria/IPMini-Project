<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" ></script>

<div class = "navbar" style="postion:fixed;">
    <div class = "col-3 logo" >
        <!--<img src = "./websiteLogo1.png" alter = "Logo" width = 100%>-->
        log
    </div>
    <div class = "col-6 search">
        <form>
            <input class = "searchBar" type="text" placeholder="Search.." name="search">
            <button class = "searchButton" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class = "col-13">
        <button class = "cart" type = "submit">Cart</button>
    </div>
    <div class = "col-13">
        <button class = "list">List</button>
    </div>
    <div class = "col-14 profile">
        <button class = "profile-icon"><i class="fas fa-user-circle"></i></button>
    </div>
</div> 
<div class="sidenavbar">
     <button class = "category">
        Shop by
        <br>
        <div style="font-size: 30px">Category</div>
    </button>
    <br>
    <div>
        <ul class = "navigation">
            <li class = "parent" id = "Pre-built">
                <a class="link" href="#">
                    <i class="fas fa-minus"></i>
                    Pre-built Pc
                    <i class="fas fa-plus"></i>
                </a>
                <ul class="subnavigation">
                        <li><a class="link" href="#">Burger King</a></li>
                        <li><a class="link" href="#">Southwest Airlines</a></li>
                        <li><a class="link" href="#">Levi Strauss</a></li>
                </ul>
            </li>
            <li class = "parent" id = "Custom">
                <a class="link" href="#">
                    <i class="fas fa-minus"></i>
                    Custom Built
                    <i class="fas fa-plus"></i>
                </a>  
                <ul class="subnavigation">
                    <li><a class="link" href="#">Burger King</a></li>
                    <li><a class="link" href="#">Southwest Airlines</a></li>
                    <li><a class="link" href="#">Levi Strauss</a></li>
                </ul>                
            </li>
            <li class = "parent" id = "Computer">
                <a class="link" href="#">
                    <i class="fas fa-minus"></i>
                    Computer parts
                    <i class="fas fa-plus"></i>
                </a>
                <ul class="subnavigation">
                    <li><a class="link" href="#">Burger King</a></li>
                    <li><a class="link" href="#">Southwest Airlines</a></li>
                    <li><a class="link" href="#">Levi Strauss</a></li>
                </ul>  
            </li>
            <li class = "parent" id = "Accessories">
                <a class="link" href="#">
                    <i class="fas fa-minus"></i>
                    Accessories
                    <i class="fas fa-plus"></i>
                </a>
                <ul class="subnavigation">
                    <li><a class="link" href="#">Burger King</a></li>
                    <li><a class="link" href="#">Southwest Airlines</a></li>
                    <li><a class="link" href="#">Levi Strauss</a></li>
                </ul>  
            </li>
        </ul>
    </div>
</div>  
<div class="col-9" style="left:23%">
    {{-- @yield('contents') --}}
    @include('product.defaultProduct')

</div>
<script>
    var PreBuilt = document.getElementById('Pre-built');
    var Custom = document.getElementById('Custom');
    var Computer = document.getElementById('Computer');
    var accessories = document.getElementById('Accessories');

    PreBuilt.addEventListener('click', function() {
    $(PreBuilt).toggleClass("active");
    $(".parent:not(#Pre-built)").toggleClass("invisible");
    }, false);

    Custom.addEventListener('click', function() {
    $(Custom).toggleClass("active");
    $(".parent:not(#Custom)").toggleClass("invisible");
    }, false);

    accessories.addEventListener('click', function() {
    $(accessories).toggleClass("active");
    $(".parent:not(#Accessories)").toggleClass("invisible");
    }, false);

    Computer.addEventListener('click', function() {
    $(Computer).toggleClass("active");
    $(".parent:not(#Computer)").toggleClass("invisible");
    }, false);
</script>  