@extends('navbar.navbar')
@section('content')
    <br>
    <h3>Shopping Cart</h4>
    <br>
    <div class="row">
        @if($nullMsg == 0)
            <h4 style="margin-left:40px; color:white; background-color:red; width:40%; text-align:center;">Cart is Empty</h4>
        @else
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
                                        Qty: <select name="dropDown" class="form-control" onchange="update{{$item->modelNo}}()" style="width:60px; height:30px; display:inline; background-color:#88BDBC; color:#112D32;font-size:12px;">
                                                <option value="none" selected disabled hidden>{{$quantity[$i]}}</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                        </select>
                                    </form>
                                    <a href="/moveToWishlist/{{$item->categoryId}}/{{$item->modelNo}}" class="btn btn-xs btn-info" style="padding: 3px!important; text-aligh:center; font-size:15px; left:300px; position:relative;">move to wishlist</a>

                                    <a href="/deleteCartItem/{{$item->categoryId}}/{{$item->modelNo}}" class="btn btn-xs btn-info" style="padding: 3px!important; text-aligh:center; font-size:15px; left:100px; position:relative;">Delete</a>
                                </div>
                            </div>
                        </div>
                        <script>
                            function update{{$item->modelNo}}(){
                                document.getElementById("{{$item->modelNo}}").submit();
                            }
                        </script>
                    @endforeach        
                        @php
                            $i = $i + 1;
                        @endphp
                @endwhile
            </div>
            <div class="col-md-3" style="text-align:center; background-color: #88BDBC; padding-top:10px; height:250px;">
                <strong style="font-size:20px">100% Purchase Protection</strong><br>
                <strong style="font-size:20px">Original Product</strong><br>
                <strong style="font-size:20px">Secuted Payment</strong><br><br>
                <div style="text-align:center; font-size:22px;">
                    Subtotal({{$itemNo}} item):₹{{$cost}}
                </div> 
                <br>
                {{-- <button style="background-color: #112D32; border-radius:7px; border-color: #88BDBC; color:white;">Proceed to Buy</button> --}}
                <a href="/orderPreview" class="btn btn-xs btn-info" style="padding: 3px!important; text-aligh:center; font-size:15px; background-color: #112D32; border-radius:7px; border-color: #88BDBC; color:white;">Proceed to Buy</a>

                <br>
                <br>
            </div> 
        @endif
    </div>
@endsection
