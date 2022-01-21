<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FrontendController, BackendController, BannerController, RelativeCompaniesController};


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
Route::get('/', [FrontendController::class, 'frontpage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('banner', BannerController::class);
Route::resource('relative_companies', RelativeCompaniesController::class);
Route::get('rc/trash', [RelativeCompaniesController::class, 'trash'])->name('rc-trash');
Route::get('rc/restore/{id}', [RelativeCompaniesController::class, 'restore'])->name('rc-restore');
Route::get('rc/force/delete/{id}', [RelativeCompaniesController::class, 'force_delete'])->name('rc-force-delete');
