@extends('layout/app')
@section('content')
<h1><center>Golongan</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('golongans/create')}}" class="btn btn-success">Create</a>
<div class="panel-body">
                <div class="form-group"><center>
                    <form action="{{url('golongans')}}/?Nama_golongan=Nama_golongan">
                    <input type="text" name="Nama_golongan" placeholder="Search"></form>
                </center></div>	
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>


<tr class="bg-info">
<th>NO</th>
<th>Kode Golongan</th>
<th>Nama Golongan</th>
<th>Besaran Uang</th>
<th colspan="3"><center>Actions</th></center>
</tr>
</thead>
<tbody>
@if (count($golongans))
<div class="card-panel green white-text">Hasil pencarian : <b>{{$golongans}}</b></div>
@php
$no=1;
@endphp
@foreach($golongans as $data)
<tr>
	<td>{{$no++}}</td>
	<td>{{$data->Kode_golongan}}</td>
	<td>{{$data->Nama_golongan}}</td>
	<td>{{$data->Besaran_uang}}</td>
	<td> <a href="{{url('golongans',$data->id)}}" class="btn btn-primary">Read</a></td>
	<td> <a href="{{route('golongans.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
	<td>
	{!! Form::open(['method'=>'DELETE','route'=>['golongans.destroy', $data->id]]) !!}

	{!! Form::Submit('Delete',['class'=>'btn btn-danger']) !!}

	{!! Form::close() !!}
	</td>
	</tr>
	@endforeach
	</tbody>
</table>
{{$golongans->links()}}
@else
   <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$golongans}}</b> Tidak Ditemukan</div>
@endif

@endsection