<?php

namespace App\Http\Controllers;

use App\Kategori_lembur;
use App\Pegawai;
use App\Lembur_pegawai;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Form;
use View;
use Html;
use DB;
use Alert;
use Validator;
use Input;
use Redirect;


class Lembur_pegawaiController extends Controller
{
   public function __construct()
    {
        $this->middleware('HRD');
    }


     public function index()
    {
        $kategori_lemburs=Kategori_lembur::all();
        $pegawais=Pegawai::all();
        $lembur_pegawais=Lembur_pegawai::all();
        $lembur_pegawais=Lembur_pegawai::where('Kode_lembur_id',request('Kode_lembur_id'))->paginate(0);
        if(request()->has ('Kode_lembur_id'))
        {
         $lembur_pegawais=Lembur_pegawai::where('Kode_lembur_id',request('Kode_lembur_id'))->paginate(0);
 
        }
        else
        {
            $lembur_pegawais=Lembur_pegawai::paginate(3);
        }
        return view('lembur_pegawais.index',compact('kategori_lemburs','pegawais','lembur_pegawais'));
    }
     public function create()
    {
        $kategori_lemburs=Kategori_lembur::all();
        $pegawais=Pegawai::all();
        return view('lembur_pegawais.create',compact('kategori_lemburs','pegawais'));
    }

    public function store(Request $request)
    {
        $lembur_pegawais=Request::all();
        Lembur_pegawai::create($lembur_pegawais);
        return redirect('lembur_pegawais');

    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $lembur_pegawais=Lembur_pegawai::find($id);
         $kategori_lemburs=Kategori_lembur::find($id);
        $pegawais=Pegawai::find($id);
        return view('lembur_pegawais.show',compact('lembur_pegawais','kategori_lemburs','pegawais'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lembur_pegawais=Lembur_pegawai::find($id);
        $kategori_lemburs=Kategori_lembur::all();
        $pegawais=Pegawai::all();
        return view('lembur_pegawais.edit',compact('lembur_pegawais','kategori_lemburs','pegawais'));
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
        $lembur_pegawaisUpdate=Request::all();
        $lembur_pegawais=Lembur_pegawai::find($id);
        $lembur_pegawais->update($lembur_pegawaisUpdate);
        return redirect('lembur_pegawais');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lembur_pegawai::find($id)->delete();
        return redirect('lembur_pegawais');
    }



}

