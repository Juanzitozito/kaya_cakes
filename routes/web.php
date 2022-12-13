<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SaboresController;
use App\Http\Controllers\EntregasController;
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
    return view('home');
});

Route::get('/login', [UsuarioController::class, 'redirectlogin']);
Route::post('/login/send', [UsuarioController::class, 'login']);
Route::get('/logout' , [UsuarioController::class, 'logout']);
Route::get('/usuarios/show/{id}', [UsuarioController::class, 'show'])->where('id', '[0-9]+');
Route::get('/usuarios/create', [UsuarioController::class, 'create']);
Route::post('/usuarios/store', [UsuarioController::class, 'store']);
Route::get('/usuarios/edit/{id}', [UsuarioController::class, 'edit'])->where('id', '[0-9]+');
Route::post('/usuarios/update', [UsuarioController::class, 'update']);
Route::get('/usuarios/destroy/{id}', [UsuarioController::class, 'destroy'])->where('id', '[0-9]+');

Route::get('/sabores', [SaboresController::class, 'index']);
Route::get('/sabores/show/{id}', [SaboresController::class, 'show'])->where('id', '[0-9]+');
Route::get('/sabores/create', [SaboresController::class, 'create']);
Route::post('/sabores/store', [SaboresController::class, 'store']);
Route::get('/sabores/edit/{id}', [SaboresController::class, 'edit'])->where('id', '[0-9]+');
Route::post('/sabores/update', [SaboresController::class, 'update']);
Route::get('/sabores/destroy/{id}', [SaboresController::class, 'destroy'])->where('id', '[0-9]+');
Route::get('/sabores/addcarrinho/{id}', [SaboresController::class, 'addcarrinho'])->where('id', '[0-9]+');


Route::get('/entregas', [EntregasController::class, 'index']);
/* Route::get('/entregas/show/{id}', [EntregasController::class, 'show'])->where('id', '[0-9]+'); */
Route::get('/entregas/create', [EntregasController::class, 'create']);
Route::post('/entregas/store', [EntregasController::class, 'store']);
Route::get('/entregas/edit/{id}', [EntregasController::class, 'edit'])->where('id', '[0-9]+');
Route::post('/entregas/update', [EntregasController::class, 'update']);
Route::get('/entregas/destroy/{id}', [EntregasController::class, 'destroy'])->where('id', '[0-9]+');


Route::get('/cart', [CartController::class, 'cartList']);
Route::get('/addcart/{id}', [CartController::class, 'addToCart']);
Route::post('/remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
