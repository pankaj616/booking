<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/profile', 'HomeController@profile')->name('user.profile');
Route::get('/leaves', 'LeaveController@index')->name('user.leaves');
Route::post('/leave-request', 'LeaveController@leaveRequest')->name('user.leaveRequest');
Route::get('/leave/{id}', 'LeaveController@view')->name('user.leave');

Route::get('/admin', 'Auth\AdminLoginController@loginForm')->name('adminShowLoginForm');
Route::post('/admin', 'Auth\AdminLoginController@login')->name('admin.login');
Route::post('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => ['auth:admin'],
], function () {
    Route::get('/dashboard', 'AdminController@index')->name('admin');
    Route::get('/departments', 'DepartmentController@index')->name('admin.departments');
    Route::get('/department/{id}', 'DepartmentController@view')->name('admin.departmentView');
    Route::get('/roles', 'RoleController@index')->name('admin.roles');
    Route::get('/role/{id}', 'RoleController@view')->name('admin.roleView');
    Route::get('/employees', 'EmployeeController@index')->name('admin.employees');
    Route::get('/employee/{id}', 'EmployeeController@view')->name('admin.employeeView');
    Route::get('/holidays', 'HolidayController@index')->name('admin.holidays');
    Route::get('/leave/{id}', 'HolidayController@view')->name('admin.leaveView');
    Route::get('/leave/check-priority/{id}', 'HolidayController@CheckPriority')->name('admin.checkLeavePriority');
    Route::post('/leave/status', 'HolidayController@leaveStatus')->name('admin.leaveStatus');
    
});