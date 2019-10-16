@extends('admin.admin')

@section('adminview')
<div class = "row">
@foreach ($showproducts as $showproduct)
<div class = "card col-md-4" style="width: 18rem;">
    <img class="card-img-top" src="/storage/processor_images/{{$showproduct->p_image1}}" alt="">
    <div class="card-body">
        <h5>{{$showproduct->title}}</h5>
        <p class = "card-text">{!!$showproduct->description!!}</p>
        <a href="/admin/show/{{$showproduct->modelNo}}" class= "btn btn-primarary">View</a>
    </div>
</div>             
@endforeach
</div>       
@endsection