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
});


//old-version
//Route::resource('books','BookController');

//new-version resource route
Route::resource('books', BookController::class);

//Route::get("/companies",[CompanyController::class,"index"])->name("companies.index");

// Route::get('/books',[BookController::class, 'index']);

// Route::get('books/create',[BookController::class, 'create']);

// Route::post('books',[BookController::class, 'store']);

// Route::get('books/{blog}/edit', [BookController::class, 'edit']);

// Route::put('books/{blog}', [BookController::class, 'update']);

// Route::get('books/{blog}', [BookController::class, 'show']);

// Route::delete('books/{blog}', [BookController::class, 'destroy']);
