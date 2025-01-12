<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,"lang"])->name('lang');
Route::get('/chnge/{lang?}', [HomeController::class,"changeLang"])->name('changeLang');


Route::group(['prefix' => '{locale}'], function () {
    Route::get('/home', action: [HomeController::class,"home"])->name('home');
    Route::get('/cv', [HomeController::class,"cv"])->name('cv');
    Route::get('/about', [HomeController::class,"about"])->name('about');
    Route::get('/service', [HomeController::class,"service"])->name("service");
    Route::get('/branches',[HomeController::class,"branches"])->name("branches");
    Route::get('/branches-input',[HomeController::class,"branchesInput"])->name("branchesInput");
    Route::get('/branches-output',[HomeController::class,"branchesOutput"])->name("branchesOutput");
});