<?php

use App\Http\Controllers\CreateController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/createpost', [CreateController::class, 'createTable']) ;

Route::get('/', [\App\Http\Controllers\PostController::class, 'index']) ;

Route::get('/newpost', function () {
    return view('post');
});

//Route::get('/createpost', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
