<?php

use Illuminate\Support\Facades\Route;
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
    Route::get('/', function () {
        return view('dashbord/index');
    });
    
});




// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
 
require __DIR__.'/auth.php';


Route::get('/index',[BoutiqueController::class,'index']); 
Route::get('/about',[BoutiqueController::class,'about']); 
Route::get('/blog',[BoutiqueController::class,'blog']); 
Route::get('/contact',[BoutiqueController::class,'contact']); 
Route::get('/product',[BoutiqueController::class,'product']); 
Route::get('/blog-detail',[BoutiqueController::class,'blog_detail']); 
Route::get('/home-02',[BoutiqueController::class,'home_02']); 
Route::get('/home-03',[BoutiqueController::class,'home_03']); 
Route::get('/product-detail',[BoutiqueController::class,'product_detail']); 
Route::get('/shoping-cart',[BoutiqueController::class,'shoping_cart']); 
//FIN MENU NAVBAR
