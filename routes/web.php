<?php
use Illuminate\Support\Facades\Route;


Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/Admin', function () {
    return view('Admin_Home');
})->name('Admin.home');


Route::get('/datacell_home', function () {
    return view('datacell_Home');
})->name('datacell.home');

Route::get('/Upload', function () {
    return view('Upload');
})->name('Upload');


Route::get('/forgot_password', function () {
    return view('forgot_password');
})->name('forgot');

Route::get('/courses', function () {
    return view('allcourses');
})->name('courses');
