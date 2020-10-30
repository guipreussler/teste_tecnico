<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorUsuario;
use App\Http\Controllers\ControladorLista;

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
    return view('index');
});

Route::get('/lista', [ControladorLista::class,'index']);
Route::get('/cadastro', [ControladorUsuario::class,'index']);
Route::get('/cadastro/novo', [ControladorUsuario::class,'create']);
Route::post('/cadastro', [ControladorUsuario::class,'store']);
