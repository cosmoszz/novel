<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('test', function() {
    return App\Repositories\Snatch\Biquge::init();
});


Route::group(['middleware'=>['web']], function(){

    Route::get('authors', 'AuthorController@authors');

    Route::get('top-novel', 'IndexController@top');

    Route::get('over-novel', 'IndexController@over');

    Route::get('search/{bookName}', 'IndexController@search');

    Route::get('book/{bookId}', 'IndexController@book');

    //novel categories
    Route::get('xuanhuan', function() {

    });

    Route::get('xiuzhen', function() {

    });

    Route::get('dushi', function() {

    });

    Route::get('lishi', function() {

    });

    Route::get('wangyou', function() {

    });

    Route::get('kehuan', function() {

    });
});


//wechat route
Route::any('/wechat', 'WechatController@serve');

//wechat user
Route::get('/users', 'UserController@users');
Route::get('/user/{openId}', 'UserController@user');