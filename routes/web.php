<?php

use App\Http\Controllers\admin\AdminController;
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

Auth::routes();

Route::group(['prefix' => 'admin','middleware'=>['admin','auth']],function(){
    Route::get('index',[AdminController::class,'index'])->name('admin.index');
});

Route::group(['prefix' => 'user','middleware' =>['user','auth']],function(){
    Route::get('index',[UserController::class,'index'])->name('user.index');
});


