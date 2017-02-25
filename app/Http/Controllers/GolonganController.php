<?php

namespace App\Http\Controllers;

use App\Golongan;
use Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Form;
use View;
use Html;
use DB;
use Alert;
use Validator;
use Input;
use Redirect;

class GolonganController extends Controller
{
  public function __construct()
    {
        $this->middleware('HRD');
    }

  
    public function index()
    {
        $golongans=Golongan::all();
        $golongans=Golongan::where('Nama_golongan',request('Nama_golongan'))->paginate(0);
        if(request()->has ('Nama_golongan'))
        {
         $golongans=Golongan::where('Nama_golongan',request('Nama_golongan'))->paginate(0);
 
        }
        else
        {
            $golongans=Golongan::paginate(3);
        }

     
        return view('golongans.index',compact('golongans'));
    }

     public function create()
    {
        $golongans=Golongan::all();
        return view('golongans.create',compact('golongans'));
    }

    public function store(Request $request)
    {
        $golongans=Request::all();
        Golongan::create($golongans);
        return redirect('golongans');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $golongans=Golongan::find($id);
        return view('golongans.show',compact('golongans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $golongans=Golongan::find($id);
        return view('golongans.edit',compact('golongans'));
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
        $golongansUpdate=Request::all();
        $golongans=Golongan::find($id);
        $golongans->update($golongansUpdate);
        return redirect('golongans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Golongan::find($id)->delete();
        return redirect('golongans');
    }






}
