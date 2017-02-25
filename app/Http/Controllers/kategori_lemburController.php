<?php

namespace App\Http\Controllers;

use App\Kategori_lembur;
use App\Jabatan;
use App\Golongan;
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

class kategori_lemburController extends Controller
{
     public function __construct()
    {
        $this->middleware('HRD');
    }

    public function index()
    {
        $kategori_lemburs=Kategori_lembur::all();
        $jabatans=Jabatan::all();
        $golongans=Golongan::all();

          $kategori_lemburs=Kategori_lembur::where('Kode_lembur',request('Kode_lembur'))->paginate(0);
        if(request()->has ('Kode_lembur'))
        {
         $kategori_lemburs=Kategori_lembur::where('Kode_lembur',request('Kode_lembur'))->paginate(0);
 
        }
        else
        {
            $kategori_lemburs=Kategori_lembur::paginate(3);
        }

     
        return view('kategori_lemburs.index',compact('kategori_lemburs','jabatans','golongans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatans=Jabatan::all();
        $golongans=Golongan::all();
        return view('kategori_lemburs.create',compact('jabatans','golongans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $kategori_lemburs=Request::all();
        Kategori_lembur::create($kategori_lemburs);
        return redirect('kategori_lemburs');
      }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jabatans=Jabatan::find($id);
        $golongans=Golongan::find($id);
        $kategori_lemburs=Kategori_lembur::find($id);
        return view('kategori_lemburs.show',compact('jabatans','golongans','kategori_lemburs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $kategori_lemburs=Kategori_lembur::find($id);
        $jabatans=Jabatan::all();
        $golongans=Golongan::all();
        return view('kategori_lemburs.edit',compact('kategori_lemburs','jabatans','golongans'));
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
        $kategori_lembursUpdate=Request::all();
        $kategori_lemburs=Kategori_lembur::find($id);
        $kategori_lemburs->update($kategori_lembursUpdate);
        return redirect('kategori_lemburs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategori_lembur::find($id)->delete();
        return redirect('kategori_lemburs');
    }
}
