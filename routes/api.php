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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('masuk', 'Auth\AuthController@masuk');
    Route::post('daftar', 'Auth\AuthController@daftar');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('keluar', 'Auth\AuthController@keluar');
        Route::get('user', 'Auth\AuthController@user');
    });
});

Route::resource('article', 'Article\ArticleController')->except([
    'edit', 'create'
]);

Route::resource('berita', 'Berita\BeritaController')->except([
    'edit', 'create'
]);

Route::resource('tag', 'Tag\TagController')->except([
    'edit', 'create'
]);