<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index()
    {
        return view('pages.category');
    }
    public function category()
    {
        return view('pages.category');
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
