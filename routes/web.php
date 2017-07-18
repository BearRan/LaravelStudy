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

//Route::get('/about', function () {
////    return 'I an Bear!';
//    return view('sites.about');
//});

Route::get('/1', function () {
    return '122';
});

Route::get('/', 'SiteController@index');
Route::get('/about', 'SiteController@about');
Route::group(['prefix' => '/v11'], function(){
    return '123';
});