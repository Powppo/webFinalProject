<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\updateProfileController;
use App\Http\Controllers\showProfileController;
use App\Http\Controllers\galleriesController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\uploadsController;


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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Edit Profile 
Route::get('edit', [updateProfileController::class, 'edit'])->name('layouts.editProfile');
Route::put('update', [updateProfileController::class, 'update'])->name('layouts.updateProfile');
*/

//My Profile
Route::get('myprofile', [showProfileController::class, 'show'])->name('layouts.showProfile');

//Gallery
Route::get('galleries', [galleriesController::class, 'galleries'])->name('layouts.galleries');

//Upload
Route::get('uploadsPage', [uploadsController::class, 'index'])->name('uploadsPage');
Route::post('uploads', [App\Http\Controllers\uploadsController::class, 'uploads'])->name('uploads');