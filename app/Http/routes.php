<?php

use Illuminate\Http\Request;

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

Route::get('/home', ['middleware'=>'request.log', function(Request $request) {
    if(Auth::user()) {
        return view('home');
    } else {
        $request->session()->flash('message', 'please login first');
        return redirect("Auth/login");
    }
}]);

Route::group([
    'prefix' => 'Auth',
    'middleware' => 'request.log'
    ], function(){
    Route::get( 'login',    "Auth\AuthController@getLogin");
    Route::post('login',    "Auth\AuthController@postLogin");
    Route::get( 'register', "Auth\AuthController@getRegister");
    Route::post('register', "Auth\AuthController@postRegister");
    Route::get( 'logout',   "Auth\AuthController@getLogout");
});

Route::resource('User', 'UserController');
