<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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
Route::get('/about',function () {
    return view('about');
})->name('about');
Route::get('/authors',[
    BookController::class,'Authors'
])->name('authors');
Route::get('/book-list',[
    BookController::class,'BookList'
])->name('books');
Route::get('/contact',function () {
    return view('contact');
})->name('contact');
Route::get('/mybooks',[
    BookController::class,'MyBooks'
])->name('mybooks')->middleware('auth');
Route::get('/book-description/{id}',[
    BookController::class,'BookDescription'
])->name('bookdescription')->middleware('auth');
Route::get('/author-book/{id}',[
    BookController::class,'AuthorBook'
])->name('authorbook');
Auth::routes();
Route::get('/home', [
    App\Http\Controllers\HomeController::class, 'index'
])->name('home');
Route::post('/mybooks/{id}',[
    BookController::class,'Borrow'
])->name('borrow')->middleware('auth');
Route::post('/books/{id}',[
    BookController::class,'Return'
])->name('return')->middleware('auth');
Route::post('/login',[
    App\Http\Controllers\SigninController::class,'signin'
])->name('auth.signin');