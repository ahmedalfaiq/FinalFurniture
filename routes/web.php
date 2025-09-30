<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('lang/{lang}', function ($lang) {
    if (!in_array($lang, ['en', 'ar'])) {
        abort(400);
    }

    session(['locale' => $lang]);
    app()->setLocale($lang);

    return redirect()->back();
})->name('lang.switch');