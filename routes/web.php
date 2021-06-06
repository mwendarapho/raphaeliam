<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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
    //return view('welcome');
//});

//Auth::routes();



Route::get('/', function () {
    return view('contact-us');
});





Route::post('mail',[HomeController::class,'mail'])->name('mail');

//Route::get('about', [HomeController::class,'about'])->name('about-us');

Route::get('contact',[HomeController::class,'contact'])->name('contact');

//Route::get('services',[HomeController::class,'services'])->name('services');

Route::middleware(['auth'])->group(function(){
    //Route::get('/home', [HomeController::class,'index'])->name('home');
   

});