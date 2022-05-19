<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
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
    return phpinfo();
});

Route::get('/', [HomeController::class, 'show']);

Route::get('/news', [NewsController::class, 'index'])
    ->name('news');

Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', AdminController::class)
        ->name('index');
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
});

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
