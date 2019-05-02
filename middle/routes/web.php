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

/*Route::get('/', function () {

	$alert="<script> alert('You are not authorized');</script>";
    return view('welcome',["al" => $alert]);
});*/

/*
Route::get('/about', function () {
   // return view('about',["demo"=>"DemoParameter", "demo2" => "Hello"]);
    $add='<script>var a = prompt("Enter first number");var b = prompt("Enter second number");
        var c = parseInt(a);
        var d = parseInt(b);
        alert(c+d);</script>';
    return view('about',["ad" => $add]);
});

Route::get('/contactus', function () {
	$product = ["BMW", "1000000","AUDI" ,"200000"];
    return view('contactus', ["products" => $product]);
});

Route::get('/product', function () {

	$p = ["Dell model x"," price RS 1000000","RAM 4 GB","ROM 1 TB"];
	$s = ["HP model y","price Rs 200000", "RAM 6 GB", "ROM 2 TB"];
    return view('product', ["p1" => $p,"p2" => $s]);
});
Route::get('/deb', function () {
	return response("Hi this is header",202)
	   ->header('Content-Type','text/css')//changing the content type of header
	   ->header('xheader-new','deb')
	   ->header('abc','deb');//creating and giving value to a header
	});
Route::get('/singha', function () {
	return response("Hi this is header",202)
	   ->withHeaders(['Content-Type' => 'text/css','xheader-new' => 'deb', 'abc' => 'deb'])
	    ->cookie('name', 'value', 60);//changing cookie
	});
Route::get('/search', function () {
	return redirect('https://www.google.com');

});
*/


Route::get('/user','pagesController@role')->middleware('role:enduser');
Route::get('/enduser','pagesController@ppp');

/*Route::get('/navbar', function() {
  return view('navbar');
 })->middleware('checkage');*/

 Route::get('/welcome', function() {
  return view('welcome');
 });




