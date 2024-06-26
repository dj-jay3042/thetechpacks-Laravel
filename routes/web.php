<?php

use App\Http\Controllers\ContactControllers\ContactController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;

Route::get('/connect/submit', [ContactController::class, 'handleContact']);
Route::get('/', function () {
    return view('index');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/case-study', function () {
    return view('cases');
});
Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/connect', function () {
    return view('contact');
});
Route::get('/redirect-301', function () {
    return new RedirectResponse('/', 301);
});
Route::get('/redirect-302', function () {
    return new RedirectResponse('/', 302);
});
