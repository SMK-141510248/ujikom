<?php

namespace App\Http\Controllers;

use App\Admin;
use Request;
use App\Http\Controllers\Controller;
use Form;
use View;
use Html;
use DB;
use Alert;
use Validator;
use Input;
use Redirect;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('HRD');
    }
    
    public function index()
    {
        $Admin = User::all();
         return view('Admin.index',compact('Admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $Admin = User::find($id);
        return view('Admin.show',compact('Admin'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $Admin = User::find($id);
       return view('Admin.edit',compact('Admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->Validate($request, [
            'name' => 'required',
            'email' => 'required',
            'permission' => 'required',
        ]);

        $Admin = User::findOrFail($id);
        $Admin->name = $request->name;
        $Admin->email = $request->email;
        $Admin->permission = $request->permission;
        $Admin->save();
       
        return redirect('Admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('Admin');
    }
}

