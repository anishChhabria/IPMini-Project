@extends('navbar.navbar')
@section('content')
    <br>
    <h3>Shopping Cart</h4>
    <br>
    <div class="row">
        <div class="col-md-9">
                <div class="cartItem" style="height:200px; width:100%; background-color: #112D32; margin-bottom:20px; ">
                    
                </div>
                <div class="cartItem" style="height:200px; width:100%; background-color: #112D32;  margin-bottom:20px; ">
                    
                </div>
                <div class="cartItem" style="height:200px; width:100%; background-color: #112D32;  margin-bottom:20px; ">
                    
                </div>
        </div>
        <div class="col-md-3" style="text-align:center; background-color: #88BDBC; padding-top:10px; height:250px;">
            <strong style="font-size:20px">100% Purchase Protection</strong><br>
            <strong style="font-size:20px">Original Product</strong><br>
            <strong style="font-size:20px">Secuted Payment</strong><br><br>
            <div style="text-align:left; font-size:22px;">
                Subtotal(1 item):₹10000
            </div> 
            <br>
            <button style="background-color: #112D32; border-radius:7px; border-color: #88BDBC; color:white;">Proceed to Buy</button>
            <br>
            <br>
        </div>
    </div>
@endsection
