<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
    return view('auth.login'); 
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('articulos', 'App\Http\Controllers\ArticuloController');
    Route::resource('clientes',    'App\Http\Controllers\ClienteController');
    Route::resource('sucursales', 'App\Http\Controllers\SucursalController');
    Route::resource('sucs', 'App\Http\Controllers\SucController');
    Route::resource('zonas',  'App\Http\Controllers\ZonaController');
    Route::resource('roles',  'App\Http\Controllers\RoleController');
    Route::resource('permissions',  'App\Http\Controllers\PermissionController');
    Route::resource('riesgos',  'App\Http\Controllers\RiesgoController');
    Route::resource('comercios',  'App\Http\Controllers\ComercioController');
    Route::resource('gestores',  'App\Http\Controllers\GestorController');
    Route::resource('users', UserController::class)->names('users');
    
    
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('{any}', function(){
    return view('app');
});