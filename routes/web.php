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

Route::post('/opinioes', 'OpinionController@store')->name('opinion.store');

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



Route::get('/opinioes','OpinionController@opinions')->name('gm.opinions');
Route::get('/faq','FaqController@faqs')->name('gm.faqs');
Route::post('/recrutamento','RecruitmentController@store');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::post('/users/{user}/send_reactivate_mail',
        "UserController@send_reactivate_email")->name('users.sendActivationEmail');
    Route::resource('users', 'UserController');
    Route::resource('galerys', 'GaleryController');
    Route::resource('products', 'ProductController');
    Route::resource('services', 'ServiceController');
    Route::resource('recruitments', 'RecruitmentController');
});

Route::resource('opinion', 'OpinionController');
Route::resource('faqs', 'FaqController');

Route::get('/admin', 'HomeController@index')->name('admin');

Auth::routes(['register' => false, 'verify' => true]);
