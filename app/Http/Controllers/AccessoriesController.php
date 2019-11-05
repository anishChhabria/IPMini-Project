<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccessoriesController extends Controller
{
    public function displayProduct($refreshRate){
        $products = DB::table('monitors')->where('refreshRate',$refreshRate)->get();
        return view('monitor.monitorProduct')->with('products',$products);
    }
}
