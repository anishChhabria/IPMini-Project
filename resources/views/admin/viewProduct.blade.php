@extends('admin.admin')

@section('adminview')
{{$viewproduct}}
{{-- {{$model}} --}}
<button class = "btn btn-outline-info" onclick="window.location='{{ url("/admin/editProduct/$categoryId/$model") }}'"> Edit Product</button>
<button class = "btn btn-outline-danger" onclick="window.location='{{ url("/admin/deleteProduct/$categoryId/$model") }}'"> Delete Product</button>

<form action="/admin/addOffers/{{$categoryId}}/{{$model}}" method="get">
    <div class ="row">
            <label for="offers">Add offers</label>
            <input type="number" name = 'offers' id = 'offers' placeholder="Eg. 5">
    </div>
    
    <button class = "btn btn-outline-danger" type="submit"> Edit Offers</button>
</form>
@endsection