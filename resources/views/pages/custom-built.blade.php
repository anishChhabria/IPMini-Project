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
                                <a href="#">Intel</a>
                            </li>
                            <li>
                                <a href="#">AMD</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="link" href="#">
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
                            <img src="{{ asset('images/icon/hard-disk.png') }}" alt="storage"> &nbsp;
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
                            <img src="{{ asset('images/icon/power.png') }}" alt="storage">
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
                            <img src="{{ asset('images/icon/cabinate.png') }}" alt="storage">
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
                            <img src="{{ asset('images/icon/cooler.png') }}" alt="storage">
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
    <div class="data">
        @foreach ($processors as $processor)
            
            <img src="/storage/processor_images/{{$processor->p_image1}}" alt="">
        @endforeach
    
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