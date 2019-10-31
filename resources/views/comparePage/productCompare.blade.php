@extends('pages/compare')

@section('compare')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-5" style="text-align:center;">
            <h3>Select 1st product</h3>
            <br>
            <form id="product1" action="/compare/productCompare/{{$categoryId}}/show" method="post">
                @csrf
                <select name="dropDown" class="form-control" onchange="update1()" style="display:inline; background-color:#88BDBC; color:#112D32;font-size:20px;">
                    @foreach($product as $item)
                        <option value="none" selected disabled hidden>select product 1</option>
                        <option value="{{$item->modelNo}}">{{$item->productName}}</option>
                    @endforeach
                </select>
            </form>
        </div>
        <div class="col-5" style="text-align:center;">
            <h3>Select 2nd product</h3>
            <br>
            <form id="product1" action="/compare/productcompare/{{$categoryId}}/show" method="post">
                @csrf
                <select name="dropDown" class="form-control" onchange="update2()" style="display:inline; background-color:#88BDBC; color:#112D32;font-size:20px;">
                    @foreach($product as $item)
                        <option value="none" selected disabled hidden>select product 1</option>
                        <option value="{{$item->modelNo}}">{{$item->productName}}</option>
                    @endforeach
                </select>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-7" style="text-align:center;">
            @foreach ($product as $row)   
                @foreach ($row as $item1) 
                    {{$item1}}
                    {{-- @if ($column[$i]=='description' || $column[$i]=='p_image1' || $column[$i]=='p_image2' || $column[$i]=='p_image3' || $column[$i]=='created_at' || $column[$i]=='updated_at' || $column[$i]=='categoryId' || $column[$i]=='inStock') --}}
                        {{-- @php
                            $i = $i + 1        
                        @endphp --}}
                        @continue
                    {{-- @endif --}}
                    <tr>
                        {{-- <td>{{$column[$i]}}</td> --}}
                        <td>{{$item1}}</td>
                    </tr>
                    {{-- @php
                        $i = $i+1
                    @endphp --}}
                @endforeach
            @endforeach
        </div>
        <div class="col-5" style="text-align:center;">
        
        </div>
    </div> 
    <Script>
        function update1(){
            document.getElementById("product1").submit();
        }
        function update2(){
            document.getElementById("product2").submit();
        }
    </Script>
@endsection