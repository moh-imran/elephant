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


Route::get('/', 'CommonController@index');
Route::get('job-builder', 'JobApplicantsController@index');

//Route::get('job-builder', function () {
//    return view('job-builder');
//});

Route::post('build-job', 'JobApplicantsController@postJob');

