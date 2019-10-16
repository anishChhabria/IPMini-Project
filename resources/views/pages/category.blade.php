@extends('navbar.navbar')

@section('content')
    <nav class="sidenavbar">
        <aside class="col-xs-12 col-md-12 col-lg-3 side-menu">
            <nav class="left-nav hidden-xs hidden-sm hidden-md">
                <ul class="nolist">
                    <li>
                        <a class="link" href="#">
                            <img src="{{asset('images/icon/processor.png')}}" alt="processor"> 
                            Processor
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="/intel" id="intel">Intel</a>
                            </li>
                            <li>
                                <a href="#">AMD</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="link" href="#" id="amd">
                            <img src="{{ asset('images/icon/motherboard.png') }}" alt="motherboard">
                            Motherboard
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">Intel platform</a>
                            </li>
                            <li>
                                <a href="#">AMD platform</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="link" href="#">
                            <img src="{{ asset('images/icon/ram-memory.png') }}" alt="ram">
                            Ram
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">DDR3</a>
                            </li>
                            <li>
                                <a href="#">DDR4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="link" href="#">
                            <img src="{{ asset('images/icon/graphics-card.png') }}" alt="GPU">
                            Graphic Card
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">NVIDIA card</a>
                            </li>
                            <li>
                                <a href="#">AMD card</a>
                            </li>
                        </ul>            
                    </li>
                    <li>
                        <a class="link" href="#">
                            <img src="{{ asset('images/icon/hard-disk.png') }}" alt="storage"> 
                            Storage
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">HDD</a>
                            </li>
                            <li>
                                <a href="#">SSD</a>
                            </li>
                            <li>
                                <a href="#">Intel optain</a>
                            </li>
                        </ul>            
                    </li>
                    <li>
                        <a class="link" href="#">
                            <img src="{{ asset('images/icon/power.png') }}" alt="power supply">
                            Power Supply
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">NON-Modular</a>
                            </li>
                            <li>
                                <a href="#">SEMI-Modular</a>
                            </li>
                            <li>
                                <a href="#">FULL-Modular</a>
                            </li>
                        </ul>            
                    </li>
                    <li>
                        <a class="link" href="#">
                            <img src="{{ asset('images/icon/cabinate.png') }}" alt="cabinate">
                            Cabinate
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">MINI-tower</a>
                            </li>
                            <li>
                                <a href="#">MID-tower</a>
                            </li>
                            <li>
                                <a href="#">FULL-tower</a>
                            </li>
                        </ul>            
                    </li>
                    <li>
                        <a class="link" href="#">
                            <img src="{{ asset('images/icon/cooler.png') }}" alt="cooling">
                            Cooling
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">Air Cooler</a>
                            </li>
                            <li>
                                <a href="#">Liquid Cooler</a>
                            </li>
                        </ul>            
                    </li>
                </ul>
            </nav>
        </aside>
    </nav> 
    <div class="categoryData">
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
                <img src="{{asset('images/category/asusStrixXG258q.jpg')}}" alt="Los Angeles" width="auto" height="500">
                </div>
                <div class="carousel-item">
                <img src="{{asset('images/category/NvidiaRTX2080ti.jpg')}}" alt="Chicago" width="auto" height="500">
                </div>
                <div class="carousel-item">
                <img src="{{asset('images/category/asusRogz390.jpg')}}" alt="New York" width="auto" height="500">
                </div>
            </div>
        </div>
        <div>
            @for ($i = 1; $i < 10; $i++)
                {{-- @if ($i-1/3 == 0 )
                    <br>
                @endif --}}
                <div class="col-md-6">
                    <div class="product-top">
                        <img src="{{asset('images/category/asusStrixXG258q.jpg')}}" alt="hello" height="150" width="auto">
                        <div class="overlay">
                        </div>
                        <div style="text-align:center;">
                            asus Motherboard
                        </div>
                    </div>
                </div>   
                
            @endfor
        </div>
    </div> 
    <script> 
    $('.side-menu li').on('click', 'a[href*="#"]', function(e){
      if ($(this).parent().children('ul').length){
          e.preventDefault();
          $(this).addClass('active');
          $(this).parent().children('ul').slideDown();
      }	
              
    });
  
    $('.side-menu li').on('click', 'a[href*="#"].active', function(e){
      e.preventDefault();
      $(this).removeClass('active');
      $(this).parent().children('ul').slideUp();  
    }); 

    $('.side-menu li').on('click', 'a[href*="#"]', function(x){
        x.preventDefault();
        $(this).find('i').toggleClass("fa fa-chevron-down down-icon");
        $(this).find('i').toggleClass("fa fa-chevron-up up-icon");
    });
    </script>
@endsection
{{-- fa fa-chevron-down down-icon --}}
{{-- fa fa-chevron-up up-icon --}}