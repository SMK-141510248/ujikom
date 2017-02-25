@extends('layout/app')
@section('content')

<h1><center>Kategori Lembur</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('kategori_lemburs/create')}}" class="btn btn-success">Create</a>
<div class="panel-body">
                <div class="form-group"><center>
                    <form action="{{url('kategori_lemburs')}}/?Kode_lembur=Kode_lembur">
                    <input type="text" name="Kode_lembur" placeholder="Search"></form>
                </center></div>	
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>NO</th>
<th>Kode Lembur</th>
<th>Kode Jabatan</th>
<th>Kode Golongan</th>
<th>Besaran Uang</th>
<th colspan="3"><center>Actions</th></center>
</tr>
</thead>
<tbody>
@if (count($kategori_lemburs))
<div class="card-panel green white-text">Hasil pencarian : <b>{{$kategori_lemburs}}</b></div>
@php
$no=1;
@endphp
@foreach($kategori_lemburs as $data)
<tr>
	<td>{{$no++}}</td>
	<td>{{$data->Kode_lembur}}</td>
	<td>{{$data->Jabatan->Kode_jabatan}}</td>
	<td>{{$data->Golongan->Kode_golongan}}</td>
	<td>{{$data->Besaran_uang}}</td>
	<td> <a href="{{url('kategori_lemburs',$data->id)}}" class="btn btn-primary">Read</a></td>
	<td> <a href="{{route('kategori_lemburs.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
	<td>
	{!! Form::open(['method'=>'DELETE','route'=>['kategori_lemburs.destroy', $data->id]]) !!}

	{!! Form::Submit('Delete',['class'=>'btn btn-danger']) !!}

	{!! Form::close() !!}
	</td>
	</tr>
	@endforeach
	</tbody>
</table>
{{$kategori_lemburs->links()}}
@else
   <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$kategori_lemburs}}</b> Tidak Ditemukan</div>
@endif
@endsection