<?php

use App\Http\Controllers\Contato;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Encarte;
use App\Http\Controllers\Home;
use App\Http\Controllers\Imoveis;
use App\Http\Controllers\Sobre;
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
Route::get('/', [Home::class,'index']);
Route::get('home', [Home::class,'index']);

Route::get('imoveis', [Imoveis::class,'index']);
Route::get('imoveis/show/{id}', [Imoveis::class,'show']);

Route::get('sobre', [Sobre::class,'index']);
Route::get('contato', [Contato::class,'index']);


Route::get('dashboard', [Dashboard::class,'index']);


Route::get('encarte', [Encarte::class,'index']);
Route::get('encarte/show/{id}', [Encarte::class,'show']);
Route::get('encarte/new', [Encarte::class,'create']);
Route::post('encarte/update/{id}', [Encarte::class,'update']);
Route::post('encarte/store', [Encarte::class,'store']);
Route::get('encarte/delete/{id}', [Encarte::class,'destroy']);


