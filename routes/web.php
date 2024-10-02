<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/for-{company:slug}', function (\App\Models\Company $company) {
    return view('welcome', ['company' => $company]);
});

Route::get('/who-am-i', function () {
    return view('who-am-i');
})->name('who-am-i');
