<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
//post

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/liste/utilisateurs', [PostController::class, 'listusers'])->name('listUsers');
Route::get('/post/new', [PostController::class,'create'])->name('post.new');
Route::put('/post/update/{post}', [PostController::class,'update'])->name('post.update');
Route::get('/post/edit/{post}', [PostController::class,'edit'])->name('post.edit');
Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
Route::get('post/supprime/{post}', [PostController::class, 'destroy'])->name('post.delete');
Route::get('/search', [PostController::class, 'search'])->name('post.search');

//user

Route::get('/post/new/user', [HomeController::class,'create'])->name('postUser.index');

