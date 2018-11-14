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

Route::get('themcauhoi',['as'=>'themcauhoi','uses'=>'PagesController@getthemcauhoi']);
Route::post('themcauhoi',['as'=>'themcauhoi','uses'=>'PagesController@postthemcauhoi']);
Route::get('nganhangcauhoi',['as'=>'nganhangcauhoi','uses'=>'PagesController@getnganhangcauhoi']);
Route::post('nganhangcauhoi',['as'=>'suacauhoi','uses'=>'PagesController@posteditcauhoi']);
Route::post('nganhangcauhoi1',['as'=>'xoacauhoi','uses'=>'PagesController@postxoacauhoi']);
Route::get('taode',['as'=>'taode','uses'=>'PagesController@gettaode']);
Route::post('taode',['as'=>'taode','uses'=>'PagesController@posttaode']);
Route::get('de/{id}',['as'=>'de','uses'=>'PagesController@getde']);
Route::get('nganhangdethi',['as'=>'de','uses'=>'PagesController@getnganhangdethi']);
Route::get('login',['as'=>'login','uses'=>'PagesController@getlogin']);
Route::post('login',['as'=>'login','uses'=>'PagesController@postlogin']);
Route::get('logout',['as'=>'logout','uses'=>'PagesController@postlogout']);
Route::get('taodetheocauhoi',['as'=>'taodetheocauhoi','uses'=>'PagesController@gettaodetch']);
Route::post('taodetheocauhoi',['as'=>'tdtch','uses'=>'PagesController@posttaodetch']);