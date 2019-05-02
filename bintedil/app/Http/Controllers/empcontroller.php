<?php

namespace App\Http\Controllers;
use App\artical;
use Illuminate\Http\Request;

class empcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp =\App\artical::all();
         
        return view('sayan',compact('emp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sayan2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $this->validate($request,['firstname'=>'required','lastname'=>['required','min:5'],'dob'=>['digits:10','required']]);
     $p = new artical();
    $p->firstname=request('firstname');
    $p->lastname=request('lastname');
    $p->branch=request('branch');
    $p->gender=request('gender');
    $p->dob=request('dob');
    
    $p->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          
        $emp = artical::find($id);

       return view('sayan1',compact('emp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp = artical::find($id);
        return view('edit',compact('emp'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {    $this->validate($request,['firstname'=>'required','lastname'=>'required']);
       
        
        $emp= artical::find($id);
        $emp->firstname = request('firstname');
        $emp->lastname = request('lastname');
        $emp->gender = request('gender');
        $emp->branch = request('branch');
        $emp->dob = request('dob');
        $emp->save();
      


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $emp= artical::find($id);
        // $emp->delete();
     }
}
