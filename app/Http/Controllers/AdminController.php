<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\processors;
use App\motherboards;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $tabledata = DB::table($id)->get();
        // return($products);
        
        return view('admin.products')->with('showproducts',$tabledata);
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
    public function storeproduct(Request $request)
    {
        if($request->input('serialNo') == 'processors'){
            $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
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
            'categoryId' => 'required',
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
        $processor->modelNo = $request->input('modelNo');
        $processor->title = $request->input('title');
        $processor->description = $request->input('description');
        $processor->brand = $request->input('category');
        $processor->productName = $request->input('productName');
        $processor->codeName = $request->input('codeName');
        $processor->cost = $request->input('price');
        $processor->generation = $request->input('generation');
        $processor->cores = $request->input('cores');
        $processor->threads = $request->input('threads');
        $processor->baseSpeed = $request->input('baseSpeed');
        $processor->turboSpeed = $request->input('turboSpeed');
        $processor->cache = $request->input('cache');
        $processor->compatibility = $request->input('compatibility');
        $processor->categoryId = $request->input('categoryId');
        $processor->inStock = $request->input('inStock');
        $processor->p_image1 = $fileNameToStore1;
        $processor->p_image2 = $fileNameToStore2;
        $processor->p_image3 = $fileNameToStore3;
        
        $processor->save();
        return redirect('/admin/dashboard')->with('success', 'Data saved');
        }elseif($request->input('serialNo') == 'motherboards'){
            $this->validate($request,[
                'title' => 'required',
                'description' => 'required',
                'modelNo' => 'required',
                'category' => 'required',
                'productName' => 'required',
                'graphicCard' => 'required',
                'price' => 'required',
                'hdmi2Ports' => 'required',
                'formFactor' => 'required',
                'itemWeight' => 'required',
                'processorSocket' => 'required',
                'memoryType' => 'required',     
                'memoryTechnology' => 'required',
                'wattage' => 'required',
                'lithiumBattery' => 'required',
                'nolithiumCells' => 'required',
                'wireless' => 'required',
                'categoryId' => 'required',
                'mobo_image1' => 'image|max:1999',
                'mobo_image2' => 'image|nullable|max:1999',
                'mobo_image3' => 'image|nullable|max:1999',
    
    
            ]);
            
            //  Handle file upload
    
            

            if($request->hasFile('mobo_image1')){
                // Get File Name with Extension
                $fileNamewithExtension = $request->file('mobo_image1')->getClientOriginalName();
                // Get just File name
                $file = pathinfo($fileNamewithExtension, PATHINFO_FILENAME);
                // Get just extension
                $extension = $request->file('mobo_image1')->getClientOriginalExtension();
                // File Name to store 
                $fileNameToStore1 = $file.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('mobo_image1')->storeAs('public/processor_images', $fileNameToStore1);
    
            }else{
                $fileNameToStore1 = "noimagetostore.jpg"; 
            }
            if($request->hasFile('mobo_image2')){
                // Get File Name with Extension
                $fileNamewithExtension = $request->file('mobo_image2')->getClientOriginalName();
                // Get just File name
                $file = pathinfo($fileNamewithExtension, PATHINFO_FILENAME);
                // Get just extension
                $extension = $request->file('mobo_image2')->getClientOriginalExtension();
                // File Name to store 
                $fileNameToStore2 = $file.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('mobo_image2')->storeAs('public/processor_images', $fileNameToStore2);
    
            }else{
                $fileNameToStore2 = "noimagetostore.jpg"; 
            }
            if($request->hasFile('mobo_image3')){
                // Get File Name with Extension
                $fileNamewithExtension = $request->file('mobo_image3')->getClientOriginalName();
                // Get just File name
                $file = pathinfo($fileNamewithExtension, PATHINFO_FILENAME);
                // Get just extension
                $extension = $request->file('mobo_image3')->getClientOriginalExtension();
                // File Name to store 
                $fileNameToStore3 = $file.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('mobo_image3')->storeAs('public/processor_images', $fileNameToStore3);
    
            }else{
                $fileNameToStore3 = "noimagetostore.jpg"; 
            }
            $processor = new motherboards();  
            $processor->modelNo = $request->input('modelNo');
            $processor->title = $request->input('title');
            $processor->description = $request->input('description');
            $processor->brand = $request->input('category');
            $processor->cost = $request->input('price');
            $processor->productName = $request->input('productName');
            $processor->graphicCard = $request->input('graphicCard');
            $processor->formFactor = $request->input('formFactor');
            $processor->itemweight = $request->input('itemWeight');
            $processor->hdmiPorts = $request->input('hdmi2Ports');
            $processor->usb2Ports = $request->input('hdmi2Ports');
            $processor->processorType = $request->input('productName');
            $processor->memoryType = $request->input('memoryType');
            $processor->processorSocket = $request->input('processorSocket');
            $processor->memoryTechnology = $request->input('memoryTechnology');
            $processor->wattage = $request->input('wattage');
            $processor->lithiumBatteryEnerge = $request->input('nolithiumCells');
            $processor->nolithiumCells = $request->input('nolithiumCells');
            $processor->wirelessType = $request->input('wireless');           
            $processor->categoryId = $request->input('categoryId');
            $processor->inStock = $request->input('inStock');
            $processor->includedComponents = $request->input('compatibility');
            
            $processor->p_image1 = $fileNameToStore1;
            $processor->moboImage2 = $fileNameToStore2;
            $processor->moboImage3 = $fileNameToStore3;
            
            $processor->save();
            return redirect('/admin/dashboard')->with('success', 'Data saved');
        }else{

        }
        
        // return($request);
        
        // return('Store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($categoryId,$modelNo)
    {
        $producttype = DB::table('productCategory')->get()->where('categoryId','=',$categoryId)->pluck('categoryName');
        // return($id);
        $products = DB::table($producttype[0])->get()->where('modelNo','=',$modelNo);
        return view('admin.viewProduct')->with('viewproduct',($products))->with('model', $modelNo)->with('categoryId',$categoryId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($categoryId,$modelNo)
    {
        $producttype = DB::table('productCategory')->get()->where('categoryId','=',$categoryId)->pluck('categoryName');
        // return($id);
        $products = DB::table($producttype[0])->get()->where('modelNo','=',$modelNo);

        // return($products);
        return view('admin.editProduct')->with('editproduct',($products));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
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
            'categoryId' => 'required'
        ]);

        $title = $request->input('title');
        $description = $request->input('description');
        $modelNo = $request->input('modelNo');
        $category = $request->input('category');
        $productName = $request->input('productName');
        $price = $request->input('price');
        $generation = $request->input('generation');
        $cores = $request->input('cores');
        $threads = $request->input('threads');
        $baseSpeed = $request->input('baseSpeed');
        $turboSpeed = $request->input('turboSpeed');
        $cache = $request->input('cache');
        $compatibility = $request->input('compatibility');
        $categoryId = $request->input('categoryId');

        $result = DB::table('processors')->where('modelNo',$modelNo)->update(['title' => $title, 'description' => $description, 'modelNo'=>$modelNo, 'categoryId'=>$category,'productName'=>$productName,'cost'=>$price,'generation'=>$generation,'cores'=>$cores, 'threads'=>$threads, 'baseSpeed'=>$baseSpeed, 'cache'=>$cache,'turboSpeed'=>$turboSpeed,'compatibility'=>$compatibility,'categoryId'=>$categoryId   ]);
        // return($result);
        if($result){
            return redirect('/admin/dashboard')->with('success', 'Product details updated');
        }else{
            return redirect('/admin/dashboard')->with('success', 'Product details updated');
        }

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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $result = DB::table('productCategory')->get(['categoryName']);
        // return($result);
        if(Auth::user()){
            if(Auth::user()->email == '2017.anshul.chaudhary@ves.ac.in'){
                return view('admin.adminDashboard')->with('products', $result);
            }else{
                return redirect('/');    
            }    
        }else{
            return redirect('/');
        }
    }


    /**
     * 
     * Redirect to the admin page to delete old and obsolute products
     * @return \Illuminate\Http\Response
     */
    public function deleteproduct($categoryId, $modelNo)
    {
        $producttype = DB::table('productCategory')->get()->where('categoryId','=',$categoryId)->pluck('categoryName');
        $result = DB::table($producttype[0])->where('modelNo', '=', $modelNo )->delete();
            if($result){
                return redirect('/admin/dashboard')->with('success','Record has been deleted');
            }else{
                return redirect('/admin/dashboard')->with('error','Record has not been deleted');
            }
        
    }


    /**
     * 
     * Redirect to the admin page to delete old and obsolute products
     * @return \Illuminate\Http\Response
     */
    public function addproduct($id)
    {
        
        return view('admin.addProducts')->with('productType', $id);
    }


    /**
     * 
     * Redirect to the admin page to delete old and obsolute products
     * @return \Illuminate\Http\Response
     */
    public function addoffers(Request $request,$categoryId, $modelNo)
    {
        
        $producttype = DB::table('productCategory')->get()->where('categoryId','=',$categoryId)->pluck('categoryName');
        $update = DB::table($producttype[0])->where('modelNo','=',$modelNo)->update(['offer'=>$request->input('offers')]);
        return redirect('/admin/dashboard');
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
            $pro = processors::where('serialno', '=', $request->input('serialNo'))->get();
            // return($pro[0]);
            if($pro[0]->p_image1 != 'noimagetostore.jpg'){
                // deleting img1
                Storage::delete('public/processor_images/'.$pro[0]->p_image1);
            }
            if($pro[0]->p_image2 != 'noimagetostore.jpg'){
                // deleting img1
                Storage::delete('public/processor_images/'.$pro[0]->p_image2);
            }
            if($pro[0]->p_image3 != 'noimagetostore.jpg'){
                // deleting img1
                Storage::delete('public/processor_images/'.$pro[0]->p_image3);
            }
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
