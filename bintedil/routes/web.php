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

Route::get('/','control@add');

Route::get('/news', function () {

	$news= "ZEE TV";
	$alert ="<script> alert('You have successfully entered into the site');</script>";
    return view('news',["n" => $news , "a" => $alert]);
});

Route::get('/aboutus', function () {
	$add = ["DELHI","17775","SADAR NAGAR"];
	$color =["RED", "GREEN", "BLUE"];
    return view('about',["ad" =>$add , "co" => $color]);
});

Route::get('/deb', function () {

	return response("Hi this is header", 202)
	->header('Content-type','text/css')
	->header('Xheader-new','deb')
	->header('sayan','deb')
	->cookie('name','value',60);

	});

Route::get('/singha', function () {
	return response("This is header",202)
	->withHeaders(['Content-type'=>'text/css','Xheader-new'=>'deb']);
});

Route::get('/s', function () {

	return response()
	->json(['Car'=>'BMW', 'Country'=>'INDIA', 'State' => 'W.B']);
});

Route::get('/search', function () {

	 return redirect("https://www.google.com");

	});

Route::get('/user','yescontroller@user');
Route::get('/student','yescontroller@index');

Route::resource('/usee','yescontroller');
//Route::resource('/ro','yesnocontroller@role')->middleware('role:enduser');

Route::get('/1stpage','productscontroller@page');
Route::post('/productinfo','productscontroller@store');
Route::get('/form','productscontroller@form');
Route::get('/amazon','productscontroller@am');
Route::resource('employee','empcontroller');









