<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RoutesuarioviceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('/users', UsuarioController::class);
Route::get('/usuarios', 'UsuarioController@index');
