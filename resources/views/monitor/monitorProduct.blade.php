@extends('pages.accessories')

@section('monitor')
    
<br>
<div style="height=100% !important;" >
    <div class = "row" style="margin:10px;">
        @foreach ($products as $showproduct)        
            <div class = "card col-md-4">
                <a href="/category/product/{{$showproduct->categoryId}}/{{$showproduct->modelNo}}">
                    <img class="card-img-top" src="/storage/processor_images/{{$showproduct->p_image1}}" height="200" width="auto">
                    <div class="card-body" style="text-align:center;">
                        <h6 style="color:black;">{{$showproduct->productName}}</h6>
                        <h6 style="color:#88BDBC;">₹ {{$showproduct->cost}}</h6>
                    </div>
                </a>             
        </div>
        @endforeach
    </div>              
</div>

@endsection