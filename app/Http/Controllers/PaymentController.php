<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Auth;
use Auth;

class PaymentController extends Controller
{
    public function orderPreview(){
        $userId = Auth::user()->id;
        $cartId = DB::table('cart')->where('userId', '=' , $userId)->pluck('cartId');
        $count = DB::table('cartItems')->where('cartId',$cartId)->count();
        $cart = DB::table('cartItems')->where('cartId',$cartId)->get();
        $category = array();
        $modelNo = array();
        $quantity = array();
        foreach($cart as $items){
            $category[] = $items->categoryId;
            $modelNo[] = $items->modelNo;
            $quantity[] = $items->quantity;
        }
        $length = count($modelNo);
        $cartItems = array();
        $cost=0;
        $itemNo = 0;
        $i=0;
        while($i<$length){
            $table = DB::table('productCategory')->where('categoryId',$category[$i])->pluck('categoryName');
            $cartItems[] = DB::table($table[0])->where('modelNo',$modelNo[$i])->get();
            $costTemp = DB::table($table[0])->where('modelNo',$modelNo[$i])->pluck('cost');
            $cost = $cost + ($costTemp[0]*$quantity[$i]);
            $itemNo = $itemNo + $quantity[$i];
            $i= $i+1;
        }
        return view('payment.orderPreview   ')->with('nullMsg',1)->with('cartItems',$cartItems)->with('quantity',$quantity)->with('itemNo',$itemNo)->with('cost',$cost)->with('count',$count);
    }
    public function payment()
    {
        return view('payment.payment');
    }
    public function placeOrder(){
        $userId = Auth::user()->id;
        $cartId = DB::table('cart')->where('userId', '=' , $userId)->pluck('cartId');
        $cart = DB::table('cartItems')->where('cartId',$cartId)->get();
        $category = array();
        $modelNo = array();
        $quantity = array();
        foreach($cart as $items){
            $category[] = $items->categoryId;
            $modelNo[] = $items->modelNo;
            $quantity[] = $items->quantity;
        }
        $length = DB::table('cartItems')->where('cartId',$cartId)->count();
        $cost=0;
        $i=0;
        while($i<$length){
            $table = DB::table('productCategory')->where('categoryId',$category[$i])->pluck('categoryName');
            $costTemp = DB::table($table[0])->where('modelNo',$modelNo[$i])->pluck('cost');
            $cost = $cost + ($costTemp[0]*$quantity[$i]);
            $i= $i+1;
        }
        DB:: table('orders')->insert(['userId'=>$userId,'amount'=>$cost,'orderStatus'=>'placed']);
        $orderId = DB::table('orders')->where('userId',$userId)->where('amount',$cost)->pluck('orderId');
        foreach($cart as $item){
            DB::table('orderItems')->insert(['orderId'=>$orderId[0],'categoryId'=>$item->categoryId,'modelNo'=>$item->modelNo,'quantity'=>$item->quantity]);
            DB::table('cartItems')->where('cartId',$cartId)->where('categoryId',$item->categoryId)->where('modelNo',$item->modelNo)->delete();
        }
        return("1");
        

    } 
}
