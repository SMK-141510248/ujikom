@extends('layout/dua')
@section('content')
<h1>Update Data Golongan</h1>
    {!! Form::model($golongans,['method' => 'PATCH','route'=>['golongans.update',$golongans->id]]) !!}
    <div class="form-group">
        {!! Form::label('Kode Golongan ', 'Kode Golongan :') !!}
        {!! Form::text('Kode_golongan',null,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('Nama Golongan', 'Nama Golongan:') !!}
        {!! Form::text('Nama_golongan',null,['class'=>'form-control']) !!}
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