<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
class NavigationController extends Controller
{
    public function index()
    {
        return view('pages.category');
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
        return view('pages.category')->with('intel', $intel)->with('amd',$amd);
    }
    public function brand()
    {
        return view('pages.brands');
    }
    public function preBuilt()
    {
        return view('pages.pre-built');
    }
    public function customBuilt()
    {
        return view('pages.custom-built');
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
}
