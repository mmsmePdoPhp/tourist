<?php

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
// Route::any('captcha-test', function() {
//     if (request()->getMethod() == 'POST') {
//         $rules = ['captcha' => 'required|captcha'];
//         $validator = validator()->make(request()->all(), $rules);
//         if ($validator->fails()) {
//             echo '<p style="color: #ff0000;">Incorrect!</p>';
//         } else {
//             echo '<p style="color: #00ff30;">Matched :)</p>';
//         }
//     }

//     $form = '<form method="post" action="captcha-test">';
//     $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
//     $form .= '<p>' . captcha_img() . '</p>';
//     $form .= '<p><input type="text" name="captcha"></p>';
//     $form .= '<p><button type="submit" name="check">Check</button></p>';
//     $form .= '</form>';
//     return $form;
// });

Route::get('/', function () {
    if(Auth::guest()){
       return redirect('/login');
    }else{
        return redirect(route('home'));
    }
});

Route::group(['middleware' => ['isAdmin']], function () {

    Route::get('gate', function () {
        return 'hi from gate';
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


Auth::routes();


