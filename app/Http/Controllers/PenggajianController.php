<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Form;
use Html;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use View;
use App\Penggajian;
use App\Tunjangan_pegawai;
use App\Lembur_pegawai;
use App\Pegawai;
use App\Golongan;
use App\Jabatan;
use App\kategori_lembur;
use App\Tunjangans;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class PenggajianController extends Controller
{
   public function __construct()
    {
        $this->middleware('HRD');
    }


	 public function index()
    {
        $gajian = Penggajian::paginate(3);
        return view('penggajians.index',compact('gajian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tunjangan = Tunjangan_pegawai::paginate(10);
        return view('penggajians.create',compact('tunjangan')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'tunjangan_pegawai_id' => 'required',
           'Status_pengambilan' => 'required',
        ]);

        $i_gaji=Input::all();

       $tunjangan_pegawai=Tunjangan_pegawai::where('id',$i_gaji['tunjangan_pegawai_id'])->first();

        $WPenggajian=Penggajian::where('tunjangan_pegawai_id',$tunjangan_pegawai->id)->first();

       $tunjangan=Tunjangans::where('id',$tunjangan_pegawai->Kode_tunjangan_id)->first();

       $pegawai=Pegawai::where('id',$tunjangan_pegawai->pegawai_id)->first();

       $kategori_lembur=kategori_lembur::where('jabatan_id',$pegawai->jabatan_id)->where('golongan_id',$pegawai->golongan_id)->first();

       $lembur_pegawai=Lembur_pegawai::where('pegawai_id',$pegawai->id)->first();

       $jabatan=Jabatan::where('id',$pegawai->jabatan_id)->first();
 
       $golongan=Golongan::where('id',$pegawai->golongan_id)->first();


       $gaji = new Penggajian ;

       if (isset($WPenggajian)) {
           $error=true ;
           $tunjangan=Tunjangan_pegawai::paginate(10);
           return view('penggajians.create',compact('tunjangan','error'));
       }
       elseif (!isset($lembur_pegawai)) {
            $nol = 0;
            $gaji->Jumlah_jam_lembur= $nol;
            $gaji->Jumlah_uang_lembur = $nol;
            $gaji->Gaji_pokok=$jabatan->besaran_uang+$golongan->besaran_uang;
            $gaji->Total_gaji=($tunjangan->Jumlah_anak*$tunjangan->Besaran_uang)+($jabatan->Besaran_uang+$golongan->Besaran_uang);
            $gaji->Tanggal_pengambilan = date('d-m-y');
            $gaji->Status_pengambilan = Input::get('Status_pengambilan');
            $gaji->tunjangan_pegawai_id = Input::get('tunjangan_pegawai_id');
            $gaji->Petugas_penerima = Auth::user()->name;
            $gaji->save();
        }
        elseif(!isset($lembur_pegawai) || !isset($kategori_lembur))
        {
            $nol = 0;
            $gaji->Jumlah_jam_lembur= $nol;
            $gaji->Jumlah_uang_lembur = $nol;
            $gaji->Gaji_pokok=$jabatan->Besaran_uang+$golongan->Besaran_uang;
            $gaji->Total_gaji = ($tunjangan->Jumlah_anak*$tunjangan->Besaran_uang)+($jabatan->Besaran_uang+$golongan->Besaran_uang);
            $gaji->Tanggal_pengambilan = date('d-m-y');
            $gaji->Status_pengambilan = Input::get('Status_pengambilan');
            $gaji->tunjangan_pegawai_id = Input::get('tunjangan_pegawai_id');
            $gaji->Petugas_penerima = Auth::user()->name;
            $gaji->save();

            

        }
        else
        {
            $gaji->Jumlah_jam_lembur = $lembur_pegawai->Jumlah_jam;
            $gaji->Jumlah_uang_lembur =($lembur_pegawai->Jumlah_jam)*($kategori_lembur->Besaran_uang);
            $gaji->Gaji_pokok=$jabatan->Besaran_uang+$golongan->Besaran_uang;
            $gaji->Total_gaji = ($lembur_pegawai->Jumlah_jam*$kategori_lembur->Besaran_uang)+($tunjangan->Jumlah_anak*$tunjangan->Besaran_uang)+($jabatan->Besaran_uang+$golongan->Besaran_uang);
            $gaji->Tanggal_pengambilan = date('d-m-y');
            $gaji->Status_pengambilan = Input::get('Status_pengambilan');
            $gaji->tunjangan_pegawai_id = Input::get('tunjangan_pegawai_id');
            $gaji->Petugas_penerima = Auth::user()->name;
            $gaji->save();
        }

        
        return redirect('penggajians');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penggajians = Penggajian::find($id);
        $tunjangan = Tunjangan_pegawai::all();
        return view('penggajians.show',compact('penggajians','tunjangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Penggajian::find($id);

        $pselect = Tunjangan_pegawai::whereIn('id',[$data->tunjangan_pegawai_id])->first();
        $pegawai = Tunjangan_pegawai::whereNotIn('id',[$data->tunjangan_pegawai_id])->get();

        return view('penggajians.edit',compact('data','tunjangan','pselect','pegawai'));
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
    

        $i_gaji=Input::all();

       $tunjangan_pegawai=Tunjangan_pegawai::where('id',$i_gaji['tunjangan_pegawai_id'])->first();

        $WPenggajian=Penggajian::where('tunjangan_pegawai_id',$tunjangan_pegawai->id)->first();

       $tunjangan=Tunjangans::where('id',$tunjangan_pegawai->Kode_tunjangan_id)->first();

       $pegawai=Pegawai::where('id',$tunjangan_pegawai->pegawai_id)->first();

       $kategori_lembur=kategori_lembur::where('jabatan_id',$pegawai->jabatan_id)->where('golongan_id',$pegawai->golongan_id)->first();

       $lembur_pegawai=Lembur_pegawai::where('pegawai_id',$pegawai->id)->first();

       $jabatan=Jabatan::where('id',$pegawai->jabatan_id)->first();
 
       $golongan=Golongan::where('id',$pegawai->golongan_id)->first();


       $gaji = new Penggajian ;

       if (isset($WPenggajian)) {
           $error=true ;
           $tunjangan=Tunjangan_pegawai::paginate(10);
           return view('penggajians.create',compact('tunjangan','error'));
       }
       elseif (!isset($lembur_pegawai)) {
            $nol = 0;
            $gaji->Jumlah_jam_lembur= $nol;
            $gaji->Jumlah_uang_lembur = $nol;
            $gaji->Gaji_pokok=$jabatan->besaran_uang+$golongan->besaran_uang;
            $gaji->Total_gaji=($tunjangan->Jumlah_anak*$tunjangan->Besaran_uang)+($jabatan->Besaran_uang+$golongan->Besaran_uang);
            $gaji->Tanggal_pengambilan = date('d-m-y');
            $gaji->Status_pengambilan = Input::get('Status_pengambilan');
            $gaji->tunjangan_pegawai_id = Input::get('tunjangan_pegawai_id');
            $gaji->Petugas_penerima = Auth::user()->name;
            $gaji->update();
        }
        elseif(!isset($lembur_pegawai) || !isset($kategori_lembur))
        {
            $nol = 0;
            $gaji->Jumlah_jam_lembur= $nol;
            $gaji->Jumlah_uang_lembur = $nol;
            $gaji->Gaji_pokok=$jabatan->Besaran_uang+$golongan->Besaran_uang;
            $gaji->Total_gaji = ($tunjangan->Jumlah_anak*$tunjangan->Besaran_uang)+($jabatan->Besaran_uang+$golongan->Besaran_uang);
            $gaji->Tanggal_pengambilan = date('d-m-y');
            $gaji->Status_pengambilan = Input::get('Status_pengambilan');
            $gaji->tunjangan_pegawai_id = Input::get('tunjangan_pegawai_id');
            $gaji->Petugas_penerima = Auth::user()->name;
            $gaji->update();

            

        }
        else
        {
            $gaji->Jumlah_jam_lembur = $lembur_pegawai->Jumlah_jam;
            $gaji->Jumlah_uang_lembur =($lembur_pegawai->Jumlah_jam)*($kategori_lembur->Besaran_uang);
            $gaji->Gaji_pokok=$jabatan->Besaran_uang+$golongan->Besaran_uang;
            $gaji->Total_gaji = ($lembur_pegawai->Jumlah_jam*$kategori_lembur->Besaran_uang)+($tunjangan->Jumlah_anak*$tunjangan->Besaran_uang)+($jabatan->Besaran_uang+$golongan->Besaran_uang);
            $gaji->Tanggal_pengambilan = date('d-m-y');
            $gaji->Status_pengambilan = Input::get('Status_pengambilan');
            $gaji->tunjangan_pegawai_id = Input::get('tunjangan_pegawai_id');
            $gaji->Petugas_penerima = Auth::user()->name;
            $gaji->update();
        }

       
        return redirect('penggajians');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penggajian::find($id)->delete();
        return redirect('penggajians');
    }
}
