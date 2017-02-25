@extends('layout/dua')
@section('content')



 <h1><center>Create Jabatan</h1></center>
    {!! Form::open(['url' => 'jabatans']) !!}
    <div class="form-group">
        {!! Form::label('Kode Jabatan', 'Kode Jabatan:') !!}
        <input type="text" name="Kode_jabatan" class="form-control" required>
    </div>

     <div class="form-group">
        {!! Form::label('Nama Jabatan', 'Nama Jabatan:') !!}
       <input type="text" name="Nama_jabatan" class="form-control" required>
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