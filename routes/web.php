<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardProductController;

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
        "title" => "Home",
        'active' => 'home'
    ]);
});

// Route::get('/about', function(){
//     return View('about', [
//         "title" => "About Us",
//         "content" => "This is the about page",
//         "vision" => "To be the best",
//         "mission" => "To be the best",
//         "address" => "123 Main Street"
//     ]);
// });

// Route::get('/contact', function(){
//     return View('contact', [
//         "title" => "Contact Us",
//     ]);
// });



//get all products
Route::get('/products', [ProductController::class, 'index']);
//get all categories
// Route::get('/categories', function(){
//     return View('categories', [
//         "title" => "Product Categories",
//         'active' => 'categories',
//         "categories" => Category::all()
//     ]);
// });
//halaman single product
Route::get('/products/{product:slug}', [ProductController::class, 'getOneProduct']);

//halaman category
Route::get('/categories/{category:slug}', function(Category $category) {
    return View('products', [
        "title" => "Product by category:$category->name",
        'active' => 'categories',
        "products" => $category->products->load('user', 'category')
    ]);
});

Route::get('/authors/{user:username}', function(User $user) {
    return View('products', [
        "title" => "User Products: $user->name",
        "products" => $user->products->load('category', 'user'),
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return View('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/products/checkSlug', [DashboardProductController::class, 'checkSlug']);
Route::resource('/dashboard/products', DashboardProductController::class)->middleware('auth');

