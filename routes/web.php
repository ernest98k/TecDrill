<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/sobre', function () {
    return view('about');
})->name('about');
Route::get('/galeria', function () {
    return view('galery');
})->name('galery');
Route::get('/comentarios', function () {
    return view('comments');
})->name('comments');
Route::get('/opinioes', function () {
    return view('opinion');
})->name('opinion');
Route::post('/opinioes', function () {
    return view('opinion');
})->name('opinion.store');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/serviços', function () {
    return view('service');
})->name('service');
Route::get('/recrutamento', function () {
    return view('recruitment');
})->name('recruitment');
Route::get('/catalogo', function () {
    return view('product');
})->name('product');
Route::get('/boindex', function () {
    return view('boindex');
})->name('boindex');



Route::get('/opinion/add.blade', function () {
    return view('opinion');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::post('/users/{user}/send_reactivate_mail',
        "UserController@send_reactivate_email")->name('users.sendActivationEmail');
    Route::resource('users', 'UserController');
    Route::resource('faqs', 'FaqController');
    Route::resource('galerys', 'GaleryController');
    Route::resource('opinion', 'OpinionController');
    Route::resource('products', 'ProductController');
    Route::resource('services', 'ServiceController');
});


Route::get('/admin', 'HomeController@index')->name('admin');

Auth::routes(['register' => false, 'verify' => true]);
