<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
Route::get('/',array('as'=>'home','uses'=>'PagesController@index'));

Route::get('feedback',array('as'=>'home','uses'=>'PagesController@feedback'));
Route::post('feed',array('before'=>'csrf','uses'=>'PagesController@feed'));

Route::post('subscribe',array('before'=>'csrf','uses'=>'PagesController@subscribe'));

Route::get('register',array('as'=>'home','uses'=>'PagesController@home'));
Route::put('register',array('before'=>'csrf','uses'=>'PagesController@register'));

Route::get('zealicon',array('as'=>'home','uses'=>'PagesController@zealicon'));
Route::put('zealicon',array('before'=>'csrf','uses'=>'PagesController@zeal'));

Route::get('zealicon_event',array('as'=>'home','uses'=>'PagesController@zealicon_event'));
Route::put('zealicon_event',array('before'=>'csrf','uses'=>'PagesController@zeal_event'));
   
});
