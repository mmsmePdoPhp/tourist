<?php

use App\User;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => ['isAdmin']], function () {



    Route::resource('users', 'UserController');

    //all routes for category
    Route::resource('cateogry', 'CategoryController');
    Route::get('newCategory','CategoryController@newCategory')->name("cateogry.new");



    Route::resource('tag', 'TagController');

    Route::resource('tor', 'TorController');

    Route::resource('tortype', 'TortypeController');

    Route::resource('foodprice', 'FoodpriceController');

    Route::resource('attraction', 'AtrractionController');

    Route::resource('city', 'CityController');

    Route::resource('role', 'RoleController');

    Route::resource('post', 'PostController');

    Route::resource('state', 'StateController');

    Route::resource('guid', 'GuidController');

    Route::resource('comment', 'CommentController');

    Route::resource('link', 'LinkController');

    Route::resource('sublink', 'SublinkController');

    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');

    /***
     * test some thing in here
     */

     Route::group(['prefix' => '    '], function () {
        Route::get('isAdmin', function () {
            // return Auth::user()->roles()->sync([4,5,6]);
            return (Auth::user()->isAdmin);
        });
     });
});

