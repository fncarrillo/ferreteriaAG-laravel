<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use \App\Http\Controllers\PedidoController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('inicio', function (){
    return view('inicio');
});

Route::resource('login', \App\Http\Controllers\LoginController::class)->only(['index', 'store', 'destroy']);
Route::resource('signin', \App\Http\Controllers\SigninController::class)->only(['index', 'store']);
Route::resource('perfil',\App\Http\Controllers\PerfilController::class)->except(['create', 'store', 'destroy'])->middleware('auth');
Route::resource('contact', \App\Http\Controllers\ContactController::class)->only(['index','store']);
Route::resource('catalogue', \App\Http\Controllers\CatalogueController::class)->only(['index','show']);

Route::post('/pedido',[PedidoController::class, 'pedido'])->name('pedido.store');

Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.store')->middleware('auth');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update')->middleware('auth');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove')->middleware('auth');
Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear')->middleware('auth');
