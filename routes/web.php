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

Route::get('/course/{course}/lesson/{lesson}', function ($courseId, $lessonId) {
    return view('lesson.index');
});

Route::resource('user', 'UserController');
Route::resource('course', 'CourseController');


Route::get('/home', 'HomeController@index')->name('home');