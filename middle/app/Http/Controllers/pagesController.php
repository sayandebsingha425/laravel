<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function role()
     {
     	$ad="You are in admin page";
     	return view('admin',["adds"=>$ad]);
     }
     public function ppp()
     {
     	$a="You are in enduser page";
     	return view('enduser',["as"=>$a]);
     }
    /* public function rupa()
   {
          return view('welcome');
     }*/     
     

}

