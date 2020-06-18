<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'BannerController@index')->name('welcome');
Route::get('/blog', 'BlogController@index')->name('blogindex');
Route::get('/servicos', 'CelularController@index')->name('celularindex');
Route::get('/quem-somos', function(){
    return view('quemsomos');
})->name('quemsomos');
Route::get('/contato', function(){
    return view('contato');
})->name('contato');

Auth::routes();



// ADMIN
Route::get('/home', 'HomeController@index')->name('home');
Route::put('/home', 'BannerController@store')->name('banner');
Route::delete('/home/{banner}', 'BannerController@destroy')->name('delete');

// ADMIN->BLOG
Route::get('/blog/postar', 'BlogController@create')->name('blogcreate');
Route::put('/blog/postar', 'BlogController@store')->name('blogstore');
Route::get('/blog/postar/{blog}', 'BlogController@edit')->name('blogedit');
Route::put('/blog/postar/{blog}', 'BlogController@update')->name('blogupdate');
Route::delete('/blog/postar/{blog}', 'BlogController@destroy')->name('blogdelete');

// ADMIN->CELULARES

Route::get('/servicos/create', 'CelularController@create')->name('celularcreate');
Route::put('/servicos/create', 'CelularController@store')->name('celularstore');
Route::get('/servicos/create/{celular}', 'CelularController@edit')->name('celularedit');
Route::put('/servicos/create/{celular}', 'CelularController@update')->name('celularupdate');
Route::delete('/servicos/create/{celular}', 'CelularController@destroy')->name('celulardelete');
