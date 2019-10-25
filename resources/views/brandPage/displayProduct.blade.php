@extends('navbar.navbar')

@section('content')
<style>
    .grid-container {
        display: grid;
        grid-template-columns: 520px auto;
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
    .checked {
        color: orange;
    }
    .details{
        margin: 0px;
    }
    .cartwish{
        width: 200px;
        text-align: center;
        border-radius: 20px;
        background-color: #112D32;
        color: #88BDBC;
    }
    table tr td{
        border: 1px solid;
        width: 400px;
    }
    
</style>

<br>
<div class="grid-container">
    @foreach ($productdata as $showproduct)
        <div class="item1">
            <img src="/storage/processor_images/{{$showproduct->p_image1}}" alt="" height='500' width = '500'>
        </div>
        <div class="item2">
            <div style="color:black; margin-bottom:10px;">{{$showproduct->productName}}</div>
            {{-- conntect to backend MUST BE DONE --}}
            <div style="font-size:15px; margin-bottom:12px;">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span> 10 reviews</span> 
            </div>
            <h5 style="color:#88BDBC; margin-bottom:12px;">₹ {{$showproduct->cost}}</h5>
            <div style="color:gray; font-size:20px;">
                <p class="details"> Brand : {{$showproduct->brand}}</p>
                <p class="details"> Product code : {{$showproduct->modelNo}}</p>
                <p class="details"> Availibility : In Stock</p>
            </div>
            <br>
            <div style="font-size:15px; margin-bottom:10px;">
                <p class="details">Easy EMIs option with 0% interest rate t&c applied</p>
                <p class="details">Get cashback on Card payment with HDFC debit card</p>
            </div>
            <form method="post" action="/addToCart/{{$showproduct->categoryId}}/{{$showproduct->modelNo}}"  style="font-size:15px;">
                @csrf
                    Quantity:
                    <input type="number" id="quantity" value="1" min="1" max="5" size="4"> <br><br>
                    <input type="submit" value="Add to cart" class="cartwish"> 
                    <button class="cartwish">Add to wishlist</button>
            </form>
        </div>
    @endforeach
</div>
<br>
<div class="row">
    <div class="col-8">
    <h5>Description:</h5>
    <table style="margin-right:30px;"> 
        @foreach ($productdata as $row)   
            @foreach ($row as $item1) 
            @if ($column[$i]=='description' || $column[$i]=='p_image1' || $column[$i]=='p_image2' || $column[$i]=='p_image3' || $column[$i]=='created_at' || $column[$i]=='updated_at' || $column[$i]=='categoryId' || $column[$i]=='inStock')
                @php
                    $i = $i + 1        
                @endphp
                @continue
            @endif
            <tr>
                <td>{{$column[$i]}}</td>
                <td>{{$item1}}</td>
            </tr>
            @php
                $i = $i+1
            @endphp
            @endforeach
        @endforeach
    </table>
    </div>
    <div class="col-4">
        @php
            $j=0;
        @endphp
            @foreach ($products as $showproduct)
                @if ($j==2)
                    @break
                @endif
                <div class = "card">
                    <a href="/category/product/{{$showproduct->categoryId}}/{{$showproduct->modelNo}}">
                        <img class="card-img-top" src="/storage/processor_images/{{$showproduct->p_image1}}" height="200" width="auto">
                        <div class="card-body" style="text-align:center;">
                                <h6 style="color:black;">{{$showproduct->productName}}</h6>
                                <h6 style="color:#88BDBC;">₹ {{$showproduct->cost}}</h6>
                        </div>
                    </a>             
                </div>
                @php
                $j = $j +1     
                @endphp
            @endforeach
    </div>
</div>
@endsection