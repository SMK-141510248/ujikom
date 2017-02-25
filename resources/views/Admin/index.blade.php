@extends('layout/app')
@section('content')
<h1><center>User</h1></center>


<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>NO</th>
<th>Nama</th>
<th>Email</th>
<th>password</th>
<th>Permission</th>
<th colspan="3"><center>Actions</th></center>
</tr>
</thead>
<tbody>
@php
$no=1;
@endphp
<tbody>
@foreach($Admin as $data)
<tr>
    <td>{{$data->id}}</td>
    <td>{{$data->name}}</td>
     <td>{{$data->email}}</td>
      <td>{{$data->password}}</td>
    <td>{{$data->permission}}</td>
  <td> <a href="{{url('Admin',$data->id)}}" class="btn btn-primary">Read</a></td>
    <td> <a href="{{route('Admin.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
    <td>
    {!! Form::open(['method'=>'DELETE','route'=>['Admin.destroy', $data->id]]) !!}

    {!! Form::Submit('Delete',['class'=>'btn btn-danger']) !!}

    {!! Form::close() !!}
    </td>
    </tr>
    @endforeach
    </tbody>
</table>


@endsection