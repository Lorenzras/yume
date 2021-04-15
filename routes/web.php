<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

Auth::routes();
Route::get('/shuekibattle', function() {
    return view('shuekibattle/main');
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/nippo/{nippo}/edit', [App\Http\Controllers\NippoController::class, 'edit'])->name('nippo.edit');
Route::put('/nippo/{nippo}/update', [App\Http\Controllers\NippoController::class, 'update'])->name('nippo.update');
Route::get('/nippo/create', [App\Http\Controllers\NippoController::class, 'create'])->name('nippo.create');
Route::post('/nippo/store', [App\Http\Controllers\NippoController::class, 'store'])->name('nippo.store');

Route::get('/nippo/report/{month}', [App\Http\Controllers\NippoReportController::class, 'show'])->name('nippo.report');
Route::get('/nippo/ranking/{month}/{type}', [App\Http\Controllers\NippoRankingController::class, 'show_ranking'])->name('nippo_rankingtype');
Route::get('/nippo/ranking/{month}', [App\Http\Controllers\NippoRankingController::class, 'show'])->name('nippo.ranking');


Route::get('/datatable-example', function(){
    return view('datatable-example');
});
//Route::get('/nippo_sample', [App\Http\Controllers\NippoController::class, 'nippo_sample'])->name('nippo_sample');
