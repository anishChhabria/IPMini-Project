<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\DB;

class CompareController extends Controller
{
    public function Compare($categoryId)
    {
        $table = DB::table('productCategory')->where('categoryId',$categoryId)->pluck('categoryName');
        $product = DB::table($table[0])->get();
        return view('comparePage.productCompare')->with('product', $product)->with('categoryId',$categoryId);
    }
}
