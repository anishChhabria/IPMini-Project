<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\processors;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin');
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
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'serialNo' => 'required',
            'modelNo' => 'required',
            'category' => 'required',
            'productName' => 'required',
            'codeName' => 'required',
            'price' => 'required',
            'generation' => 'required',
            'cores' => 'required',
            'threads' => 'required',
            'baseSpeed' => 'required',
            'turboSpeed' => 'required',
            'cache' => 'required',     
            'compatibility' => 'required',
            'p_image1' => 'image|max:1999',
            'p_image2' => 'image|nullable|max:1999',
            'p_image3' => 'image|nullable|max:1999',


        ]);
        
        //  Handle file upload

        if($request->hasFile('p_image1')){
            // Get File Name with Extension
            $fileNamewithExtension = $request->file('p_image1')->getClientOriginalName();
            // Get just File name
            $file = pathinfo($fileNamewithExtension, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('p_image1')->getClientOriginalExtension();
            // File Name to store 
            $fileNameToStore1 = $file.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('p_image1')->storeAs('public/processor_images', $fileNameToStore1);

        }else{
            $fileNameToStore1 = "noimagetostore.jpg"; 
        }
        if($request->hasFile('p_image2')){
            // Get File Name with Extension
            $fileNamewithExtension = $request->file('p_image2')->getClientOriginalName();
            // Get just File name
            $file = pathinfo($fileNamewithExtension, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('p_image2')->getClientOriginalExtension();
            // File Name to store 
            $fileNameToStore2 = $file.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('p_image2')->storeAs('public/processor_images', $fileNameToStore2);

        }else{
            $fileNameToStore2 = "noimagetostore.jpg"; 
        }
        if($request->hasFile('p_image3')){
            // Get File Name with Extension
            $fileNamewithExtension = $request->file('p_image3')->getClientOriginalName();
            // Get just File name
            $file = pathinfo($fileNamewithExtension, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('p_image3')->getClientOriginalExtension();
            // File Name to store 
            $fileNameToStore3 = $file.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('p_image3')->storeAs('public/processor_images', $fileNameToStore3);

        }else{
            $fileNameToStore3 = "noimagetostore.jpg"; 
        }

        $processor = new processors();
        $processor->serialNo = $request->input('serialNo');
        $processor->modelNo = $request->input('modelNo');
        $processor->title = $request->input('title');
        $processor->description = $request->input('description');
        $processor->category = $request->input('category');
        $processor->productName = $request->input('productName');
        $processor->codeName = $request->input('codeName');
        $processor->price = $request->input('price');
        $processor->generation = $request->input('generation');
        $processor->cores = $request->input('cores');
        $processor->threads = $request->input('threads');
        $processor->baseSpeed = $request->input('baseSpeed');
        $processor->turboSpeed = $request->input('turboSpeed');
        $processor->cache = $request->input('cache');
        $processor->compatibility = $request->input('compatibility');
        $processor->p_image1 = $fileNameToStore1;
        $processor->p_image2 = $fileNameToStore2;
        $processor->p_image3 = $fileNameToStore3;
        
        $processor->save();
        return redirect('/admin/home')->with('success', 'Data saved');
        // return($request);
        
        // return('Store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        // return("gg");
    }



    /**
     * 
     * Redirect to the admin page to delete old and obsolute products
     * @return \Illuminate\Http\Response
     */
    public function deleteproduct()
    {
        return view("admin.deleteProducts");
    }


    /**
     * 
     * Redirect to the admin page to delete old and obsolute products
     * @return \Illuminate\Http\Response
     */
    public function addproduct()
    {
        return view('admin.addProducts');
    }


    /**
     * 
     * Redirect to the admin page to delete old and obsolute products
     * @return \Illuminate\Http\Response
     */
    public function addoffers()
    {
        return view("admin.addOffers");
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProducts(Request $request){
        
        $this->validate($request,[
            'component'=>'required',
            'serialNo' => 'required'
        ]);
        if($request->input('component') == 'processors'){
            $result = processors::where('serialno', '=', $request->input('serialNo') )->delete();
            if($result){
                return redirect('/admin/home')->with('success','Record has been deleted');
            }
            // return($request->input('component'));
        }elseif($request->input('component') == 'gpu'){
            
            return($request->input('component'));
        }else{
            
            return($request->input('component'));
        }
    }
}
