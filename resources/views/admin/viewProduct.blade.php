@extends('admin.admin')

@section('adminview')
{{$viewproduct}}
{{-- {{$model}} --}}
<button class = "btn btn-outline-info" onclick="window.location='{{ url("admin/editProduct/$model") }}'"> Edit Product</button>
<button class = "btn btn-outline-danger" onclick="window.location='{{ url("admin/deleteProduct/$model") }}'"> Delete Product</button>
@endsection