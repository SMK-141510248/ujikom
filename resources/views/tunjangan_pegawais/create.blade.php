@extends('layout/dua')
@section('content')



 <h1><center>Create Tunjangan Pegawai</h1></center>
    {!! Form::open(['url' => 'tunjangan_pegawais']) !!}

     <div class="form-group">
        {!! Form::label('Kode Tunjangan', 'Kode Tunjangan:') !!}
    </div>
      <select class="form-control" name="Kode_tunjangan_id"><option>--Pilih Kode Tunjangan--</option>
            @foreach($tunjangans as $data)
                <option value="{{$data->id}}">{{$data->Kode_tunjangan}}</option>
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
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    @stop