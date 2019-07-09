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

Route::get('/', 'HomeController@index');
//doc route
Route::group(['namespace'=>'Docs'],function (){
    Route::get('doc', 'LaravelDocController@index')->name('doc.index');
    Route::get('doc/html', 'LaravelDocController@html')->name('doc.html');
    Route::get('apidoc', 'LaravelApiDocController@index')->name('doc.apidoc');
    Route::get('apidoc/html', 'LaravelApiDocController@html')->name('doc.apidoc.html');
    Route::post('apidoc/markdown', 'LaravelApiDocController@markdown')->name('doc.apidoc.markdown');
    Route::post('apidoc/save', 'LaravelApiDocController@save')->name('doc.apidoc.save');
});
