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
Route::get('/manage_employee', 'HomeController@showEmployeePage')->name('manageemp');
Route::get('/salary_group', 'HomeController@showSalaryGroupPage')->name('salary_grp');
Route::get('/salary_manage', 'HomeController@showSalaryManagePage')->name('salary_manage');
Route::get('/attendance', 'HomeController@showAttendancePage')->name('attendance');

Route::post('/add_employee', 'EmployeeController@store')->na