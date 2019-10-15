<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class = "container">
        <div class="content">
                <button class = "btn btn-outline-primary" onclick="window.location='{{ url("admin/addProducts") }}'"> Add Product</button>
                {{-- <button class = "btn btn-outline-danger" onclick="window.location='{{ url("admin/deleteProduct") }}'"> Delete Product</button>
                <button class = "btn btn-outline-info" onclick="window.location='{{ url("admin/addOffers") }}'"> Add Offers</button>
                <button class = "btn btn-outline-info" onclick="window.location='{{ url("admin/deleteOffer") }}'"> Dpproelete Offers</button>
                <button class = "btn btn-outline-info" onclick="window.location='{{ url("admin/editProduct") }}'"> Edit Product</button> --}}
                {{-- {!! $products['modelNo'] !!} --}}


                
            @include('inc.message')
            @yield('adminview')
        </div>
    </div>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>