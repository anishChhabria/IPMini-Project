@extends('navbar.navbar')

@section('category')
    <div>
        <nav class="sidenavbar">
            <div>
                <ul class="navigation">
                    <li class="parent">
                        <a class="link" href="#">
                            <i class="fas fa-minus"></i>
                                Processor
                            <i class="fas fa-plus"></i>
                        </a>
                    </li>
                    <li class="parent">
                        <a class="link" href="#">
                            <i class="fas fa-minus"></i>
                                Motherboard
                            <i class="fas fa-plus"></i>
                        </a>
                    </li>    
                </ul>
            </div>          
        </nav>
        <div class="data">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque molestiae natus quas quibusdam corrupti repudiandae eum adipisci tempora ut eveniet similique rerum consectetur aspernatur, soluta aut asperiores aperiam, temporibus perspiciatis!
        </div>
    </div> 
@endsection