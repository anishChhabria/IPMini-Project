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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', "DashboardController@index" );

route::get('/','NavigationController@index');
//navbar routes

route::get('/Category','NavigationController@category');
route::get('/Brands','NavigationController@brand');
route::get('/Prebuilt','NavigationController@preBuilt');
route::get('/Custombuilt','NavigationController@customBuilt');
route::get('/Monitor','NavigationController@monitor');
route::get('/Accessories','NavigationController@accessories');
route::get('/Compare','NavigationController@compare');
route::get('/Offers','NavigationController@offers');


// route::get('','');

Route::get('/profile', "ProfileController@index" );
Route::post('/profile/store', "ProfileController@store" );


Route::group(['prefix' => 'admin'],function(){
    route::get('/home', 'AdminController@index');
    route::get('/deleteProduct/{id}', 'AdminController@deleteproduct');
    route::post('/updateProduct', 'AdminController@update');
    route::get('/addProducts', 'AdminController@addproduct');
    route::get('/editProduct/{id}', 'AdminController@edit');
    route::post('/store', 'AdminController@store');
    route::post('/showProducts', 'AdminController@showProducts');
    route::get('/addOffers', 'AdminController@addoffers');
    route::get('/show/{id}','AdminController@show');
});