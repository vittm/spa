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
    return view('welcome');
});

Route::get('/posts/{title}', 'PostController@index');
Route::get('/get-customer-{name}-{email}-{phone}-{utm_source}-{utm_medium}-{utm_campaign}', 'WidgetController@index');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/tin-tuc', function () {
    return view('news');
});
Route::get('/gioi-thieu', function () {
    return view('info');
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
