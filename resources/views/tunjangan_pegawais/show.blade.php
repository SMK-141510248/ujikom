@extends('layout/dua')
@section('content')
 <h1><center>Tunjangan Pegawai</h1></center>

    
      <form class="form-horizontal">
        <div class="form-group">
            <label for="Kode_tunjangan_id" class="col-sm-2 control-label">Kode Tunjangan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Kode_tunjangan_id" placeholder="{{$tunjangan_pegawais->Tunjangans->Kode_tunjangan}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="pegawai_id" class="col-sm-2 control-label">Kode Pegawai</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="pegawai_id" placeholder="{{$tunjangan_pegawais->Pegawai->Nip}}" readonly>
            </div>
        </div>
     <div class="form-group">
            <label for="user_id" class="col-sm-2 control-label">Nama Pegawai</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="user_id" placeholder="{{$tunjangan_pegawais->Pegawai->User->name}}" readonly>
            </div>
        </div>
 
  
         <div class="form-group">
            <label for="jabatan_id" class="col-sm-2 control-label">Kode Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="jabatan_id" placeholder="{{$tunjangan_pegawais->tunjangans->Jabatan->Kode_jabatan}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="jabatan_id" class="col-sm-2 control-label">Nama Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="jabatan_id" placeholder="{{$tunjangan_pegawais->tunjangans->Jabatan->Nama_jabatan}}" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="jabatan_id" class="col-sm-2 control-label">Besaran Uang Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="jabatan_id" placeholder="{{$tunjangan_pegawais->tunjangans->Jabatan->Besaran_uang}}" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="golongan_id" class="col-sm-2 control-label">Kode Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="golongan_id" placeholder="{{$tunjangan_pegawais->tunjangans->Golongan->Kode_golongan}}" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="golongan_id" class="col-sm-2 control-label">Nama Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="golongan_id" placeholder="{{$tunjangan_pegawais->tunjangans->Golongan->Nama_golongan}}" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="golongan_id" class="col-sm-2 control-label">Besaran Uang Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="golongan_id" placeholder="{{$tunjangan_pegawais->tunjangans->Golongan->Besaran_uang}}" readonly>
            </div>
        </div>
    <div class="form-group">
            <label for="Status" class="col-sm-2 control-label">Status</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Status" placeholder="{{$tunjangan_pegawais->tunjangans->Status}}" readonly>
            </div>
        </div>
        
         <div class="form-group">
            <label for="Jumlah_anak" class="col-sm-2 control-label">Jumlah Anak</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Jumlah_anak" placeholder="{{$tunjangan_pegawais->tunjangans->Jumlah_anak}}" readonly>
            </div>
        </div> 

         <div class="form-group">
            <label for="Besaran_uang" class="col-sm-2 control-label">Besaran Uang Tunjangan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Besaran_uang" placeholder="{{$tunjangan_pegawais->tunjangans->Besaran_uang}}" readonly>
            </div>
        </div>

            <div class="form-group">
            <label for="Besaran_uang" class="col-sm-2 control-label">Besaran Uang Keseluruhan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Besaran_uang" placeholder="{{$tunjangan_pegawais->tunjangans->Besaran_uang + $tunjangan_pegawais->tunjangans->Golongan->Besaran_uang + $tunjangan_pegawais->tunjangans->Jabatan->Besaran_uang}}" readonly>
            </div>
        </div>
        
    
        
    
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <a href="{{ url('tunjangan_pegawais')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
    @stop