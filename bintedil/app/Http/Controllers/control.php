<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class control extends Controller
{
    public function add()
    {
    	$addition =
	    "<script> 
	var a = prompt('Enter 1st number');
    var b = prompt('Enter 2nd Number');
    var c = parseInt(a);
    var d = parseInt(b);
    var e = c+d;
    alert(e);
    	</script>";
    return view('home',["addi" => $addition]);
    }
}
