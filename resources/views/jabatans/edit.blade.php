@extends('layout/dua')
@section('content')
<h1>Update Data Jabatan</h1>
    {!! Form::model($jabatans,['method' => 'PATCH','route'=>['jabatans.update',$jabatans->id]]) !!}
    <div class="form-group">
        {!! Form::label('Kode Jabatan ', 'Kode Jabatan :') !!}
        {!! Form::text('Kode_jabatan',null,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('Nama Jabatan', 'Nama Jabatan:') !!}
        {!! Form::text('Nama_jabatan',null,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('Besaran Uang', 'Besaran Uang:') !!}
        {!! Form::text('Besaran_uang',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    @stop