<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ApiController;

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
Route::post(
    '/calculate',
    [FormController::class, 'calculate']
)->name('form.calculate');
Route::post(
    '/register',
    [FormController::class, 'register']
)->name('form.register');
Route::post(
    '/qouteRequest',
    [FormController::class, 'quote']
)->name('form.quote');
Route::get(
    '/payment',
    [App\Http\Controllers\FormController::class, 'payment']
)->name('form.payment');
Route::post(
    '/contact',
    [FormController::class, 'contact']
)->name('form.contact');
Route::resource('/', FormController::class);
Route::get(
    '/user',
    [ApiController::class, 'calculation']
);