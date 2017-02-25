@extends('layout/dua')
@section('content')
 <h1><center>Tunjangan</h1></center>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="Kode_tunjangan" class="col-sm-2 control-label">Kode Tunjangan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Kode_tunjangan" placeholder="{{$tunjangans->Kode_tunjangan}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="jabatan_id" class="col-sm-2 control-label">Kode Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="jabatan_id" placeholder="{{$tunjangans->Jabatan->Kode_jabatan}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="jabatan_id" class="col-sm-2 control-label">Nama Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="jabatan_id" placeholder="{{$tunjangans->Jabatan->Nama_jabatan}}" readonly>
            </div>
        </div>
            <div class="form-group">
            <label for="jabatan_id" class="col-sm-2 control-label">Besaran Uang Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="jabatan_id" placeholder="{{$tunjangans->Jabatan->Besaran_uang}}" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="golongan_id" class="col-sm-2 control-label">Kode Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="golongan_id" placeholder="{{$tunjangans->Golongan->Kode_golongan}}" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="golongan_id" class="col-sm-2 control-label">Nama Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="golongan_id" placeholder="{{$tunjangans->Golongan->Nama_golongan}}" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="golongan_id" class="col-sm-2 control-label">Besaran Uang Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="golongan_id" placeholder="{{$tunjangans->Golongan->Besaran_uang}}" readonly>
            </div>
        </div>

    <div class="form-group">
            <label for="Status" class="col-sm-2 control-label">Status</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Status" placeholder="{{$tunjangans->Status}}" readonly>
            </div>
        </div>
        
         <div class="form-group">
            <label for="Jumlah_anak" class="col-sm-2 control-label">Jumlah Anak</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Jumlah_anak" placeholder="{{$tunjangans->Jumlah_anak}}" readonly>
            </div>
        </div> 

         <div class="form-group">
            <label for="Besaran_uang" class="col-sm-2 control-label">Besaran Uang Tunjangan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Besaran_uang" placeholder="{{$tunjangans->Besaran_uang}}" readonly>
            </div>
        </div>
      
        

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <a href="{{ url('tunjangans')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
    @stop