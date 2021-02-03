<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// FIXME: ASSIM CRIA TODO O PADRAO REST
// Route::resource('user', 'UserController');
// Route::resource('usuarios', 'Api\\UserControlle')->names('user)->parameters['usuarios' => 'user']; // 13:34  https://www.youtube.com/watch?v=_fDd_RKKWzk

// LOGIN FORA DO APIJWT PARA CHAMADA SEM TOKEN
// Route::post('auth/login', 'Api\\AuthController@login'); // somente para uso do admin

// TODO: colocar no apiJwt
// Route::resource('admin/info-home', 'Api\\Site\\InfoHomeController');
Route::get('admin/info-home', 'Api\\Admin\\InfoMainController@index')->domain('ADMIN')->name('info-home');
Route::post('admin/info-home/{id}', 'Api\\Admin\\InfoMainController@update')->domain('ADMIN')->name('info-home');

Route::get('admin/menu', 'Api\\Admin\\MenuController@index')->domain('ADMIN')->name('menu');
Route::post('admin/menu', 'Api\\Admin\\MenuController@store')->domain('ADMIN')->name('menu');
Route::put('admin/menu/{id}', 'Api\\Admin\\MenuController@update')->domain('ADMIN')->name('menu');
Route::delete('admin/menu/{id}', 'Api\\Admin\\MenuController@destroy')->domain('ADMIN')->name('menu');

Route::get('admin/about-us', 'Api\\Admin\\AboutGalleryController@index')->domain('ADMIN')->name('about-us');
Route::post('admin/about-us', 'Api\\Admin\\AboutGalleryController@store')->domain('ADMIN')->name('about-us');
Route::put('admin/about-us/{id}', 'Api\\Admin\\AboutGalleryController@update')->domain('ADMIN')->name('about-us');
Route::delete('admin/about-us/{id}', 'Api\\Admin\\AboutGalleryController@destroy')->domain('ADMIN')->name('about-us');

Route::get('admin/about-gallery', 'Api\\Admin\\AboutGalleryController@index')->domain('ADMIN')->name('about-gallery');
Route::post('admin/about-gallery', 'Api\\Admin\\AboutGalleryController@store')->domain('ADMIN')->name('about-gallery');
Route::put('admin/about-gallery/{id}', 'Api\\Admin\\AboutGalleryController@update')->domain('ADMIN')->name('about-gallery');
Route::delete('admin/about-gallery/{id}', 'Api\\Admin\\AboutGalleryController@destroy')->domain('ADMIN')->name('about-gallery');

Route::get('admin/about-item', 'Api\\Admin\\AboutItemController@index')->domain('ADMIN')->name('about-item');
Route::post('admin/about-item', 'Api\\Admin\\AboutItemController@store')->domain('ADMIN')->name('about-item');
Route::put('admin/about-item/{id}', 'Api\\Admin\\AboutItemController@update')->domain('ADMIN')->name('about-item');
Route::delete('admin/about-item/{id}', 'Api\\Admin\\AboutItemController@destroy')->domain('ADMIN')->name('about-item');

Route::group(['middleware' => 'apiJwt',], function ($router) { // somente para uso do admin
  // CONTROLE DE ACESSO
  // Route::get('user', 'Api\\UserController@index');
  // Route::post('auth/logout', 'Api\\AuthController@logout');
  // Route::post('auth/refresh', 'Api\\AuthController@refresh');
  // Route::post('me', 'AuthController@me'); // verificar o uso
});


/*
|--------------------------------------------------------------------------
| Referente ao SITE
|--------------------------------------------------------------------------
*/
Route::get('products', 'Api\\Site\\ProductController@index')->domain('SITE')->name('products');
Route::get('social-medias', 'Api\\Site\\SocialMediaController@index')->domain('SITE')->name('social-medias');;
Route::get('contacts', 'Api\\Site\\ContactController@index')->domain('SITE')->name('contacts');;
Route::get('info-main', 'Api\\Site\\InfoMainController@index')->domain('SITE')->name('info-main');;
Route::get('info-home', 'Api\\Site\\InfoHomeController@index')->domain('SITE')->name('info-home');;
Route::get('about-us', 'Api\\Site\\AboutController@index')->domain('SITE')->name('about-us');;
