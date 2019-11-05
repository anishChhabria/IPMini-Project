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
route::get('/AboutUs','NavigationController@aboutUs');
route::get('/ContactUs','NavigationController@contactUs');
route::get('/Monitor','NavigationController@monitor');
route::get('/Accessories','NavigationController@accessories');
route::get('/Compare','NavigationController@compare');
route::get('/Offers','NavigationController@offers');
route::get('/cart','NavigationController@cart');
route::get('/wishlist','NavigationController@wishlist');
route::get('/search','NavigationController@search');

// profile page
Route::get('/profile', "ProfileController@index" );
Route::post('/profile/store', "ProfileController@store" );

// admin page
Route::group(['prefix' => 'admin'],function(){
    route::get('/products/{id}', 'AdminController@index');
    route::get('/dashboard', 'AdminController@dashboard');
    route::get('/deleteProduct/{categoryId}/{modelNo}', 'AdminController@deleteproduct');
    route::post('/updateProduct', 'AdminController@update');
    route::get('/addProducts/{id}', 'AdminController@addproduct');
    route::get('/editProduct/{categoryId}/{modelNo}', 'AdminController@edit');
    route::post('/store', 'AdminController@storeproduct');
    route::post('/showProducts', 'AdminController@showProducts');
    route::get('/addOffers/{categoryId}/{modelNo}', 'AdminController@addoffers');
    route::get('/show/{categoryId}/{modelNo}','AdminController@show');
    route::get('/editOffers/{id}','AdminController@addoffers');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//compare page route
route::get('/Compare/productCompare/{categoryId}','CompareController@compare');

route::post('/Compare/productCompare/show/{categoryID}','CompareController@compareproduct');

route::get('/Compare/motherboardCompare/{categoryId}','CompareController@compare');
route::get('/Compare/graphicCompare/{categoryId}','CompareController@compare');
route::get('/Compare/ramCompare/{categoryId}','CompareController@compare');
route::get('/Compare/powersupplyCompare/{categoryId}','CompareController@compare');
route::get('/Compare/storageCompare/{categoryId}','CompareController@compare');
route::get('/Compare/cabinateCompare/{categoryId}','CompareController@compare');

//payment 
route::get('/orderPreview','PaymentController@orderPreview');
route::get('/Payment','PaymentController@payment');
route::post('/placeOrder','PaymentController@placeOrder');

//category page 
route::group(['prefix' => 'product' ],function(){
    route::get('/{id}', 'CategoryController@show');
});


//display product by category
route::group(['prefix' => 'category/product'],function(){
    route::get('/{categoryId}/{modelNo}','CategoryController@displayProduct');
});

// add/delete/update cart
route::post('/addToCart/{categoryId}/{modelNo}','CartwishlistController@addCart');
route::post('/updateCart/{categoryId}/{modelNo}','CartwishlistController@updateCart');
route::get('/deleteCartItem/{categoryId}/{modelNo}','CartwishlistController@deleteCartItem');
route::get('/moveToWishlist/{categoryId}/{modelNo}','CartwishlistController@moveToWishlist');

// add/delete wishlist
route::get('/addToWishlist/{categoryId}/{modelNo}','CartwishlistController@addWishlist');
route::get('/deleteFromWishlist/{categoryId}/{modelNo}','CartwishlistController@deleteFromWishlist');
route::get('/moveToCart/{categoryId}/{modelNo}','CartwishlistController@moveToCart');

//brand page
route::group(['prefix' => 'brand'],function(){
    route::get('/{brand}/{table}','BrandController@show');
});

//display product by brand
route::group(['prefix' => 'brand'],function(){
    route::get('/{brand}/{table}/{modelNo}','CategoryController@displayProduct');
});


