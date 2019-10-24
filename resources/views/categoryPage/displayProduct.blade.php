@extends('pages.category')

@section('category')
<style>
    .grid-container {
        display: grid;
        grid-template-columns: 450px auto;
        grid-gap: 10px;
        padding: 10px;
    }
    
    .grid-container > div {
        text-align: left;
        font-size: 30px;
    }
    .item2{
        padding-left: 10px;
        padding-top: 10px;
    }
    
</style>

<br>
<div class="grid-container">
    @foreach ($productdata as $showproduct)
        <div class="item1">
            <img src="/storage/processor_images/{{$showproduct->p_image1}}" alt="" height='450' width = '450'>
        </div>
        <div class="item2">
            <h4 style="color:black; font:">{{$showproduct->productName}}</h4>
            <h5 style="color:#88BDBC;">₹ {{$showproduct->cost}}</h5>
            <h5 style="color:black;"> Brand : {{$showproduct->brand}}</h5>
        </div>
    @endforeach
</div>
@endsection