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

Route::view('/article{id}', 'article1');
Route::view('/index', 'index');
Route::view('/update', 'update');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/article{id}', [\App\Http\Controllers\LaravelCrud::class, 'showOneArticle']);
Route::get('index', [\App\Http\Controllers\LaravelCrud::class, 'showArticle']);
Route::get('edit/{id}', [\App\Http\Controllers\LaravelCrud::class, 'edit']);
Route::get('delete/{id}', [\App\Http\Controllers\LaravelCrud::class, 'delete']);

Route::post('/article', [\App\Http\Controllers\LaravelCrud::class, 'comment'])->name('comment');
Route::post('update', [\App\Http\Controllers\LaravelCrud::class, 'update'])->name('update');

require __DIR__.'/auth.php';
