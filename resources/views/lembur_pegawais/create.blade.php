@extends('layout/dua')
@section('content')



 <h1><center>Create Lembur Pegawai</h1></center>
    {!! Form::open(['url' => 'lembur_pegawais']) !!}

     <div class="form-group">
        {!! Form::label('Kode Lembur', 'Kode Lembur:') !!}
    </div>
      <select class="form-control" name="Kode_lembur_id"><option>--Pilih Kode Lembur--</option>
            @foreach($kategori_lemburs as $data)
                <option value="{{$data->id}}">{{$data->Kode_lembur}} || {{$data->Jabatan->Nama_jabatan}} || {{$data->Golongan->Nama_golongan}}</option>
            @endforeach
            </select>
       

    <div class="form-group">
        {!! Form::label('Nama Pegawai', 'Nama Pegawai:') !!}
    </div>
      <select class="form-control" name="pegawai_id"><option>--Pilih Nama Pegawai--</option>
            @foreach($pegawais as $data)
                <option value="{{$data->id}}">{{$data->Nip}} || {{$data->user->name}} || {{ $data->Jabatan->Nama_jabatan }} || {{ $data->Golongan->Nama_golongan }}</option>
            @endforeach
            </select>

     <div class="form-group">
        {!! Form::label('Jumlah Jam', 'Jumlah Jam:') !!}
          <input type="text" name="Jumlah_jam" class="form-control" required>
    </div>
     
       
     
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    @stop