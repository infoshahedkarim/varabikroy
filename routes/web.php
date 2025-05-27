<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VaraController;




Route::get('/' ,[VaraController::class, 'homePage'])->name('frontend.index');
Route::get('/ads' ,[VaraController::class, 'all_ads'])->name('frontend.all-project');
Route::get('/tolet' ,[VaraController::class, 'to_let'])->name('frontend.tolet');
Route::get('/sells' ,[VaraController::class, 'sell_s'])->name('frontend.sells');

Route::get('/contact',[VaraController::class, 'contact'])->name('frontend.contact');
Route::get('/ads-by-place/{id}', [VaraController::class, 'adsByPlace'])->name('ads.by.place');
Route::get('/ads-by-category/{id}', [VaraController::class, 'adsByCategory'])->name('ads.by.category');
Route::get('/Ads/{slug}', [VaraController::class, 'ads_details'])->name('frontend.project-details');










Route::get('/invoice', function () {
    return view('backend.invoices-detail');
});

Route::get('/invoice/list', function () {
    return view('backend.invoices-list');
});

Route::get('/icon', function () {
    return view('backend.icons-evaicons');
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

Route::get('/user', [AdminController::class, 'index']);
Route::get('/admin', [AdminController::class, 'admin'])->name('back.index')->middleware(['auth','admin']);

Route::get('/check-slug/{slug}', [VaraController::class, 'checkSlug']);
Route::get('/slug-check/{slug}', [VaraController::class, 'slugCheck']);
Route::get('/ad-slug-check/{slug}', [VaraController::class, 'adSlugCheck']);


Route::get('/add-category',[VaraController::class, 'c_create'])->name('back.ccreate');
Route::post('/page-category',[VaraController::class, 'c_store'])->name('back.cstore');
Route::get('/show-category',[VaraController::class, 'c_show'])->name('back.cshow');
Route::get('/category/{slug}/edit', [VaraController::class,'c_edit'])->name('category.edit');
Route::put('/category/{slug}/update', [VaraController::class,'c_update'])->name('category.update');
Route::delete('/category/{category}/delete', [VaraController::class,'c_delete'])->name('category.delete');


Route::get('/add-place',[VaraController::class, 'p_create'])->name('back.pcreate');
Route::post('/page-place',[VaraController::class, 'p_store'])->name('back.pstore');
Route::get('/show-place',[VaraController::class, 'p_show'])->name('back.pshow');
Route::get('/place/{slug}/edit', [VaraController::class,'p_edit'])->name('place.edit');
Route::put('/place/{slug}/update', [VaraController::class,'p_update'])->name('place.update');
Route::delete('/place/{place}/delete', [VaraController::class,'p_delete'])->name('place.delete');


Route::get('/add-ad',[VaraController::class, 'create'])->name('back.create');
Route::post('/page-ad',[VaraController::class, 'store'])->name('back.store');
Route::get('/show-ad',[VaraController::class, 'show'])->name('back.show');
Route::get('/ad/{slug}/edit', [VaraController::class,'edit'])->name('ad.edit');
Route::put('/ad/{slug}/update', [VaraController::class,'update'])->name('ad.update');
Route::delete('/ad/{ad}/delete', [VaraController::class,'delete'])->name('ad.delete');
Route::patch('/ads/{id}/toggle-premium', [VaraController::class, 'togglePremium'])->name('ads.togglePremium');
Route::delete('/ads/image/{id}', [VaraController::class, 'deleteImage'])->name('ads.deleteImage');



Route::post('/send-mail',[VaraController::class, 'getmsg'])->name('email.store');
Route::get('/messages', [VaraController::class, 'indexMessages'])->name('contact.messages');
Route::delete('/messages/{id}', [VaraController::class, 'deleteMessage'])->name('contact.delete');



