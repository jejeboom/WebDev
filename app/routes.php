<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showLogin');

Route::get('/new-sales-order','NewSOController@index');

Route::get('/view-sales-order','ViewSOController@index');

Route::get('/report','ReportsController@index');

Route::get('maintenance/employee','MaintEmpController@index');





Route::get('maintenance/customer','MaintCustController@index');

Route::post('maintenance/add-customer', 'MaintCustController@addCustomer');

Route::post('maintenance/edit-customer', 'MaintCustController@editCustomer');

Route::post('maintenance/delete-customer', 'MaintCustController@deleteCustomer');



Route::get('maintenance/employee','MaintEmpController@index');

Route::post('maintenance/add-employee', 'MaintEmpController@addEmployee');

Route::post('maintenance/edit-employee', 'MaintEmpController@editEmployee');

Route::post('maintenance/delete-employee', 'MaintEmpController@deleteEmployee');



Route::get('maintenance/product-category','MaintProdCatController@index');

Route::get('maintenance/product-details','MaintProdDetController@index');

Route::post('maintenance/add-category', 'MaintProdCatController@addCategory');

Route::post('maintenance/edit-category', 'MaintProdCatController@editCategory');

Route::post('maintenance/delete-category', 'MaintProdCatController@deleteCategory');

Route::post('maintenance/add-prod', 'MaintProdDetController@addProd');

Route::post('maintenance/edit-prod', 'MaintProdDetController@editProd');

Route::post('maintenance/delete-prod', 'MaintProdDetController@deleteProd');

Route::get('/get-cust-values', 'NewSOController@getCustDetails');



Route::post('/add-soh', 'NewSOController@addSOH');
Route::post('/add-sod', 'NewSOController@addSOD');

Route::get('/get-report-values', 'ReportsController@getReport');