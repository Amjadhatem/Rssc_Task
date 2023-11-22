<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\displayinfo;
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

// ------------------------------- Paths for href links ---------------------------

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Project', function () {
    return view('userside.Projects');
});
Route::get('/Innovation', function () {
    return view('userside.Innovation');
});
Route::get('/Achievements', function () {
    return view('userside.Achievements');
});
Route::get('/Training', function () {
    return view('userside.Training');
});
Route::get('/News', function () {
    return view('userside.News');
});
Route::get('/Forms', function () {
    return view('userside.Forms');
});
Route::get('/Announcements', function () {
    return view('userside.Announcements');
});
Route::get('/Events', function () {
    return view('userside.Events');
});
Route::get('/Photos', function () {
    return view('userside.Photos');
});
Route::get('/Videos', function () {
    return view('userside.Videos');
});
Route::get('/Support', function () {
    return view('userside.Support');
});
Route::get('/Network', function () {
    return view('userside.Network');
});
Route::get('/President', function () {
    return view('userside.President');
});
Route::get('/AboutUS', function () {
    return view('userside.AboutUS');
});
Route::get('/Objectives', function () {
    return view('userside.Objectives');
});
Route::get('/Director', function () {
    return view('userside.Director');
});
Route::get('/ALECSO_Chair', function () {
    return view('userside.ALECSO_Chair');
});
Route::get('/Contact', function () {
    return view('userside.Contact');
});

// ------------------------------- Paths for href links ---------------------------



Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(TopicController::class)->prefix('Topic')->group(function () {
        Route::get('', 'index')->name('Topic');
        Route::get('create', 'create')->name('Topic.create');
        Route::post('store', 'store')->name('Topic.store');
        Route::get('show/{topic}', 'show')->name('Topic.show');
        Route::get('edit/{topic}', 'edit')->name('Topic.edit');
        Route::put('edit/{topic}', 'update')->name('Topic.update');
        Route::delete('destroy/{topic}', 'destroy')->name('Topic.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

Route::get('/', [displayinfo::class, 'displayda']);
