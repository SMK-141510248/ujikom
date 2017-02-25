@extends('layout/app')
@section('content')
<br><br>
<h1><center>Jabatan</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('jabatans/create')}}" class="btn btn-success">Create</a>
<div class="panel-body">
                <div class="form-group"><center>
                    <form action="{{url('jabatans')}}/?Nama_jabatan=Nama_jabatan">
                    <input type="text" name="Nama_jabatan" placeholder="Search"></form>
                </center></div>	
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>


<tr class="bg-info">
<th>NO</th>
<th>Kode Jabatan</th>
<th>Nama Jabatan</th>
<th>Besaran Uang</th>
<th colspan="3"><center>Actions</th></center>
</tr>
</thead>
<tbody>
@if (count($jabatans))
<div class="card-panel green white-text">Hasil pencarian : <b>{{$jabatans}}</b></div>
@php
$no=1;
@endphp
@foreach($jabatans as $data)
<tr>
	<td>{{$no++}}</td>
	<td>{{$data->Kode_jabatan}}</td>
	<td>{{$data->Nama_jabatan}}</td>
	<td>{{$data->Besaran_uang}}</td>
	<td> <a href="{{url('jabatans',$data->id)}}" class="btn btn-primary">Read</a></td>
	<td> <a href="{{route('jabatans.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
	<td>
	{!! Form::open(['method'=>'DELETE','route'=>['jabatans.destroy', $data->id]]) !!}

	{!! Form::Submit('Delete',['class'=>'btn btn-danger']) !!}

	{!! Form::close() !!}
	</td>
	</tr>
	@endforeach
	</tbody>
</table>
{{$jabatans->links()}}
@else
   <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$jabatans}}</b> Tidak Ditemukan</div>
@endif
@endsection