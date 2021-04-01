<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ExecuterController,AllController,CustomerController};

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');
//user home

Route::get('/user/home', "AllController@home")->name('home');


//EXECUTOR
Route::get('/executor-register', function () {
    return view('auth.executor-register');
})->name('executor-register');

Route::get('/executor-login', function () {
    return view('auth.executor-login');
})->name('executor-login');

Route::post('/executor-register',"ExecuterController@register")->name('register-executor');
Route::post('/executor-login',"ExecuterController@login")->name('login-executor');


//CUSTOMER
Route::get('/customer-register', function () {
    return view('auth.customer-register');
})->name('customer-register');

Route::get('/customer-login', function () {
    return view('auth.customer-login');
})->name('customer-login');

Route::post('/customer-register',"CustomerController@register")->name('register-customer');
Route::post('/customer-login',"CustomerController@login")->name('login-customer');
//allExecutor

Route::get('/executors', "AllController@executors")->name('executors');
//one execute
Route::get('/executor/{name}/{id}', "AllController@oneExecuter")->middleware('auth');

//allVacance

Route::get('/vacance', "AllController@customers")->name('customers');
//one customer
Route::get('/vacance/{name}/{id}/{userId}', "AllController@oneCustomer")->middleware('auth');
Route::post('/vacance/action', "AllController@oneCustomerAction")->middleware('auth');