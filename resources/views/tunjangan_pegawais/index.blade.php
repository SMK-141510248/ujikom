@extends('layout/app')
@section('content')

<h1><center>Tunjangan Pegawai</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('tunjangan_pegawais/create')}}" class="btn btn-success">Create</a>
<div class="panel-body">
                <div class="form-group"><center>
                    <form action="{{url('tunjangan_pegawais')}}/?pegawai_id=pegawai_id">
                    <input type="text" name="pegawai_id" placeholder="Search"></form>
                </center></div>	
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>NO</th>
<th>Kode Tunjangan</th>
<th>Kode Pegawai</th>
<th colspan="3"><center>Actions</th></center>
</tr>
</thead>
<tbody>
@if (count($tunjangan_pegawais))
<div class="card-panel green white-text">Hasil pencarian : <b>{{$tunjangan_pegawais}}</b></div>
@php
$no=1;
@endphp
@foreach($tunjangan_pegawais as $data)
<tr>
	<td>{{$no++}}</td>
	<td>{{$data->Tunjangans->Kode_tunjangan}}</td>
	<td>{{$data->Pegawai->Nip}}</td>
	<td> <a href="{{url('tunjangan_pegawais',$data->id)}}" class="btn btn-primary">Read</a></td>
	<td> <a href="{{route('tunjangan_pegawais.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
	<td>
	{!! Form::open(['method'=>'DELETE','route'=>['tunjangan_pegawais.destroy', $data->id]]) !!}

	{!! Form::Submit('Delete',['class'=>'btn btn-danger']) !!}

	{!! Form::close() !!}
	</td>
	</tr>
	@endforeach
	</tbody>
</table>
{{$tunjangan_pegawais->links()}}
@else
   <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$tunjangan_pegawais}}</b> Tidak Ditemukan</div>
@endif
@endsection