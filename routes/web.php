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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', function () {
    return view('admin.login.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/login/custom', [

'uses' => 'CustomLoginController@login',

'as' => 'login.custom'


]);


//student

Route::get('/student/save', 'StudentController@index');
Route::post('/student/save', 'StudentController@save');


Route::get('/student/manage', 'StudentController@manage');


Route::get('/student/edit/{id}', 'StudentController@edit');

Route::post('/student/edit/', 'StudentController@update');



Route::get('/student/delete/{id}', 'StudentController@delete');

Route::get('/student/add', 'StudentController@add');


//Start of Activity Manage //

Route::get('/activity/save', 'ActivityController@index');
Route::post('/activity/save', 'ActivityController@save');


Route::get('/activity/manage', 'ActivityController@manage');

Route::get('/activity/add', 'ActivityController@add');



Route::get('/activity/edit/{id}', 'ActivityController@edit');

Route::post('/activity/edit/', 'ActivityController@update');



Route::get('/activity/delete/{id}', 'ActivityController@delete');


// End of Activity Manage //



// Start of Custom Activity Manage //


Route::get('/custom/activityManage', 'CustomActivityController@manage');