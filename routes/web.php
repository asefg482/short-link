<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', "App\Http\Controllers\HomeController@index")->name('index');
Route::post('/', "App\Http\Controllers\HomeController@store")->name('set');

Route::get('/api', function () {
    return 'hi';
})->name('api');

Route::post('/api', function () {
    return 'hi';
})->name('api');

Route::get('/{short}', "App\Http\Controllers\HomeController@redirect")->name('short')->missing(function (Request $request) {
  return redirect()->route('index');
});

// Route::prefix('links')->group(function () {
//   Route::resource('link', LinkController::class)->only('store');
// });


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
