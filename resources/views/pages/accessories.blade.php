@extends('navbar.navbar')

@section('content')
    <nav class="sidenavbar">
        <aside class="col-xs-12 col-md-12 col-lg-3 side-menu">
            <nav class="left-nav hidden-xs hidden-sm hidden-md">
                <ul class="nolist">
                    <li>
                        <a href="/monitor/60">60 Hz</a>
                    </li>
                    <li>
                        <a href="/monitor/144">144 Hz</a>
                    </li>
                    <li>
                        <a href="/monitor/240">240 Hz</a>
                    </li>
                </ul>
            </nav>
        </aside>
    </nav>
    <div class="categoryData">
        @yield('monitor')
    </div>
@endsection