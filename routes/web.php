<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example1Controller;
use App\Http\Controllers\Example2Controller;



Route::get('example1a', [Example1Controller::class, 'example1a'])
->name('example1a');

Route::get('example1b', [Example1Controller::class, 'example1b'])
->name('example1b');

Route::get('example2', [Example2Controller::class, 'example2'])
->name('example2');
