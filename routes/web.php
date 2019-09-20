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

Auth::routes(['register' => false]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('painel', function () {
    return redirect()->route('login');
});

Route::group(['prefix' => 'panel', 'as' => 'panel.', 'middleware' => ['auth'], 'namespace' => 'Panel'], function () {
    Route::get('dashboard', 'PanelController@index')->name('index');
    Route::get('profile', 'UserController@selfUpdate')->name('user.profile');

    Route::get('users', 'UserController@index')->name('user.index');
    Route::get('user/create', 'UserController@create')->name('user.create');
    Route::post('user', 'UserController@store')->name('user.store');
    Route::get('user/{idUser}/show', 'UserController@show')->name('user.show');
    Route::get('user/{idUser}/edit', 'UserController@edit')->name('user.edit');
    Route::put('user/{idUser}', 'UserController@update')->name('user.update');
    Route::delete('user/{idUser}', 'UserController@destroy')->name('user.destroy');
});
