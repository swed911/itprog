<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::resource('tasks', 'TasksController');

Route::get('tasks/{task}/delete', 'TasksController@destroy')->name('tasks.destroy');






