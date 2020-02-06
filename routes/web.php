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

Route::get('/users-excel', [
   'uses' => 'UserController@exportExcel',
    'as' => "users.excel"
]);


Route::get('/users-excel-csv', [
    'uses' => 'UserController@exportCSV',
    'as' => "users.excel.csv"
]);


Route::post('/upload-file-excel', [
   'uses' => 'UserController@importExcel',
    'as' => 'users.import.excel'
]);

Route::get('/test', 'UserController@returnUsers');