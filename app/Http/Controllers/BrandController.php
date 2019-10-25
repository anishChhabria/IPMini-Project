<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($brand,$table)
    {
        $products = DB::table($table)->get()->where('brand', '=', $brand);
        return view('brandPage.brandProduct')->with('products',$products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function displayProduct($categoryId,$modelNo){

        $table = DB::table('productCategory')->where('categoryId', '=', $categoryId)->pluck('categoryName');
        // return($table[0]);
        $productdata = DB::table($table[0])->get()->where('modelNo','=', $modelNo);
        // return($product);
        $column =  DB::getSchemaBuilder()->getColumnListing($table[0]);
        // return($column);
        $brand = DB::table($table[0])->get()->where('modelNo','=', $modelNo)->pluck('brand');
        // return($brand);
        $productall = DB::table($table[0])->get()->where('brand','=',$brand[0])->where('modelNo','!=',$modelNo);
        // return($productall);
        $i=0;
        return view('categoryPage.displayProduct')->with('productdata',$productdata)->with('column',$column)->with('i',$i)->with('products',$productall);

    }
}
