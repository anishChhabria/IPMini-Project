@extends('navbar.navbar')

@section('content')
    <nav class="sidenavbar">
        <aside class="col-xs-12 col-md-12 col-lg-3 side-menu">
            <nav class="left-nav hidden-xs hidden-sm hidden-md">
                <ul>
                    <li>
                        <a class="link" href="/Compare/processorCompare">Processor</a>
                    </li>
                    <li>
                        <a class="link" href="/Compare/motherboardCompare">Motherboard</a>
                    </li>
                    <li>
                        <a class="link" href="/Compare/graphicCompare">Graphic Card</a>
                    </li>
                    <li>
                        <a class="link" href="/Compare/ramCompare">Ram</a>
                    </li>
                    <li>
                        <a class="link" href="/Compare/powersupplyCompare">Power Supply</a>
                    </li>
                    <li>
                        <a class="link" href="/Compare/storageCompare">Storage</a>
                    </li>
                    <li>
                        <a class="link" href="/Compare/cabinateCompare">Cabinate</a>
                    </li>
                </ul>
            </nav>
        </aside>
    </nav>
    <div class="categoryData">
        @yield('compare')    
    </div>  
@endsection