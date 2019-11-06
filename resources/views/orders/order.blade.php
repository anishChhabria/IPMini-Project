@extends('navbar.navbar')
@section('content')
    <br>
    <h1>Order Summery</h1>
    <br>
    {{-- {{$orders}} --}}
    @if($nullMsg == 0)
        <h4 style="margin-left:40px; color:white; background-color:red; width:40%; text-align:center;">No order placed</h4>
    @else
        @php
        $i = 0; 
        @endphp
        @while ($i<$nullMsg)
            {{-- display --}}
            <div class="row" style="height:170px; width:100%; background-color: #112D32; color:#88BDBC; margin-bottom:20px;">
                <p style="font-size:25px; color:white; padding:10px;">    
                    order ID : {{$orders[$i]->orderId}}
                    <br>
                    Amount of order : {{$orders[$i]->amount}}
                    <br>
                    Date & time : {{$orders[$i]->timeStamp}}
                    <br>
                    <a href="/orders/{{$orders[$i]->orderId}}" class="btn btn-xs btn-info cartwish" style="padding: 3px!important; text-aligh:center; font-size:15px; margin-left:950px;">View Order</a>
                </p>
            </div> 
            @php
                $i = $i + 1;
            @endphp
        @endwhile
    @endif

@endsection
