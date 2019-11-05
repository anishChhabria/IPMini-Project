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
        return view('comparePage.productCompare')->with('category',$table[0])->with('product', $product)->with('categoryId',$categoryId);
    }

    public function compareproduct($categoryId, Request $request){

        // return response()->json($request);


        $product1 = $request->value1;
        $product2 = $request->value2;
        $productType = DB::table('productCategory')->get()->where('categoryId', '=', $categoryId)->pluck('categoryName');
        // return response()->json($productType[0]);
        $tableName = $productType[0];
        $data1 = DB::table($tableName)->get()->where('modelNo', '=', $product1);
        $data2 = DB::table($tableName)->get()->where('modelNo', '=', $product2);
        // $data1 = $data1[0];
        // $data2 = $data2[0];
        $temp_arr = [];
        foreach($data1 as $dat){
            $temp_arr[] = $dat;
        }
        foreach($data2 as $dat){
            $temp_arr[] = $dat;
        }
        $data = [$data1,$data2];
        // return($data->value1);
        // $html = view('comparePage.productCompare')->with(compact('data'))->render();
        // return response()->json(['success' => true, 'html' => $html]);

        return response()->json($temp_arr);

    }
}
