<?php
//User Controller Start
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\registerController;
use App\Http\Controllers\User\HomeController;
//User Controller End

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

Route::get('/',[HomeController::class,'index'])->name('user.home');
Route::get('/login',[LoginController::class,'index'])->name('user.login');
Route::get('/register',[registerController::class,'index'])->name('user.register');