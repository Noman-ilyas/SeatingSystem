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

Route::get('/class', 'HomeController@class')->name('class');
Route::get('/addStudent', 'HomeController@addStudent')->name('addStudent');
Route::post('/addStudent', 'AdminController@addStudent')->name('addStudent');
Route::get('/viewStudents', 'AdminController@viewStudents')->name('viewStudents');

Route::get('/admin_viewstudent/{editstudent}/edit','AdminController@editStudent');
Route::delete('/admin_viewstudent/{deletestudent}/delete','AdminController@deleteStudent');
Route::put('/admin_viewstudent/{editstudent}','AdminController@updateStudent');
Route::get('/admin_viewstudent/{editstudent}','AdminController@viewStudent');



