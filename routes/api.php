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
Route::get('admin/info-home', 'Api\\Admin\\InfoMainController@index');
Route::post('admin/info-home/{id}', 'Api\\Admin\\InfoMainController@update');


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
Route::get('products', 'Api\\Site\\ProductController@index');
Route::get('social-medias', 'Api\\Site\\SocialMediaController@index');
Route::get('contacts', 'Api\\Site\\ContactController@index');
Route::get('info-main', 'Api\\Site\\InfoMainController@index');
Route::get('info-home', 'Api\\Site\\InfoHomeController@index');
Route::get('about-us', 'Api\\Site\\AboutController@index');
