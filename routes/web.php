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
//Frontend
Route::group([
    'namespace' => 'Frontend',
    'as' => 'Frontend::'
], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
    Route::get('register', [
        'as' => 'register',
        'uses' => 'HomeController@register'
    ]);
    Route::post('register', [
        'as' => 'postRegister',
        'uses' => 'HomeController@postRegister'
    ]);
});


//END FRONTEND








Route::get('/admin/login', [
    'as' => 'admin.login',
    'uses' => 'Backend\AuthController@getLogin'
]);
Route::get('/admin/logout', [
    'as' => 'admin.logout',
    'uses' => 'Backend\AuthController@logout'
]);
Route::post('/admin/login','Backend\AuthController@postLogin');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Backend',
    'middleware' => 'auth.backend',
    'as' => 'Backend::'
], function () {
    Route::get('/', [
        'as' => 'admin',
        'uses' => 'AdminController@index'
    ]);

    Route::group([
        'prefix' => 'posts',
        'as' => 'post@'
    ],function () {
        Route::get('/',['as' => 'index' , 'uses'=>'PostController@index']);
        Route::get('/datatables',['as' => 'datatables' , 'uses'=>'PostController@datatables']);
        Route::get('/add',['as' => 'add' , 'uses'=>'PostController@create']);
        Route::post('/store',['as' => 'store' , 'uses'=>'PostController@store']);
        Route::post('/update/{id}',['as' => 'update' , 'uses'=>'PostController@update']);
        Route::get('/edit/{id}',['as' => 'edit' , 'uses'=>'PostController@edit']);
        Route::get('/delete/{id}',['as' => 'delete' , 'uses'=>'PostController@delete']);
    });
});
