<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/some-page', function () {
    return view('some-page');
})->name('some-page-route');

Route::get('/search', function () {
    return view('search');
})->name('some-page-route');
