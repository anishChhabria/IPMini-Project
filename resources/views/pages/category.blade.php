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
                                <a href="/product/intel" id="intel">Intel</a>
                            </li>
                            <li>
                                <a href="/product/AMD">AMD</a>
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
                                <a href="/product/intelPlatform">Intel platform</a>
                            </li>
                            <li>
                                <a href="/product/amdPlatform">AMD platform</a>
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
                                <a href="/product/DDR3">DDR3</a>
                            </li>
                            <li>
                                <a href="/product/DDR4">DDR4</a>
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
                                <a href="/product/nvidia">NVIDIA card</a>
                            </li>
                            <li>
                                <a href="/product/amdcard">AMD card</a>
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
                                <a href="/product/hdd">HDD</a>
                            </li>
                            <li>
                                <a href="/product/ssd">SSD</a>
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
                                <a href="/product/nonModular">NON-Modular</a>
                            </li>
                            <li>
                                <a href="/product/semiModular">SEMI-Modular</a>
                            </li>
                            <li>
                                <a href="/product/fullModular">FULL-Modular</a>
                            </li>
                        </ul>            
                    </li>
                    <li>
                        <a class="link" href="#">
                            <img src="{{ asset('images/icon/cabinet.png') }}" alt="cabinate">
                            Cabinet
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="/product/miniTower">MINI-tower</a>
                            </li>
                            <li>
                                <a href="/product/midTower">MID-tower</a>
                            </li>
                            <li>
                                <a href="/product/fullTower">FULL-tower</a>
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
                                <a href="/product/air">Air Cooler</a>
                            </li>
                            <li>
                                <a href="/product/liquid">Liquid Cooler</a>
                            </li>
                        </ul>            
                    </li>
                </ul>
            </nav>
        </aside>
    </nav> 
    <div class="categoryData">
        @yield('category')
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