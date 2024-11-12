<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get('/home', [CrudController::class, 'home']);
Route::get('/clientes', [CrudController::class, 'clientes']);
Route::post('/guardar-clientes', [CrudController::class, 'guardarCL']);
Route::get('/editCL/{id}', [CrudController::class, 'editarCL']);
Route::put('/updateCL/{id}', [CrudController::class, 'updateCL']);
Route::get('/empleados', [CrudController::class, 'empleados']);
