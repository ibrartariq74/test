<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MapController;
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

Auth::routes();


Route::get('/home',function()
{
   
    return view('home');
});

Route::get('/admin',function()
{
   
    return view('admin.dashboard');
})->middleware('can:isAdmin');

Route::prefix('admin')->middleware('can:isAdmin')->group(function () {

Route::resource('user', UserController::class);
Route::resource('roles', RoleController::class);


  
});
Route::resource('location',MapController::class);
Route::get('/map',function()
{
 
    return view('api.index');
});
