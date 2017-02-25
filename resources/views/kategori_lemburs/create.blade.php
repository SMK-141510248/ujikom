@extends('layout/dua')
@section('content')



 <h1><center>Create Kategori Lembur</h1></center>
    {!! Form::open(['url' => 'kategori_lemburs']) !!}

    <div class="form-group">
        {!! Form::label('Kode Lembur', 'Kode Lembur:') !!}
        <input type="text" name="Kode_lembur" class="form-control" required>
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
        {!! Form::label('Besaran Uang', 'Besaran Uang:') !!}
       <input type="text" name="Besaran_uang" class="form-control" required>
    </div>
     
   
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    @stop