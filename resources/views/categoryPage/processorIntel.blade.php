@extends('pages.category')

@section('category')
    {{-- {{$products}} --}}
    <br>
    <div class = "row" style="margin:10px;">
        @foreach ($products as $showproduct)
        
            {{-- {{$showproduct}} --}}
        <div class = "card col-md-4">
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