<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('pages.welcome'))->name('welcome');
