@extends('admin.admin')

@section('adminview')
    @foreach ($products as $product)
    <br>
    <div class="card">
            <div class="card-header">
              {{-- {{$product->categoryName}} --}}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ucfirst($product->categoryName)}}</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="/admin/products/{{$product->categoryName}}" class="btn btn-primary">Go to {{$product->categoryName}}</a>
                <a href="/admin/addProducts" class="btn btn-primary">Add {{$product->categoryName}}</a>
            </div>
            <div class="card-footer">
                {{-- {{$product->categoryName}} --}}
            </div>
          </div><br>
    @endforeach
    
@endsection