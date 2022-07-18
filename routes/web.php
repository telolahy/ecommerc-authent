<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BoutiqueController;

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
    Route::get('/dashboard', function () {
        return view('dashboard/index');
    })->name('/dashboard');
    Route::get('/widget', function () {
        return view('dashboard/widget');
    })->name('/widget');
    Route::get('/button', function () {
        return view('dashboard/button');
    })->name('/button');
    Route::get('/typography', function () {
        return view('dashboard/typography');
    })->name('/typography');
    Route::get('/element', function () {
        return view('dashboard/element');
    })->name('/element');
    Route::get('/form', function () {
        return view('dashboard/form');
    })->name('/form');
    Route::get('/table', function () {
        return view('dashboard/table');
    })->name('/table');
    Route::get('/chart', function () {
        return view('dashboard/chart');
    })->name('/chart');

    Route::get('/signin', function () {
        return view('dashboard/signin');
    })->name('/signin');
    Route::get('/signup', function () {
        return view('dashboard/signup');
    })->name('/signup');
    Route::get('/404', function () {
        return view('dashboard/404');
    })->name('/404');
    Route::get('/blank', function () {
        return view('dashboard/blank');
    })->name('/blank');
    Route::resource('/article',ArticleController::class); 
});




Route::get('/', function () {
   return view('welcome');
 });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
 
require __DIR__.'/auth.php';


Route::get('/index',[BoutiqueController::class,'index']); 
Route::get('/about',[BoutiqueController::class,'about']); 
Route::get('/blog',[BoutiqueController::class,'blog']); 
Route::get('/contact',[BoutiqueController::class,'contact']); 
Route::get('/product',[BoutiqueController::class,'product'])->name('/product'); 
Route::get('/blog-detail',[BoutiqueController::class,'blog_detail']); 
Route::get('/home-02',[BoutiqueController::class,'home_02']); 
Route::get('/home-03',[BoutiqueController::class,'home_03']); 
Route::get('/product-detail',[BoutiqueController::class,'product_detail']); 
Route::get('/shoping-cart',[BoutiqueController::class,'shoping_cart']); 
//FIN MENU NAVBAR

