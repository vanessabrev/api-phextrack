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
// Route::post('auth/login', 'Api\\AuthController@login')->domain('ADMIN')->name('login'); // somente para uso do admin

// TODO: colocar no apiJwt

Route::resource('admin/info-main', 'Api\\Admin\\InfoMainController', ['only' => ['index', 'update']],  ['domain' => 'jasodijasoidjo4555']);
Route::resource('admin/info-home', 'Api\\Admin\\InfoHomeController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::resource('admin/menu', 'Api\\Admin\\MenuController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::resource('admin/about-us', 'Api\\Admin\\AboutController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::resource('admin/about-gallery', 'Api\\Admin\\AboutGalleryController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::resource('admin/about-item', 'Api\\Admin\\AboutItemController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::resource('admin/contact-address', 'Api\\Admin\\AddressController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::resource('admin/contact-phone', 'Api\\Admin\\PhoneController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::resource('admin/contact-email', 'Api\\Admin\\EmailController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::resource('admin/social-media', 'Api\\Admin\\SocialMediaController', ['only' => ['index', 'update']]);
Route::resource('admin/products', 'Api\\Admin\\ProductController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::resource('admin/upload-images', 'Api\\Admin\\UploadImagesController', ['only' => ['index', 'store']]);


/*
|--------------------------------------------------------------------------
| Referente ao ADMIN
|--------------------------------------------------------------------------
*/
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
Route::get('products', 'Api\\Site\\ProductController@index')->name('products');
Route::get('social-medias', 'Api\\Site\\SocialMediaController@index')->name('social-medias');
Route::get('contacts', 'Api\\Site\\ContactController@index')->name('contacts');
Route::get('info-main', 'Api\\Site\\InfoMainController@index')->name('info-main');
Route::get('info-home', 'Api\\Site\\InfoHomeController@index')->name('info-home');
Route::get('about-us', 'Api\\Site\\AboutController@index')->name('about-us');
