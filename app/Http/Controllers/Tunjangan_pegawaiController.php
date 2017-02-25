<?php

namespace App\Http\Controllers;

use App\Tunjangan_pegawai;
use App\Tunjangans;
use App\Pegawai;
use App\User;
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


class Tunjangan_pegawaiController extends Controller
{
    
public function __construct()
    {
        $this->middleware('HRD');
    }

	   public function index()
    {
        $tunjangans=Tunjangans::all();
        $pegawais=Pegawai::all();
        $tunjangan_pegawais=Tunjangan_pegawai::all();
          $pegawais = Pegawai::all();
         $tunjangan_pegawais=Tunjangan_pegawai::where('pegawai_id',request('pegawai_id'))->paginate(0);
        if(request()->has ('pegawai_id'))
        {
         $tunjangan_pegawais=Tunjangan_pegawai::where('pegawai_id',request('pegawai_id'))->paginate(0);
 
        }
        else
        {
            $tunjangan_pegawais=Tunjangan_pegawai::paginate(3);
        }
        return view('tunjangan_pegawais.index',compact('tunjangans','pegawais','tunjangan_pegawais'));
    }
     public function create()
    {
        $pegawais=Pegawai::all();
        $tunjangans=Tunjangans::all();
        return view('tunjangan_pegawais.create',compact('pegawais','tunjangans'));
    }

    public function store(Request $request)
    {
        $tunjangan_pegawais=Request::all();
        Tunjangan_pegawai::create($tunjangan_pegawais);
        return redirect('tunjangan_pegawais');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $tunjangan_pegawais=Tunjangan_pegawai::find($id);
         $tunjangans=Tunjangans::find($id);
        $pegawais=Pegawai::find($id);
        
        return view('tunjangan_pegawais.show',compact('tunjangan_pegawais','tunjangans','pegawais'));

}
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tunjangan_pegawais=Tunjangan_pegawai::find($id);
        $tunjangans=Tunjangans::all();
        $pegawais=Pegawai::all();
        return view('tunjangan_pegawais.edit',compact('tunjangan_pegawais','tunjangans','pegawais'));
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
        $tunjangan_pegawaisUpdate=Request::all();
        $tunjangan_pegawais=Tunjangan_pegawai::find($id);
        $tunjangan_pegawais->update($tunjangan_pegawaisUpdate);
        return redirect('tunjangan_pegawais');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tunjangan_pegawai::find($id)->delete();
        return redirect('tunjangan_pegawais');
    }



}

