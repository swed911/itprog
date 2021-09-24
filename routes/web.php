<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

/*Route::get('tasks/create', "\App\Http\Controllers\TasksController@create")->name('create');

Route::get('tasks', "TasksController@index")->name('tasks');

Route::get('tasks/{id}', "TasksController@oneTask")->name('one-task');

Route::post('tasks/store', "TasksController@store")->name('store');*/

Route::resource('tasks', 'TasksController');






