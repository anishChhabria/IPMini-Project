@extends('navbar.navbar')
@section('content')
    <br>
    <h1>Order ID: {{$orderData[0]->orderId}}</h1>
    <br>
    @php
    $i = 0; 
    @endphp
    @while ($i<$count)
    <div class="row" style="height:200px; width:100%; background-color: #112D32; color:#88BDBC; margin-bottom:20px;">
            <div class="col-4" style="padding:0;">
                <a href="/category/product/{{$product[$i][0]->categoryId}}/{{$product[$i][0]->modelNo}}">
                    <img src="/storage/processor_images/{{$product[$i][0]->p_image1}}" height="200" width="320">
                </a>
            </div>
            <div class="col-6" style="padding:0;">
                <h4 style="margin-top:10px;">{{$product[$i][0]->productName}}</h4>
                <h5 style="margin-top:20px;">cost: ₹{{$product[$i][0]->cost}}</h5>
                <h5 style="margin-top:20px;">Quantity: {{$orderData[$i]->quantity}}</h5>
                <br>
            </div>
        </div> 
        @php
            $i = $i + 1;
        @endphp
    @endwhile

@endsection
