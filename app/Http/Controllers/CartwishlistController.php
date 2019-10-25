<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Session;
use App\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class CartwishlistController extends Controller
{
    public function addCart($categoryId,$modelNo,Request $request){
        if(!Auth::check()){
            return Redirect::back();
        }

        $quantity = $request->input('quantity');
        $table = DB::table('productCategory')->where('categoryId', '=', $categoryId)->pluck('categoryName');
        $userId = Auth::user()->id;
        $cartId = DB::table('cartItem')->where('userId', '=' , $userId);
        // $result = DB::table($table[0])->insert('insert into cartItem valuse ($cartId,$categoryId,$modelNo,$quantity)');
        $cartItem = new cartItem();
        $cartItem->cartId = $cartId;
        $cartItem->categoryId = $categoryId;
        $cartItem->modelNo = $modelNo;
        $cartItem->quantity = $quantity;
        return('inserted');
        return Redirect::back();

        
    }
}
