<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MealCategoryController;
use App\Http\Controllers\MealChoicesController;
use App\Http\Controllers\MealOptionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');


Route::resource('login', LoginController::class);
Route::resource('register', RegisterController::class);
Route::resource('student', StudentController::class);
Route::resource('admin', AdminController::class);
Route::resource('meal_category', MealCategoryController::class);
Route::resource('meal_choices', MealChoicesController::class);
Route::resource('meal_option', MealOptionController::class);

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
