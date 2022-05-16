<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
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

Route::get('/infophp', function () {
    $inform = phpinfo();
    return $inform;
});

//Приветственная страница
// Route::get('/', function () {
//     return '
//     <div class="title">Приветственная страница новостного портала</div>';
// });

Route::get('/', [HomeController::class, 'show']);

// //Добавление новости
// Route::get('/addnews', function () {
//     return 'Добавление новостей';
// });

// //Новость категория
// Route::get('/catnews', function ($id) {
//     return 'Категории'.$id;
// });

// //Новость категория
// Route::get('/catnews/{id}', function ($id) {
//     return 'Категории'.$id;
// });

// //Конкретная новость
// Route::get('/news/{catid}/{id}', function ($catid, $id) {
//     return 'новость'.$id;
// });


Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'show']);

//admin routes
// Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
// 	Route::get('/', AdminController::class)
// 		->name('index');
// 	Route::resource('/categories', AdminCategoryController::class);
// 	Route::resource('/news', AdminNewsController::class);
// });