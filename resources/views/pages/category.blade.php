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
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus odit unde saepe beatae inventore harum nam earum exercitationem laboriosam qui natus a temporibus voluptatum quisquam eveniet, ullam debitis non sunt.</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure culpa laborum eligendi voluptates et explicabo atque. Illum aperiam adipisci doloribus, architecto, vero dicta quibusdam, provident nostrum voluptates ducimus iste aut!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa totam quis soluta officia incidunt magni odio optio unde mollitia? Porro maxime commodi hic accusantium possimus repellat in suscipit harum tempora.</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero sint sit dignissimos fugiat voluptatibus odio natus nisi? Tenetur eos dolore inventore neque similique corrupti quasi aut placeat temporibus, nemo accusantium?</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi velit dicta praesentium quas, animi ab, odio illo libero nemo maxime necessitatibus reiciendis, neque minus fuga enim! Velit voluptas enim officiis.</p>
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
{{-- fa fa-chevron-down down-icon --}}
{{-- fa fa-chevron-up up-icon --}}