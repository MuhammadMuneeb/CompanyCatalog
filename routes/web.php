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
    return view('layouts.test');
});

Route::get('all_companies', 'CompanyController@index')->name('allCompanies');
Route::get('add_company', 'CompanyController@addCompanyPage');
Route::post('save_company', 'CompanyController@saveCompany')->name('saveCompany');
Route::post('save_key_desc/{id}', 'CompanyController@addKeywordsDesc')->name('saveKeyDesc');
Route::post('update_company/{id}', 'CompanyController@updateCompany')->name('updateCompany');