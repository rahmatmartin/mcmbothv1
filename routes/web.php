<?php
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/product', function () {
    return view('booth.product');
})->name('product');

Route::get('/simulation', function () {
    return view('booth.simulation');
})->name('simulation');

Route::get('/contact', function () {
    return view('booth.contact');
})->name('contact');

