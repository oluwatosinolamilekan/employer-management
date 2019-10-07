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
    return view('layouts.master');
});




Route::match(['get', 'post'], 'company/index', 'CompanyController@index')->name('company.index');
Route::match(['get', 'post'], 'company/update/{id}', 'CompanyController@update')->name('company.update');
Route::get('company/delete/{id}','CompanyController@destory')->name('company.delete');


Route::get('employer/search','EmployerController@search')->name('employer.search');
Route::match(['get', 'post'], 'employer/index', 'EmployerController@index')->name('employer.index');
Route::match(['get', 'post'], 'employer/update/{id}', 'EmployerController@update')->name('employer.update');
Route::get('employer/delete/{id}','EmployerController@delete')->name('employer.delete');



