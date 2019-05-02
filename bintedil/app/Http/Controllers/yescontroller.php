<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\projectors;

class yescontroller extends Controller
{
   /* public function user()
    {
    	return view('new',['idd'=> request('id')]);
    }*/

   /* public function index()

    {
       return projectors::all();
    	//$p = new \App\projectors::all();
    	return $p;
    	//return view('projects.index',["q"=>$p]);
    }*/

    public function index()
    {
    	 $proj = \App\student::all();
    	
    	return view('student',["q"=>$proj]);
    }
}
