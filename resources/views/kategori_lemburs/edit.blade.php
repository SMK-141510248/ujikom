@extends('layout/dua')
@section('content')
<h1>Update Data Kategori lembur</h1>
    {!! Form::model($kategori_lemburs,['method' => 'PATCH','route'=>['kategori_lemburs.update',$kategori_lemburs->id]]) !!}
    <div class="form-group">
        {!! Form::label('Kode Lembur ', 'Kode Lembur :') !!}
        {!! Form::text('Kode_lembur',null,['class'=>'form-control']) !!}
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
        {!! Form::label('Besaran Uang', 'Besaran Uang:') !!}
        {!! Form::text('Besaran_uang',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    @stop