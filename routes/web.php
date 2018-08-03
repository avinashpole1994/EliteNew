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

//Route::get('logout','LoginController@logout');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','LoginController@checklogin');
Route::post('login','LoginController@login');
Route::get('logout','LoginController@logout');


Route::get('dashboard','IndexController@Services');
Route::get('index','IndexController@index');
Route::get('login-elite','IndexController@login_elite');
Route::get('service_product/{cate_id}','IndexController@service_product');
Route::get('OrderDetails/{user_id}','OrderDetailsController@get_oder_details');
Route::get('account-details/{user_id}','AccountDetailsController@get_account_details');
