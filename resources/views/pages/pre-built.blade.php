@extends('navbar.navbar')

@section('content')
    <nav class="sidenavbar">
        <aside class="col-xs-12 col-md-12 col-lg-3 side-menu">
            <nav class="left-nav hidden-xs hidden-sm hidden-md">
                <ul class="nolist">
                    <li>
                        <a class="link" href="#">
                            High End System
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">Motherboard</a>
                            </li>
                            <li>
                                <a href="#">Graphic card</a>
                            </li>
                            <li>
                                <a href="#">Peripherals</a>
                            </li>
                            <li>
                                <a href="#">View All...</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="link" href="#">
                            Gaming System
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>                            
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">Monitor</a>
                            </li>
                            <li>
                                <a href="#">Gaming-Mouse</a>
                            </li>
                            <li>
                                <a href="#">View All...</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="link" href="#">
                            Content Creation
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>                            
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">Monitor</a>
                            </li>
                            <li>
                                <a href="#">Gaming-Mouse</a>
                            </li>
                            <li>
                                <a href="#">View All...</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="link" href="#">
                            Office System
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>                            
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">Monitor</a>
                            </li>
                            <li>
                                <a href="#">Gaming-Mouse</a>
                            </li>
                            <li>
                                <a href="#">View All...</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>
    </nav>
    <div class="brandData">
        
    
    </div>  
    <script>
    $('.side-menu li').on('click', 'a', function(e){
      if ($(this).parent().children('ul').length){
          e.preventDefault();
          $(this).addClass('active');
          $(this).parent().children('ul').slideDown();
          setTimeout(function(){ 
            // $.fn.matchHeight._update();
            // $.fn.matchHeight._maintainScroll = true;
          }, 1000);
      }	
              
    });
  
    $('.side-menu li').on('click', 'a.active', function(e){
      e.preventDefault();
      $(this).removeClass('active');
      $(this).parent().children('ul').slideUp();  
      setTimeout(function(){ 
        // $.fn.matchHeight._update();
        // $.fn.matchHeight._maintainScroll = true;
      }, 1000);
    });
    
    </script>
@endsection