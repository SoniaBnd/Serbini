<?php

use Illuminate\Support\Facades\Route;
use WooCommerce;

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

/*Route::get('/products', function () {
    return view('products');
});*/

//Route::view('/products', 'products');

Route::get('/products', function(){

    $products = WooCommerce::all('products');
    //$products = Product::where('status','publish')->get(); 
    //$products = Product::where(['status' => 'publish']); 
    return $products;

    /*return view('products.list', [
        'data' => $products
    ]);*/

});

/*Route::get('/products/{id}', function($myId){

    $product = WooCommerce::find('products/'.$myId);

    return view('products.show', [
        'data' => $product
    ]);

}); */

Route::get('/products/{id}', 'ProductController@product')->name('product');

//Route::get('/products/{post}', function () {})->name('post.show');

Route::get('/products2', function(){

    $products = WooCommerce::all('products');

    return view('products.list', [
        'data' => $products
    ]);
});
