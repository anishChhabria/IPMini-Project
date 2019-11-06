@extends('navbar.navbar')
@section('content')
    <br>
    <h3>Wishlist Items</h3>
    <br>
    <div class="row">
        @if($nullMsg == 0)
            <h4 style="margin-left:40px; color:white; background-color:red; width:40%; text-align:center;">Wishlist is Empty</h4>
        @else
            @php
                $i = 0; 
            @endphp
            <div class="col-12">
                @while ($i<$count)
                    @foreach ($wishlistItems[$i] as $item)
                        <div class="wishlistItem" style="height:200px; width:100%; background-color: #112D32; color:#88BDBC; margin-bottom:20px;">
                            <div class="row">
                                <div class="col-4" style="padding:0;">
                                    <a href="/category/product/{{$item->categoryId}}/{{$item->modelNo}}">
                                        <img src="/storage/processor_images/{{$item->p_image1}}" height="200" width="320">
                                    </a>
                                </div>
                                <div class="col-6" style="padding:0;">
                                    <h4 style="margin-top:10px;">{{$item->productName}}</h4>
                                    <h5 style="margin-top:20px;">₹{{$item->cost}}</h5>
                                    <br>
                                </div>
                                <div class="col-2" style="padding:0;text-align:center;">
                                    <br>
                                    <br>
                                    <a href="/moveToCart/{{$item->categoryId}}/{{$item->modelNo}}" class="btn btn-xs btn-info" style="padding: 3px!important; text-aligh:center; font-size:15px;">Add to cart</a>
                                    <br>
                                    <br>
                                    <a href="/deleteFromWishlist/{{$item->categoryId}}/{{$item->modelNo}}" class="btn btn-xs btn-info" style="padding: 3px!important; text-aligh:center; font-size:15px;">Remove</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @php
                        $i = $i + 1;
                    @endphp
                @endwhile
            </div>
        @endif
    </div>
@endsection
