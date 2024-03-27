<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/',[PublicController::class,'homepage'])->name('homepage') ;


//PAGINE INGLESI//

Route::get('/homepageinglese', function () {
    return view('homepageinglese');
})->name('homepageinglese');

//PAGINE GIAPPONESI//

Route::get('/homepagegiapponese', function () {
    return view('homepagegiapponese');
})->name('homepagegiapponese');





