@extends('layout/dua')
@section('content')
 <h1><center>Kategori Lembur</h1></center>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="Kode_lembur" class="col-sm-2 control-label">Kode Lembur</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Kode_lembur" placeholder="{{$kategori_lemburs->Kode_lembur}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="jabatan_id" class="col-sm-2 control-label">Kode Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="jabatan_id" placeholder="{{$kategori_lemburs->Jabatan->Kode_jabatan}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="jabatan_id" class="col-sm-2 control-label">Nama Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="jabatan_id" placeholder="{{$kategori_lemburs->Jabatan->Nama_jabatan}}" readonly>
            </div>
        </div>
          <div class="form-group">
            <label for="Besaran_uang" class="col-sm-2 control-label">Besaran Uang Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Besaran_uang" placeholder="{{$kategori_lemburs->Jabatan->Besaran_uang}}" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="golongan_id" class="col-sm-2 control-label">Kode Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="golongan_id" placeholder="{{$kategori_lemburs->Golongan->Kode_golongan}}" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="golongan_id" class="col-sm-2 control-label">Nama Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="golongan_id" placeholder="{{$kategori_lemburs->Golongan->Nama_golongan}}" readonly>
            </div>
        </div>
            <div class="form-group">
            <label for="Besaran_uang" class="col-sm-2 control-label">Besaran uang Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Besaran_uang" placeholder="{{$kategori_lemburs->Golongan->Besaran_uang}}" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="Besaran_uang" class="col-sm-2 control-label">Besaran Uang Kategori lembur</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Besaran_uang" placeholder="{{$kategori_lemburs->Besaran_uang}}" readonly>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <a href="{{ url('kategori_lemburs')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
    @stop