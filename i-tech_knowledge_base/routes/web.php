<?php

use Illuminate\Support\Facades\Route;

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

// Login page route 
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Home Routes
Route::get('/dashboard/home', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('/dashboard/home');
Route::get('/dashboard/home/alphabank', [App\Http\Controllers\AlphaController::class, 'alphabank'])->name('/dashboard/home/alphabank');
Route::get('/dashboard/home/alphaweb', [App\Http\Controllers\AlphaController::class, 'alphaweb'])->name('/dashboard/home/alphaweb');
Route::get('/dashboard/home/alphareporting', [App\Http\Controllers\AlphaController::class, 'alphareporting'])->name('/dashboard/home/alphareporting');
Route::get('/dashboard/home/alphamobile', [App\Http\Controllers\AlphaController::class, 'alphamobile'])->name('/dashboard/home/alphamobile');
Route::get('/dashboard/home/alphaicollect', [App\Http\Controllers\AlphaController::class, 'alphaicollect'])->name('/dashboard/home/alphaicollect');
Route::get('/dashboard/home/alphaxpress', [App\Http\Controllers\AlphaController::class, 'alphaxpress'])->name('/dashboard/home/alphaxpress');
Route::get('/dashboard/home/alphaadmin', [App\Http\Controllers\AlphaController::class, 'alphaadmin'])->name('/dashboard/home/admin');
Route::get('/dashboard/home/alphamicrofinance', [App\Http\Controllers\AlphaController::class, 'alphamicrofinance'])->name('/dashboard/home/microfinance');
Route::get('/dashboard/home/virtualalpha', [App\Http\Controllers\AlphaController::class, 'virtualalpha'])->name('/dashboard/home/virtualalpha');
Route::get('/dashboard/home/alphamonetics', [App\Http\Controllers\AlphaController::class, 'alphamonetics'])->name('/dashboard/home/alphamonetics');
Route::get('/dashboard/home/alphasms', [App\Http\Controllers\AlphaController::class, 'alphasms'])->name('/dashboard/home/alphasms');





// Sidenav routes
Route::get('/dashboard/create-post', [App\Http\Controllers\CreatepostController::class, 'create'])->name('/dashboard/create-post');

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });



