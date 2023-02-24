<?php

Route::get('/employees', 'EmployeesController@index');
// add
Route::get('/employees/create', 'EmployeesController@create');
// add
Route::post('/employees/store', 'EmployeesController@store');
