@extends('layout/dua')
@section('content')



 <h1><center>Create Tunjangan</h1></center>
    {!! Form::open(['url' => 'tunjangans']) !!}

    <div class="form-group">
        {!! Form::label('Kode Tunjangan', 'Kode Tunjangan:') !!}
         <input type="text" name="Kode_tunjangan" class="form-control" required>
    </div>

     <div class="form-group">
        {!! Form::label('Nama Jabatan', 'Nama Jabatan:') !!}
    </div>
      <select class="form-control" name="jabatan_id"><option>--Pilih Nama Jabatan--</option>
            @foreach($jabatans as $data)
                <option value="{{$data->id}}">{{$data->Nama_jabatan}}</option>
            @endforeach
            </select>
       

    <div class="form-group">
        {!! Form::label('Nama Golongan', 'Nama Golongan:') !!}
    </div>
      <select class="form-control" name="golongan_id"><option>--Pilih Nama Golongan--</option>
            @foreach($golongans as $data)
                <option value="{{$data->id}}">{{$data->Nama_golongan}}</option>
            @endforeach
            </select>
     
<div class="form-group">
        {!! Form::label('Status', 'Status:') !!}
        <input type="text" name="Status" class="form-control" required>
    </div>
     

     <div class="form-group">
        {!! Form::label('Jumlah Anak', 'Jumlah Anak:') !!}
        <input type="text" name="Jumlah_anak" class="form-control" required>
    </div>
     


     <div class="form-group">
        {!! Form::label('Besaran Uang', 'Besaran Uang:') !!}
       <input type="text" name="Besaran_uang" class="form-control" required>
    </div>
     
   
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    @stop