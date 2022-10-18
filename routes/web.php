<?php

use App\Http\Controllers\DogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
    return view('welcome');
});

Route::get('/dog', [DogController::class,'index']);
Route::get('/dog/create', [DogController::class,'create']);

Route::get('/iniciar-sessao', [LoginController::class,'index']);
Route::get('/criar-conta', [LoginController::class,'create']);
Route::post('/criar-conta/criado', [LoginController::class,'store']);

Route::any('/principal',[HomeController::class,'index']);
