<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/{name?}', 'MyController@index'); // receive a parameter called name, if the name is not send then uses a default value 'name' from MyController
// MyController@index => calling the function called index located at MyController.php 

Route::resource('makers', 'MakerController', ['except' => ['create', 'edit']]); 
Route::resource('vehicles', 'VehicleController', ['only' => ['index']]);
Route::resource('makers.vehicles','MakerVehiclesController',['except'=>['edit','create']]);
