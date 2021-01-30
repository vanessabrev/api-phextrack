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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// FIXME: ASSIM CRIA TODO O PADRAO REST
// Route::resource('user', 'UserController');
// Route::resource('usuarios', 'Api\\UserController@index')->names('user)->parameters['usuarios' => 'user']; // 13:34  https://www.youtube.com/watch?v=_fDd_RKKWzk

Route::post('auth/login', 'Api\\AuthController@login');


Route::group(['middleware' => 'apiJwt',], function ($router) {

  Route::get('user', 'Api\\UserController@index');
  Route::post('auth/logout', 'Api\\AuthController@logout');
  Route::post('auth/refresh', 'Api\\AuthController@refresh');

  // Route::post('me', 'AuthController@me');
});


/*
|--------------------------------------------------------------------------
| Referente ao SITE
|--------------------------------------------------------------------------
*/
Route::get('menus', 'Api\\Site\\MenuController@index');
Route::get('products', 'Api\\Site\\ProductController@index');
Route::get('social-medias', 'Api\\Site\\SocialMediaController@index');
Route::get('contacts', 'Api\\Site\\ContactController@index');
Route::get('info-homes', 'Api\\Site\\InfoHomeController@index');
Route::get('about-us', 'Api\\Site\\AboutController@index');
