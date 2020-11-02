<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WelcomePageController;
use App\Http\Controllers\AutarisationController;
use App\Http\Controllers\Admin\AdminNewsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminNewsController::class, 'index'])->name('admin.index');
    Route::get('/create', [AdminNewsController::class, 'create'])->name('admin.create');
});

Route::get('/', [WelcomePageController::class, 'showWelcome'])->name('showWelcome');
Route::get('/autarisation', [AutarisationController::class, 'showAutarisation'])->name('showAutarisation');

Route::get('/categories', [Controller::class, 'showCategories'])->name('categories.showCategories');
Route::get('categories/news', [Controller::class, 'showNews'])->name('news.showNews');
Route::get('categories/news/{id}', [Controller::class, 'showOneNews'])->name('news.ShowOneNews');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
