<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PublishersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DetailsController;

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

Route::get('/', [BooksController::class, 'index'])->name('home');
Route::get('/detailbook/{id}', [BooksController::class, 'detailbook'])->name('detailbook');
Route::get('/publisher', [PublishersController::class, 'index'])->name('publisher');
Route::get('/detailpublisher/{id}', [PublishersController::class, 'detailpublisher'])->name('detailpublisher');
Route::get('/category/{id}', [DetailsController::class, 'getData'])->name('category');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
