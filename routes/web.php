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


Route::get('/client', 'ClientController@index')->name('client');
Route::get('/client/create', 'ClientController@create')->name('client');

Route::get('/expenses', 'ExpensesController@index')->name('expenses');
Route::get('/expenses/create', 'ExpensesController@create')->name('expenses');
Route::post('/expenses', 'ExpensesController@store');

Route::get('/company', 'CompanyController@index')->name('company');
Route::post('/company', 'CompanyController@store')->name('company.store');
Route::get('/company/create', 'CompanyController@create')->name('company.create');
Route::get('/company/{id}', 'CompanyController@show')->name('company.show');