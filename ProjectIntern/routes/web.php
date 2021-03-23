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

/*Route::get('/', function () {
    return view('welcome');
});*/
//lay out
/*Route::get('/layouts', function () {
    return view('userregister');
});*/
Route::view('/','home');
Route::view('/layouts','userregister');
Route::view('/login','login');
//contoller
Route::post('userinsert','Registerontroller@insertuser');//insert
Route::get('listuser','ViewController@listuser');//viewe data
Route::post('checklogin','loginController@checklogins');//login 