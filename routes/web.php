<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CommentController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/comments/{post_id}', [CommentController::class, 'store']);
Route::get('/destroy/{post_id}', [PostController::class, 'destroy']);


Route::get('user/{name}',['as'=>'user.single', 'uses' => 'App\Http\Controllers\UserController@Single']);
Route::get('user/{name}/posts',['as'=>'user.archieve', 'uses' => 'App\Http\Controllers\UserController@archieve']);



Route::get('user/edit/{name}', [UserController::class, 'edit']);
Route::post('user/update/{name}', [UserController::class, 'update']);
 
Route::get('cat/{name}',['as'=>'categories.index', 'uses' => 'App\Http\Controllers\CategoryController@index']);
Route::get('/create', [CategoryController::class, 'create']);
Route::post('/categories/categories/store', [CategoryController::class, 'store']);
Route::get('categories/index', [CategoryController::class, 'index']);
Route::get('/show/{post}', [CategoryController::class, 'show']);
Route::get('/edit/{post}', [CategoryController::class, 'edit']);
Route::post('categories/update/{post}', [CategoryController::class, 'update']);




Route::get('site/{slug}',['as'=>'pro.single', 'uses' => 'App\Http\Controllers\SiteController@Single'])->where('slug','[\w\d\-\_]+');
Route::get('site',['as'=>'pro.index', 'uses' => 'App\Http\Controllers\SiteController@Archive']);

Route::get('/Shopping-cart',[PostController::class, 'getCart'])->name('post.ShoppingCart');
Route::get('/add-to-cart/{id}',[PostController::class, 'getAddToCart'])->name('post.addToCart');
Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'store']);
Route::get('/index', [PostController::class, 'index']);
Route::get('/show/{post}', [PostController::class, 'show']);
Route::get('/edit/{post}', [PostController::class, 'edit']);
Route::post('/update/{post}', [PostController::class, 'update']);
Route::get('/destroy/{post}', [PostController::class, 'destroy']);


Route::get('/about', [PagesController::class, 'about']);

Route::get('/contact', [PagesController::class, 'contact']);
Route::post('/contact', [PagesController::class, 'postContact']);
Route::get('/index', [PagesController::class, 'index']);

Route::post('/checkin', [CartController::class, 'postCheckout']);
Route::get('/shop', [CartController::class,'shop'])->name('shop');
Route::get('/cart', [CartController::class,'cart'])->name('cart.index');
Route::post('/add', [CartController::class,'add'])->name('cart.store');
Route::post('/update', [CartController::class,'update'])->name('cart.update');
Route::post('/remove', [CartController::class,'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class,'clear'])->name('cart.clear');
Route::get('/checkout', [CartController::class,'checkout']);




Route::get('/', function () {
    return view('auth.login');
});
