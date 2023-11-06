<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/hello', function () {
//     return view('hello');
// });
// Route::get('', [HomeController::class, 'home']);
Route::middleware('auth')->get('home', [HomeController::class,'home'])->name('home');
// Route::get('home', [HomeController::class, 'home']);
Route::get('hello', [HomeController::class, 'index']);
Route::get('contact', [HomeController::class, 'contact']);
// Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('register', [HomeController::class, 'register'])->name('register');
Route::post('register', [HomeController::class, 'storeUser']);

