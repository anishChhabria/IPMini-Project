@extends('navbar.navbar')

@section('content')
    <nav class="sidenavbar">
        <aside class="col-xs-12 col-md-12 col-lg-3 side-menu">
            <nav class="left-nav hidden-xs hidden-sm hidden-md">
                <ul class="nolist">
                    <li>
                        <a class="link" href="#">
                            Asus
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="/brand/asus/motherboards">Motherboard</a>
                            </li>
                            <li>
                                <a href="/brand/asus/gpu">Graphic card</a>
                            </li>
                            <li>
                                <a href="/brand/asus/accessories">Peripherals</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="link" href="#">
                            Benq
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>                            
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="/brand/benq/monitors">Monitor</a>
                            </li>
                            <li>
                                <a href="/brand/benq/accessories">Gaming-Mouse</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="link" href="#">
                            Cooler Master
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="/brand/coolerMaster/cabinets">Cabinet</a>
                            </li>
                            <li>
                                <a href="/brand/coolerMaster/powerSupply">Power supply</a>
                            </li>
                        </ul>            
                    </li>
                    <li>
                        <a class="link" href="#">
                            Corsair
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="/brand/corsair/cabinets">Cabinets</a>
                            </li>
                            <li>
                                <a href="/brand/corsair/powerSupply">Power Supply</a>
                            </li>
                            <li>
                                <a href="/brand/corsair/ram">Memory</a>
                            </li>
                            <li>
                                <a href="/brand/corsair/coolingSystem">Cooling</a>
                            </li>
                            <li>
                                <a href="/brand/corsair/sccessories">Peripherals</a>
                        
                            </li>
                        </ul>            
                    </li>
                    <li>
                        <a class="link" href="#">
                            Gigabyte
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="/brand/gigabyte/motherboards">Motherboard</a>
                            </li>
                            <li>
                                <a href="/brand/gigabyte/gpu">Graphic Card</a>
                            </li>
                            <li>
                                <a href="/brand/gigabyte/accessories">Peripherals</a>
                        
                            </li>
                        </ul>            
                    </li>
                    <li>
                        <a class="link" href="#">
                            G.Skill
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="/brand/G.Skill/ram">Memory</a>
                            </li>
                        </ul>            
                    </li>
                    <li>
                        <a class="link" href="#">
                            HyperX
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="/brand/hyperX/hdd">Memory</a>
                            </li>
                            <li>
                                <a href="/brand/hyperX/ssd">SSD</a>
                        
                            </li>
                        </ul>            
                    </li>
                    <li>
                        <a class="link" href="#">
                            Msi
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="/brand/msi/motherboards">Motherboard</a>
                            </li>
                            <li>
                                <a href="/brand/msi/gpu">Graphic Card</a>
                        
                            </li>
                        </ul>            
                    </li>
                    <li>
                        <a class="link" href="#">
                            Nzxt
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="/brand/nzxt/caninete">Cabinate</a>
                            </li>
                            <li>
                                <a href="/brand/nzxt/coolingSystem">Cooling</a>
                        
                            </li>
                        </ul>            
                    </li>
                    <li>
                            <a class="link" href="#">
                                Zotac
                                <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                            </a>
                            <ul class="nolist">
                                <li>
                                    <a href="/brand/zotac/gpu">Graphic Card</a>
                                </li>
                        </li>
                </ul>
            </nav>
        </aside>
    </nav>
    <div class="categoryData">
        @yield('brand')
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