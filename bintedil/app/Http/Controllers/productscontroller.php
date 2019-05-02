<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artical;
class productscontroller extends Controller
{
    public function page()
    {
    	return view('1stpage');
    }

    public function form()
    {
    	return view('form');
    }
   public function store()
   {
   	$p = new artical();
   	$p->firstname=request('firstname');
   	$p->lastname=request('lastname');
   	$p->branch=request('branch');
   	$p->gender=request('gender');
   	$p->dob=request('dob');
   	
   	$p->save();
   	$s =\App\artical::all();
   	 return view('amazon',['prod'=>$s]);

   
   }
   

}

