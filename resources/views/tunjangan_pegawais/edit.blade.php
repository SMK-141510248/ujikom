@extends('layout/dua')
@section('content')
<h1><center>Update Data Tunjangan Pegawai</h1></center>
    {!! Form::model($tunjangan_pegawais,['method' => 'PATCH','route'=>['tunjangan_pegawais.update',$tunjangan_pegawais->id]]) !!}
 
     <div class="form-group">
        {!! Form::label('Kode Tunjangan', 'Kode Tunjangan:') !!}
    </div>
      <select class="form-control" name="Kode_tunjangan_id"><option>--Pilih Nama Tunjangan--</option>
            @foreach($tunjangans as $data)
                <option value="{{$data->id}}">{{$data->Kode_tunjangan}}</option>
            @endforeach
            </select>

     <div class="form-group">
        {!! Form::label('Pegawai', 'Pegawai:') !!}
    </div>
      <select class="form-control" name="pegawai_id"><option>--Pilih Nama Pegawai--</option>
            @foreach($pegawais as $data)
                <option value="{{$data->id}}">{{$data->User->name}}</option>
            @endforeach
            </select>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    @stop