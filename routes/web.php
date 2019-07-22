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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('user')->group(function () {
    Route::get('', 'UserController@index')->name('user');
    Route::get('{user}', 'UserController@show')->name('user.show');
    Route::get('{user}/edit', 'UserController@edit')->name('user.edit');
    Route::patch('{user}', 'UserController@update')->name('user.update');

    Route::get('start-course/{course}', 'UserController@start_course')->name('user.start-course');
    Route::post('end-course/{course}', 'UserController@end_course')->name('user.end-course');
    Route::get('result/{result}', 'UserController@result')->name('user.result');
});

Route::get('/course', 'CourseController@index')->name('course.index');