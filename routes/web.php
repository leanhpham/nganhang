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

Route::get('admin', function () {
    return view('signIn');
});


Route::post('logInAD',['as'=>'logInAD','uses'=>'MyController@login_AD']);
Auth::routes();



/* QL NHAN VIEN  */

Route::post('addGV',['as'=>'addGV','uses'=>'MyController@themgiangvien']);
Route::get('listGV','MyController@getList' );
Route::get('deleteGV/{id}','MyController@deleteGV');
Route::post('editGV/{id}','MyController@suagiangvien');

/* END QL NHAN VIEN*/