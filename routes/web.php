<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('frontend.index');
})->name('frontend.index');

Route::get('/ads', function () {
    return view('frontend.all-project');
})->name('frontend.all-project');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('frontend.contact');

Route::get('/tolet', function () {
    return view('frontend.tolet');
})->name('frontend.tolet');

Route::get('/sells', function () {
    return view('frontend.sells');
})->name('frontend.sells');

Route::get('/ads-details', function () {
    return view('frontend.project-details');
})->name('frontend.project-details');





Route::get('/invoice', function () {
    return view('backend.invoices-detail');
});

Route::get('/invoice/list', function () {
    return view('backend.invoices-list');
});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/index', function () {
        return view('index');
    })->name('index');

});

