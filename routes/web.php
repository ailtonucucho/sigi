<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::get('/property/submit', [App\Http\Controllers\HomeController::class, 'submitproperty'])->name('submit.property');

Route::post('/storeproperty', [App\Http\Controllers\PropertyController::class, 'store'])->name('storeproperty');

Route::put('/updateproperty/{id}', [App\Http\Controllers\PropertyController::class, 'update'])->name('updateproperty');

Route::get('/property/{id}/edit', [App\Http\Controllers\PropertyController::class, 'edit'])->name('edit');



Route::get('/about', [App\Http\Controllers\HomePageController::class, 'about'])->name('about');

Route::get('/contact', [App\Http\Controllers\HomePageController::class, 'contact'])->name('contact');

Route::get('/property', [App\Http\Controllers\HomePageController::class, 'property'])->name('property');

Route::get('/property/{id}', [App\Http\Controllers\HomePageController::class, 'propertydetails'])->name('propertydetails');

Route::get('/agent', [App\Http\Controllers\HomePageController::class, 'agent'])->name('agent');

Route::get('/feature', [App\Http\Controllers\HomePageController::class, 'feature'])->name('feature');


Route::delete('/destroyproperty/{id}', [App\Http\Controllers\PropertyController::class, 'destroy'])->name('property.destroy');


Route::get('/admin', [App\Http\Controllers\HomePageController::class, 'admin'])->name('admin');


Route::get('/admin/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('index');

Route::delete('/admin/users/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy');


Route::get('/admin/cities', [App\Http\Controllers\Admin\CityController::class, 'index'])->name('index');
Route::get('/admin/districts', [App\Http\Controllers\Admin\DistrictController::class, 'index'])->name('index');
Route::delete('/admin/users/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy');
