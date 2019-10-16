<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
class CompareController extends Controller
{
    public function processorCompare()
    {
        // $roles = Roles::all();
        // $selectedRole = User::first()->role_id;

        // return view('comparePage.processorCompare', compact('roles', 'selectedRole');
        $modelNo = DB::select('select productName from processor group by modelNo');
        return view('comparePage.processorCompare');
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
