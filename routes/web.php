<?php

use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
//Роут для информации о системе
Route::get('/infophp', function () {
    return phpinfo();
});

//Роут на главную страницу с выводом всех новостей
Route::get('/', [HomeController::class, 'index'])->name('index');

//Роут на главную страницу с выводом всех новостей
Route::get('/about', function () {
    return view('about.index');
});

Route::get('/admin', [AdminController::class, "index"])->name('index');
