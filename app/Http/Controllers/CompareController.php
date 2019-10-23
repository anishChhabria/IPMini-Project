<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\DB;

class CompareController extends Controller
{
    public function processorCompare()
    {
        // $roles = Roles::all();
        // $selectedRole = User::first()->role_id;

        // return view('comparePage.processorCompare', compact('roles', 'selectedRole');
        // $productName = DB::select('select productName from processors group by modelNo');

        // $productName = DB::table('processors')->get(['modelNo','productName'])->groupBy('modelNo');
        // $tempvar = array();
        // // return $productName;
        // foreach ($productName as $valu => $temp){
        //     $tempvar[] = $temp[0];
        // }

        $productName = DB::table('processors')->get(['productName']);
        $tempvar = array();
        // return $productName;
        foreach ($productName as $valu => $temp){
            $tempvar[] = $temp;
        }
        // return($tempvar);
        return view('comparePage.processorCompare')->with('processors', $tempvar);
    }
    public function motherboardCompare()
    {
        return view('comparePage.motherboardCompare');
    }
    public function graphicCompare()
    {
        return view('comparePage.graphicCompare');
    }
    public function ramCompare()
    {
        return view('comparePage.ramCompare');
    }
    public function storageCompare()
    {
        return view('comparePage.storageCompare');
    }
    public function powersupplyCompare()
    {
        return view('comparePage.powersupplyCompare');
    }
    public function cabinateCompare()
    {
        return view('comparePage.cabinateCompare');
    }

}
