@extends('navbar.navbar')
@section('content')
    <br>
    <h3>Preview Order</h3>
    <br>
    <div class="row">
        @php
            $i = 0; 
        @endphp
        <div class="col-md-9">
            @while($i<$count)
                @foreach ($cartItems[$i] as $item)
                    <div class="cartItem" style="height:200px; width:100%; background-color: #112D32; color:#88BDBC; margin-bottom:20px;">
                        <div class="row">
                            <div class="col-5" style="padding:0;">
                                <a href="/category/product/{{$item->categoryId}}/{{$item->modelNo}}">
                                    <img src="/storage/processor_images/{{$item->p_image1}}" height="200" width="auto">
                                </a>
                            </div>
                            <div class="col-7" style="padding:0;">
                                <h4 style="margin-top:10px;">{{$item->productName}}</h4>
                                <h5 style="margin-top:10px;">₹{{$item->cost}}</h5>
                                <br>
                                <form id="{{$item->modelNo}}" action="/updateCart/{{$item->categoryId}}/{{$item->modelNo}}" method="post">
                                    @csrf
                                    Qty: {{$quantity[$i]}}
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach        
                    @php
                        $i = $i + 1;
                    @endphp
            @endwhile
            <div style="float:right;">
                Subtotal({{$itemNo}} item):₹{{$cost}}
            </div>
            <br>
            <a href="/Payment" class="btn btn-xs btn-info" style="padding: 3px!important; text-aligh:center; font-size:15px; background-color: #112D32; border-radius:7px; border-color: #88BDBC; color:white; float:right;margin-top:10px;">Proceed to Buy</a>
    </div>
@endsection