@extends('navbar.navbar')

@section('content')
    <nav class="sidenavbar">
        <aside class="col-xs-12 col-md-12 col-lg-3 side-menu">
            <nav class="left-nav hidden-xs hidden-sm hidden-md">
                <ul class="nolist">
                    <li>
                        <a class="link" href="/Compare/productCompare/101">Processor</a>
                    </li>
                    <li>
                        <a class="link" href="/Compare/motherboardCompare/102">Motherboard</a>
                    </li>
                    <li>
                        <a class="link" href="/Compare/graphicCompare/103">Graphic Card</a>
                    </li>
                    <li>
                        <a class="link" href="/Compare/ramCompare/104">Ram</a>
                    </li>
                    <li>
                        <a class="link" href="/Compare/powersupplyCompare/106">Power Supply</a>
                    </li>
                    <li>
                        <a class="link" href="/Compare/storageCompare/105">Storage</a>
                    </li>
                    <li>
                        <a class="link" href="/Compare/cabinateCompare/107">Cabinate</a>
                    </li>
                </ul>
            </nav>
        </aside>
    </nav>
    <div class="categoryData">
        @yield('compare')    
    </div>  
@endsection