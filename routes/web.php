<?php

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

Route::middleware(['auth'])->group(function () {
    //
});




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
 
require __DIR__.'/auth.php';



Route::get('/index', function () {
    return view('boutiques.index');
}); 
Route::get('/about', function () {
    return view('boutiques.about');
});
Route::get('/blog-detail', function () {
    return view('boutiques.blog-detail');
});
Route::get('/blog', function () {
    return view('boutiques.blog');
});
Route::get('/contact', function () {
    return view('boutiques.contact');
});
Route::get('/home-02', function () {
    return view('boutiques.home-02');
});
Route::get('/home-03', function () {
    return view('boutiques.home-03');
});
Route::get('/product-detail', function () {
    return view('boutiques.product-detail');
});
Route::get('/product', function () {
    return view('boutiques.product');
});
Route::get('/shoping-cart', function () {
    return view('boutiques.shoping-cart');
});
//FIN MENU NAVBAR
