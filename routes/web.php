<?php

use App\City;
use App\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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
Route::get('saveStates', function () {
    // $response = Http::get('http://127.0.0.1:8000/json/home.json');
    // echo $response->json();

    



});

// example upload file

Route::get('/', function () {
    if(Auth::guest()){
       return redirect('/login');
    }else{
        return redirect(route('home'));
    }
});

Route::get('userRegister', function() {
    $roles = Role::all()->filter(function($role){
        if($role->name == 'admin'){

        }else{
            return $role;
        }
    });
    return view('auth.userRegister')->withRoles($roles);
})->name('userRegister');


Route::group(['middleware' => ['isAdmin']], function () {



    Route::post('/users/restore', 'UserController@restore')->name('users.restore');
    Route::get('/users/trashed', 'UserController@trashed')->name('users.trashed');

    Route::resource('users', 'UserController');
    //all routes for category
    Route::resource('cateogry', 'CategoryController');
    Route::get('newCategory','CategoryController@newCategory')->name("cateogry.new");


    Route::resource('city', 'CityController');

    Route::resource('role', 'RoleController');


    Route::resource('state', 'StateController');





    Route::get('/home', 'HomeController@index')->name('home');

    /***
     * test some thing in here
     */

    Route::group(['prefix' => 'test'], function () {
        Route::get('isAdmin', function () {
            // return Auth::user()->roles()->sync([4,5,6]);
            return (Auth::user()->isAdmin);
        });
    });
});


Auth::routes();


