<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\Guest\BookController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi-siamo', function () {
    return view('subpages.about'); // Commento
});

Route::get('/books', [BookController::class, 'index']);
