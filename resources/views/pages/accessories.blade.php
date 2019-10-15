@extends('navbar.navbar')

@section('content')
    <nav class="sidenavbar">
        <aside class="col-xs-12 col-md-12 col-lg-3 side-menu">
            <nav class="left-nav hidden-xs hidden-sm hidden-md">
                <ul class="nolist">
                    <li>
                        <a class="link" href="#">
                            Mouse
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">Gaming Mouse</a>
                            </li>
                            <li>
                                <a href="#">wireless</a>
                            </li>
                            <li>
                                <a href="#">Full RGB</a>
                            </li>
                            <li>
                                <a href="#">View All...</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="link" href="#">
                            keyboard
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>                            
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">Mechanical</a>
                            </li>
                            <li>
                                <a href="#">Membrane</a>
                            </li>
                            <li>
                                <a href="#">Full RGB</a>
                            </li>
                            <li>
                                <a href="#">View All...</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="link" href="#">
                            Headphones
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>                            
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">7.1 sound</a>
                            </li>
                            <li>
                                <a href="#">Wireless</a>
                            </li>
                            <li>
                                <a href="#">Earphones</a>
                            </li>
                            <li>
                                <a href="#">View All...</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="link" href="#">
                            Monitor
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>                            
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">60 Hz</a>
                            </li>
                            <li>
                                <a href="#">144 Hz</a>
                            </li>
                            <li>
                                <a href="#">240 Hz</a>
                            </li>
                            <li>
                                <a href="#">View All...</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="link" href="#">
                            Mouse Mat
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>                            
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">Medium</a>
                            </li>
                            <li>
                                <a href="#">Large</a>
                            </li>
                            <li>
                                <a href="#">Extra Large</a>
                            </li>
                            <li>
                                <a href="#">View All...</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="link" href="#">
                            Gaming Chair
                            <i class="fa fa-chevron-down down-icon" aria-hidden="true"></i>                            
                        </a>
                        <ul class="nolist">
                            <li>
                                <a href="#">Corsair</a>
                            </li>
                            <li>
                                <a href="#">Gigabyte</a>
                            </li>
                            <li>
                                <a href="#">Thermaltake</a>
                            </li>
                            <li>
                                <a href="#">Green Soul</a>
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

    <div class="categoryData">
        
    
    </div> 
    
    

    <script>
    $('.side-menu li').on('click', 'a', function(e){
      if ($(this).parent().children('ul').length){
          e.preventDefault();
          $(this).addClass('active');
          $(this).parent().children('ul').slideDown();
      }	
              
    });
  
    $('.side-menu li').on('click', 'a.active', function(e){
      e.preventDefault();
      $(this).removeClass('active');
      $(this).parent().children('ul').slideUp();  
    });

    $('.side-menu li').on('click', 'a', function(x){
        x.preventDefault();
        $(this).find('i').toggleClass("fa fa-chevron-down down-icon");
        $(this).find('i').toggleClass("fa fa-chevron-up up-icon");
    });
    
    </script>
@endsection