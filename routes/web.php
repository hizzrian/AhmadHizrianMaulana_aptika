<?php

use App\Http\Controllers\ProductsControler;
use App\Models\Products;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function(){
    return View('about', [
        "title" => "About Us",
        "content" => "This is the about page",
        "vision" => "To be the best",
        "mission" => "To be the best",
        "address" => "123 Main Street"
    ]);
});

Route::get('/contact', function(){
    return View('contact', [
        "title" => "Contact Us",
    ]);
});



//get all products
Route::get('/products', [ProductsControler::class, 'index']);
//halaman single product
Route::get('/products/{slug}', [ProductsControler::class, 'getOneProduct']);