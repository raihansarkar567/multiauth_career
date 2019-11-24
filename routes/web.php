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

Route::prefix('company')->group(function(){
	Route::get('/', 'CompanyController@index')->name('company.dashboard');
	Route::get('/login', 'Auth\CompanyLoginController@showLoginForm')->name('company.login');
	Route::post('/login', 'Auth\CompanyLoginController@login')->name('company.login.submit');
	Route::get('/add_job', 'AddJobController@add_job')->name('company.add_job');
	Route::post('/add_job', 'AddJobController@submit_job')->name('company.add_job.submit');
	Route::get('/register', 'Auth\CompanyRegisterController@showRegistrationForm')->name('company.register');
	Route::post('/register', 'Auth\CompanyRegisterController@register')->name('company.register.submit');
});

