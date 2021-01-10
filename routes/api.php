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

// Route::resource('user', 'UserController'); // FIXME: ASSIM CRIA TODO O PADRAO REST

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
 Route::get('menu', 'Api\\Site\\MenuController@index');