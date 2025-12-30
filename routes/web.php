<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));
Route::get('/tasks', fn() => view('tasks'));
Route::get('/level', fn() => view('level'));
Route::get('/earnings', fn() => view('earnings'));
Route::get('/me', fn() => view('me'));

// Authentication Routes
Route::get('/login', fn() => view('login'));
Route::get('/register', fn() => view('register'));

// Financial Sub-Pages
Route::get('/recharge', fn() => view('recharge'));
Route::get('/withdraw', fn() => view('withdraw'));

// Team & Growth Pages
Route::get('/team', fn() => view('team'));
Route::get('/invite', fn() => view('invite'));

// Info Pages
Route::get('/news', fn() => view('news'));
Route::get('/about', fn() => view('about'));

// Settings Sub-Pages
Route::get('/password', fn() => view('password'));
Route::get('/bind-account', fn() => view('bind-account'));

