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



// route::get('','');

// landig page
route::get('/','NavigationController@index');

// navbar controller
route::get('/Category','NavigationController@category');
route::get('/Brands','NavigationController@brand');
route::get('/Prebuilt','NavigationController@preBuilt');
route::get('/Custombuilt','NavigationController@customBuilt');
route::get('/Monitor','NavigationController@monitor');
route::get('/Accessories','NavigationController@accessories');
route::get('/Compare','NavigationController@compare');
route::get('/Offers','NavigationController@offers');
route::get('/cart','NavigationController@cart');
route::get('/wishlist','NavigationController@wishlist');


// profile page
Route::get('/profile', "ProfileController@index" );
Route::post('/profile/store', "ProfileController@store" );


Route::group(['prefix' => 'admin'],function(){
    route::get('/products/{id}', 'AdminController@index');
    route::get('/dashboard', 'AdminController@dashboard');
    route::get('/deleteProduct/{id}', 'AdminController@deleteproduct');
    route::post('/updateProduct', 'AdminController@update');
    route::get('/addProducts', 'AdminController@addproduct');
    route::get('/editProduct/{id}', 'AdminController@edit');
    route::post('/store', 'AdminController@store');
    route::post('/showProducts', 'AdminController@showProducts');
    route::get('/addOffers', 'AdminController@addoffers');
    route::get('/show/{id}','AdminController@show');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//compare page route
route::get('/Compare/processorCompare','CompareController@processorCompare');
route::get('/Compare/motherboardCompare','CompareController@motherboardCompare');
route::get('/Compare/graphicCompare','CompareController@graphicCompare');
route::get('/Compare/ramCompare','CompareController@ramCompare');
route::get('/Compare/powersupplyCompare','CompareController@powersupplyCompare');
route::get('/Compare/storageCompare','CompareController@storageCompare');
route::get('/Compare/cabinateCompare','CompareController@cabinateCompare');

route::get('/Payment','PaymentController@payment');


route::group(['prefix' => 'product' ],function(){
    route::get('/{id}', 'CategoryController@show');
});
