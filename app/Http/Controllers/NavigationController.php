<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\processors;
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
    public function cart()
    {
        return view('pages.cart');
    }
    public function wishlist()
    {
        return view('pages.wishlist');
    }
}
