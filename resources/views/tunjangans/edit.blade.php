@extends('layout/dua')
@section('content')
<h1>Update Data Tunjangan</h1>
    {!! Form::model($tunjangans,['method' => 'PATCH','route'=>['tunjangans.update',$tunjangans->id]]) !!}
    <div class="form-group">
        {!! Form::label('Kode Tunjangan ', 'Kode Tunjangan :') !!}
        {!! Form::text('Kode_tunjangan',null,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('Jabatan', 'Jabatan:') !!}
    </div>
      <select class="form-control" name="jabatan_id"><option>--Pilih Nama Jabatan--</option>
            @foreach($jabatans as $data)
                <option value="{{$data->id}}">{{$data->Nama_jabatan}}</option>
            @endforeach
            </select>

     <div class="form-group">
        {!! Form::label('Golongan', 'Golongan:') !!}
    </div>
      <select class="form-control" name="golongan_id"><option>--Pilih Nama Golongan--</option>
            @foreach($golongans as $data)
                <option value="{{$data->id}}">{{$data->Nama_golongan}}</option>
            @endforeach
            </select>

<div class="form-group">
        {!! Form::label('Status', 'Status:') !!}
        {!! Form::text('Status',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Jumlah Anak', 'Jumlah Anak:') !!}
        {!! Form::text('Jumlah_anak',null,['class'=>'form-control']) !!}
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