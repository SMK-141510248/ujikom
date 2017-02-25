@extends('layout/dua')
@section('content')

{!! Form::close() !!}

 <h1><center>Create Golongan</h1></center>
    {!! Form::open(['url' => 'golongans']) !!}
    <div class="form-group">
        {!! Form::label('Kode Golongan', 'Kode Golongan:') !!}
      <input type="text" name="Kode_golongan" class="form-control" required>
    </div>

     <div class="form-group">
        {!! Form::label('Nama Golongan', 'Nama Golongan:') !!}
      <input type="text" name="Nama_golongan" class="form-control" required>
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