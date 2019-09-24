<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', "DashboardController@index" );


//navbar routes
route::get('/category','ProductController@category');
route::get('/brand','ProductController@brand');
route::get('/preBuilt','ProductController@preBuilt');
route::get('/custom','ProductController@custom');
route::get('/monitor','ProductController@monitor');
route::get('/accessories','ProductController@accessories');
route::get('/compare','ProductController@compare');
route::get('/offers','ProductController@offers');
route::get('/wishlist','ProductController@wishlist');
route::get('/cart','ProductController@cart');


// route::get('','');
