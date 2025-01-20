<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homepage']);

Route::get('|', [AdminController::class, 'adminhomepage']);

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/logout', [AdminController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/post_project', [AdminController::class, 'post_project']);

Route::post('/add_project', [AdminController::class, 'add_project']);

Route::get('/show_project', [AdminController::class, 'show_project']);

Route::get('/delete_project/{id}', [AdminController::class, 'delete_project']);

Route::get('/edit_project/{id}', [AdminController::class, 'edit_project']);

Route::post('/update_project/{id}', [AdminController::class, 'update_project']);

Route::get('/post_aboutme', [AdminController::class, 'post_aboutme']);

Route::post('/add_aboutme', [AdminController::class, 'add_aboutme']);

Route::get('/show_aboutme', [AdminController::class, 'show_aboutme']);

Route::get('/delete_aboutme/{id}', [AdminController::class, 'delete_aboutme']);

Route::get('/edit_aboutme/{id}', [AdminController::class, 'edit_aboutme']);

Route::post('/update_aboutme/{id}', [AdminController::class, 'update_aboutme']);

Route::get('/homeaboutpage', [HomeController::class, 'homeaboutpage']);

Route::get('/homeprojectspage', [HomeController::class, 'homeprojectspage']);
