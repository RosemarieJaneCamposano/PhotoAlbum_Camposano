<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/nature', function () {
    return view('pages.nature');
})->name('nature');
Route::get('/heritage', function () {
    return view('pages.heritage');
})->name('heritage');

Route::get('/delicacies', function () {
    return view('pages.delicacies');
})->name('delicacies');

Route::get('/museums', function () {
    return view('pages.museums');
})->name('museums');

Route::get('/festivals', function () {
    return view('pages.festivals');
})->name('festivals');
