<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\processors;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Auth;
use Auth;

class NavigationController extends Controller
{
    public function index()
    {
        return view('categoryPage.defaultcategory');
    }
    public function category()
    {
        $category_json = Storage::disk('local')->get('json/parts.json');
        $category_json = json_decode($category_json,true);
        // return($category_json);
        // return($category_json['processors'][0]['amd'][0]['ryzen 5']);
        $amd = $category_json['processors'][0]['amd'];
        $intel = $category_json['processors'][0]['intel'];
        // return($intel);
        return view('categoryPage.defaultCategory');
    }
    public function brand()
    {
        return view('brandPage.defaultBrand');
    }
    public function preBuilt()
    {
        return view('pages.pre-built');
    }
    public function customBuilt()
    {
        $processors = processors::get();
        // return($processors);
        return view('pages.custom-built')->with('processors',$processors);
    }
    public function monitor()
    {
        return view('pages.monitor');
    }
    public function accessories()
    {
        return view('pages.accessories');
    }
    public function compare()
    {
        return view('pages.compare');
    }
    public function offers()
    {
        return view('pages.offers');
    }
    public function cart(Request $request)
    {
        if(!Auth::check()){
            return Redirect::back()->with('alert','Please login to continue!');
        }
        $userId = Auth::user()->id;
        $cartId = DB::table('cart')->where('userId', '=' , $userId)->pluck('cartId');
        $count = DB::table('cartItems')->where('cartId',$cartId)->count();
        if($count<=0){
            $nullmsg = 0;
            return view('pages.cart')->with('nullMsg',0);
        }
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
        return view('pages.cart')->with('nullMsg',1)->with('cartItems',$cartItems)->with('quantity',$quantity)->with('itemNo',$itemNo)->with('cost',$cost)->with('count',$count);
    }
    public function wishlist(Request $request)
    {
        if(!Auth::check()){
            return Redirect::back()->with('alert','Please login to continue!');
        }
        $userId = Auth::user()->id;
        $wishlistId = DB::table('wishlist')->where('userId', '=' , $userId)->pluck('wishlistId');
        $count = DB::table('wishlistitems')->where('wishlistId',$wishlistId)->count();
        if($count<=0){
            $nullmsg = 0;
            return view('pages.wishlist')->with('nullMsg',0);
        }
        $wishlist = DB::table('wishlistItems')->where('wishlistId',$wishlistId)->get();
        $category = array();
        $modelNo = array();
        foreach($wishlist as $items){
            $category[] = $items->categoryId;
            $modelNo[] = $items->modelNo;
        }
        $length = count($modelNo);
        $wishlistItems = array();
        $i=0;
        while($i<$length){
            $table = DB::table('productCategory')->where('categoryId',$category[$i])->pluck('categoryName');
            $wishlistItems[] = DB::table($table[0])->where('modelNo',$modelNo[$i])->get();
            $i= $i+1;
        }
        return view('pages.wishlist')->with('nullMsg',1)->with('wishlistItems',$wishlistItems)->with('count',$count);
    }
}
