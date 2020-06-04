<?php

use App\User;
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
    return view('welcome');
});


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


