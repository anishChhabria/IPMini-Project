@extends('pages/compare')

@section('compare')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <h2>Compare {{$category}}</h2>
    <br>
    <div class="row">
    <div class="col-2" id = "category"></div>
        <div class="col-5" style="text-align:center;">
            <h3>Select 1st product</h3>
            <br>
            <form id="product1">
                @csrf
                <select id = "dropDown1" name="dropDown1" class="form-control" onchange="update1()" style="display:inline; background-color:#88BDBC; color:#112D32;font-size:20px;">
                    @foreach($product as $item)
                        <option value="none" selected disabled hidden>select product 1</option>
                        <option value="{{$item->modelNo}}">{{$item->productName}}</option>
                    @endforeach
                </select>
        </div>
        <div class="col-5" style="text-align:center;">
            <h3>Select 2nd product</h3>
            <br>
                <select name="dropDown2" id = "dropDown2" class="form-control" onchange="update2()" style="display:inline; background-color:#88BDBC; color:#112D32;font-size:20px;">
                    @foreach($product as $item)
                        <option value="none" selected disabled hidden>select product 2</option>
                        <option value="{{$item->modelNo}}">{{$item->productName}}</option>
                    @endforeach
                </select>
            </form>
        </div>
    </div>
    <div id = "demo"></div>
    @yield('compare')
    <Script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var value1, value2;
        var productData1, productData2;
        var categoryId = {!!$categoryId!!};
        function update1(){
            window.product1 = document.getElementById('dropDown1');
            value1 = product1.value;
            getvalue();
        }
        function update2(){
            product2 = document.getElementById('dropDown2');
            value2 = product2.value;
            getvalue();
        }

        function myfunc(value, index, array){
            console.log(value + " " + index )
        }

        function getvalue(){
            // console.log(value1);
            // console.log(value2);
            $.ajax({
                type:'post',
                url:'/Compare/productCompare/show/'+categoryId,
                data:{value1:value1, value2:value2, categoryId:categoryId},
                success: function(data){ // What to do if we succeed
                    // data.forEach(myfunc);
                    productData1 =  new Array(data[0]);
                    productData2 =  new Array(data[1]);
                    console.log("1"+JSON.stringify(productData1));
                    console.log("2"+JSON.stringify(productData2));
                    // alert(JSON.stringify(productData2));
                    // var temp_arr = JSON.parse(JSON.stringify(data));
                    var temp_arr= JSON.stringify(productData1);
                    var str1 = "";
                    for(var i = 0; i<temp_arr.length;i++){
                        key_arr = Object.keys(temp_arr[i]);
                        for(var j=0; j<key_arr.length;j++){
                            str1+=key_arr[j]  + ":" + temp_arr[i][key_arr[j]] + '<br>';
                        }
                        // str1+=JSON.stringify(temp_arr[i]['modelNo']);
                        // str1+= '<br>';
                    }
                    document.getElementById('demo').innerHTML = str1;
                }
            });
        }
    </Script>
@endsection