@extends('layout/app')
@section('content')
<h1><center>Pegawai</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('pegawais/create')}}" class="btn btn-success">Create</a>
<div class="panel-body">
                <div class="form-group"><center>
                    <form action="{{url('pegawais')}}/?Nip=Nip">
                    <input type="text" name="Nip" placeholder="Search"></form>
                </center></div>	
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>


<tr class="bg-info">
<th>NO</th>
<th>NIP</th>
<th>Nama User</th>
<th>Kode Jabatan</th>
<th>Kode Golongan</th>
<th>Photo</th>
<th colspan="3"><center>Actions</th></center>
</tr>
</thead>
<tbody>
@if (count($pegawais))
<div class="card-panel green white-text">Hasil pencarian : <b>{{$pegawais}}</b></div>
@php
$no=1;
@endphp
@foreach($pegawais as $data)
<tr>
	<td>{{$no++}}</td>
	<td>{{$data->Nip}}</td>
	<td>{{$data->User->name}}</td>
	<td>{{$data->Jabatan->Kode_jabatan}}</td>
	<td>{{$data->Golongan->Kode_golongan}}</td>
	<td><img src="{{asset('/image/'.$data->Photo)}}" height="100px" width="100px"></td>
	<td> <a href="{{url('pegawais',$data->id)}}" class="btn btn-primary">Read</a></td>
	<td> <a href="{{route('pegawais.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
	<td>
	{!! Form::open(['method'=>'DELETE','route'=>['pegawais.destroy', $data->id]]) !!}

	{!! Form::Submit('Delete',['class'=>'btn btn-danger']) !!}

	{!! Form::close() !!}
	</td>
	</tr>
	@endforeach
	</tbody>
</table>
{{$pegawais->links()}}
@else
   <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$pegawais}}</b> Tidak Ditemukan</div>
@endif
@endsection