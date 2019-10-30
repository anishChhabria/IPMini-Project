<?php

namespace App\Http\Controllers;

use App\cartItem;
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
            return Redirect::back()->with('alert','Please login to continue!');
        }
        $quantity = $request->input('quantity');
        $userId = Auth::user()->id;
        $cartId = DB::table('cart')->where('userId', '=' , $userId)->pluck('cartId');
        if(DB::table('cartItems')->where('modelNo',$modelNo)->where('cartId',$cartId)->count()>0){
            $oldQuantity = DB::table('cartItems')->where('modelNo',$modelNo)->where('cartId',$cartId)->pluck('quantity');
            $newQunatity = $oldQuantity[0] + $quantity;
            DB::table('cartItems')->where('modelNo','=',$modelNo)->update(['quantity'=>$newQunatity]);
            return redirect::back()->with('alert','Item added!'); 
        }
        else{
            DB::table('cartItems')->insert(['cartId'=>$cartId[0],'categoryId'=>$categoryId,'modelNo'=>$modelNo,'quantity'=>$quantity]);
            return Redirect::back()->with('alert','Item added!');     
        }
    }

    public function updateCart($categoryId,$modelNo,Request $request){
        $quantity = $request->get('dropDown');
        $userId = Auth::user()->id;
        $cartId = DB::table('cart')->where('userId', '=' , $userId)->pluck('cartId');
        // return($quantity);
        DB::table('cartItems')->where('cartId',$cartId)->where('modelNo',$modelNo)->where('categoryId',$categoryId)->update(['quantity'=>$quantity]);
        return Redirect::back();
    }
    public function deleteCartItem($categoryId,$modelNo){
        $userId = Auth::user()->id;
        $cartId = DB::table('cart')->where('userId', '=' , $userId)->pluck('cartId');
        DB::table('cartItems')->where('cartId',$cartId)->where('modelNo',$modelNo)->where('categoryId',$categoryId)->delete();
        return Redirect::back();
    }
    public function moveToWishlist($categoryId,$modelNo){
        $userId = Auth::user()->id;
        $cartId = DB::table('cart')->where('userId', '=' , $userId)->pluck('cartId');
        $wishlistId = DB::table('wishlist')->where('userId', '=' , $userId)->pluck('wishlistId');
        if(DB::table('wishlistItems')->where('modelNo',$modelNo)->where('wishlistId',$wishlistId)->count()>0){
            DB::table('cartItems')->where('cartId',$cartId)->where('modelNo',$modelNo)->where('categoryId',$categoryId)->delete();
            return redirect::back(); 
        }
        else{
            DB::table('wishlistItems')->insert(['wishlistId'=>$wishlistId[0],'categoryId'=>$categoryId,'modelNo'=>$modelNo]);
            DB::table('cartItems')->where('cartId',$cartId)->where('modelNo',$modelNo)->where('categoryId',$categoryId)->delete();
            return Redirect::back();     
        }
    }
    public function addWishlist($categoryId,$modelNo){
        if(!Auth::check()){
            return Redirect::back()->with('alert','Please login to continue!');
        }
        $userId = Auth::user()->id;
        $wishlistId = DB::table('wishlist')->where('userId', '=' , $userId)->pluck('wishlistId');
        if(DB::table('wishlistItems')->where('modelNo',$modelNo)->where('wishlistId',$wishlistId)->count()>0){
            return redirect::back(); 
        }
        else{
            DB::table('wishlistItems')->insert(['wishlistId'=>$wishlistId[0],'categoryId'=>$categoryId,'modelNo'=>$modelNo]);
            return Redirect::back();     
        }
    }
    public function deleteFromWishlist($categoryId,$modelNo){
        $userId = Auth::user()->id;
        $wishlistId = DB::table('wishlist')->where('userId', '=' , $userId)->pluck('wishlistId');
        DB::table('wishlistItems')->where('wishlistId',$wishlistId)->where('modelNo',$modelNo)->where('categoryId',$categoryId)->delete();
        return Redirect::back();
    }
    public function moveToCart($categoryId,$modelNo){
        $userId = Auth::user()->id;
        $wishlistId = DB::table('wishlist')->where('userId', '=' , $userId)->pluck('wishlistId');
        $cartId = DB::table('cart')->where('userId', '=' , $userId)->pluck('cartId');
        if(DB::table('cartItems')->where('modelNo',$modelNo)->where('cartId',$cartId)->count()>0){
            DB::table('wishlistItems')->where('wishlistId',$wishlistId)->where('modelNo',$modelNo)->where('categoryId',$categoryId)->delete();
            return Redirect::back();
        }
        else{
            DB::table('cartItems')->insert(['cartId'=>$cartId[0],'categoryId'=>$categoryId,'modelNo'=>$modelNo,'quantity'=>1]);
            DB::table('wishlistItems')->where('wishlistId',$wishlistId)->where('modelNo',$modelNo)->where('categoryId',$categoryId)->delete();
            return Redirect::back();
        }
    }
}