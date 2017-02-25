@extends('layout/dua')
@section('content')
<h1>Update Data Lembur Pegawai</h1>
    {!! Form::model($lembur_pegawais,['method' => 'PATCH','route'=>['lembur_pegawais.update',$lembur_pegawais->id]]) !!}
   
     <div class="form-group">
        {!! Form::label('Kode Lembur', 'Kode Lembur:') !!}
    </div>
      <select class="form-control" name="Kode_lembur_id"><option>--Pilih Kode Lembur--</option>
            @foreach($kategori_lemburs as $data)
                <option value="{{$data->id}}">{{$data->Kode_lembur}}</option>
            @endforeach
            </select>

     <div class="form-group">
        {!! Form::label('Nama Pegawai', 'Nama Pegawai:') !!}
    </div>
      <select class="form-control" name="pegawai_id"><option>--Pilih Nama Pegawai--</option>
            @foreach($pegawais as $data)
                <option value="{{$data->id}}">{{$data->User->name}}</option>
            @endforeach
            </select>

     <div class="form-group">
        {!! Form::label('Jumlah Jam', 'Jumlah Jam:') !!}
        {!! Form::text('Jumlah_jam',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    @stop