<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function displayOrders(){
        $userId = Auth::user()->id;
        $orders = DB::table('orders')->where('userId',$userId)->get();
        $nullMsg = DB::table('orders')->where('userId',$userId)->count();
        return view('orders.order')->with('orders',$orders)->with('nullMsg',$nullMsg);
    }
    public function orderItems($orderId){
        $orderData = DB::table('orderItems')->where('orderId',$orderId)->get();
        $count = DB::table('orderItems')->where('orderId',$orderId)->count();
        $product = array('');
        for($i=0;$i<$count;$i++){
            $table = DB::table('productCategory')->where('categoryId',$orderData[$i]->categoryId)->pluck('categoryName');
            $product[$i] = DB::table($table[0])->where('modelNo',$orderData[$i]->modelNo)->get();
        }
        return view('orders.orderItems')->with('orderData',$orderData)->with('count',$count)->with('product',$product);

    }
}
