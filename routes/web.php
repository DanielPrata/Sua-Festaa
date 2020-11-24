<?php

use Illuminate\Support\Facades\Route;
Use Illuminate\Support\Facades\Auth;

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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::post('/novobuffet', 'App\Http\Controllers\BuffetController@novobuffet')->middleware('auth');

Route::post('/filtrarbuffet', 'App\Http\Controllers\BuffetController@filtrarbuffet')->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/lista', 'App\Http\Controllers\BuffetController@lista')->middleware('auth');

Route::get('/addbuffet', function () {
    return view('addbuffet');
})->middleware('auth');

Route::get('/dashboard', 'App\Http\Controllers\BuffetController@listarBuffets')->middleware('auth');

Route::get('/geradorconvite', function () {
    return view('geradorconvite');
})->middleware('auth');



Route::get('/alugarbuffet/{id}', 'App\Http\Controllers\BuffetController@alugarView')->middleware('auth');





