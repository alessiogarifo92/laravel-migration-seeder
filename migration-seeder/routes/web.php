<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homeemp', 'EmployeeController@index')
    -> name('employee-index');

Route::get('/employee/{id}', 'EmployeeController@show')
    -> name('employee-show');

Route::get('/homeBrand', 'BrandController@indexBrand')
    -> name('brand-index');

Route::get('/brand/{id}', 'BrandController@show')
    -> name('brand-show');

Route::get('/homeHQ', 'HeadquarterController@indexHQ')
    -> name('headquarter-index');

Route::get('/headquarter/{id}', 'headquarterController@show')
    -> name('headquarter-show');
