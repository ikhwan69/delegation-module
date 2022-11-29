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
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'index']);

// Route::get('/', function () {
//     return view('welcome');
// });


//Contoh mengirimkan data dari Route ke view
// Route::get('/modal', function() {
//     return view('modal', [
//         "name" => "Ikhwanul Rahman",
//         "email" => "ikhwanrahman76@gmail.com",
//         "image" => "LOGO XMIST.jpg"
//     ]);
// });
// Route::get('/home', function() {
//     return view('home');
// });
