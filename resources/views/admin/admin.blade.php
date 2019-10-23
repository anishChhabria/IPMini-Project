@extends('navbar.navbar')

@section('content')
    
    @include('inc.message')
    <div class="container">
        @yield('adminview')
    </div>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endsection