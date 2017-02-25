@extends('layout/dua')
@section('content')
 <h1><center>Golongan</h1></center>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="Kode_golongan" class="col-sm-2 control-label">Kode Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Kode_golongan" placeholder="{{$golongans->Kode_golongan}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Nama_golongan" class="col-sm-2 control-label">Nama Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Nama_golongan" placeholder="{{$golongans->Nama_golongan}}" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="Besaran_uang" class="col-sm-2 control-label">Besaran Uang</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Besaran_uang" placeholder="{{$golongans->Besaran_uang}}" readonly>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <a href="{{ url('golongans')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
    @stop