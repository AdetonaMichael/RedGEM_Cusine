<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
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

// link to the home page
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class,'index']);
Route::get('/adminhome',[HomeController::class, 'redirects'])->name('adminhome');
Route::get('/subscribe',[HomeController::class,'subscribe'])->name('subscribe');

// link to the FAQ page
Route::get('/faq', function(){
    return view('faq');
});

Route::get('/users', function(){
    return("Welcome to php");
});

// creatign a route that sends back an array
Route::get('/ar', function(){
    return ['PHP','HTML','JAVASCRIPT','JAVA'];
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
