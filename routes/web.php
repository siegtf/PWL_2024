<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
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

// Route::get('/welcome', function () {
//    return view('welcome');
// });

Route::get('/home', function () {
    return view('home');
 });

// Route::get('/hello', function () {
//    return 'Hello World';
// });

// Route::get('/world', function () {
//  return 'World';
// });

// Route::get('/welcome', function () {
//    return 'Selamat Datang';
//   });

// Route::get('/hey', function () {
//    return '2341728019';
//   });

// Route::get('/user/{name}', function ($name) {
//    return 'Nama saya '.$name;
//    });
   
// Route::get('/posts/{post}/comments/{comment}', function
// ($postId, $commentId) {
//  return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/articles/{id}', function
// ($idId) {
//  return 'Halaman Artikel dengan ID ke-'.$idId;
// });

## Optional Parameters

// Route::get('/user/{name?}', function ($name=null) {
//    return 'Nama saya '.$name;
//    });

// Route::get('/user/{name?}', function ($name='John') {
//    return 'Nama saya '.$name;
//    });

## Controller

Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/home', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [PageController::class,'articles']);
Route::get('/index', [WelcomeController::class,'home']);
Route::get('/hello', [AboutController::class,'hello']);

// Single Action Controller
Route::get('/index', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/article/{id}', [ArticleController::class,'article']);

// Resource Controller
use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
   Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);