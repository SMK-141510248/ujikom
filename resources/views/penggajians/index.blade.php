@extends('layout/app')
@section('content')

<h1><center>Penggajian</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('penggajians/create')}}" class="btn btn-success">Create</a>
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
  <th><p class="center"><center>No.</center></p></th>
                          <th><p class="center"><center>Pegawai</center></p></th>
                          <th><p class="center"><center>Jumlah Jam Lembur</center></p></th>
                          <th><p class="center"><center>Jumlah Uang Lembur</center></p></p></th>
                          <th><p class="center"><center>Gaji Pokok</center></p></p></th>
                          <th><p class="center"><center>Total Gaji</center></p></p></th>
                          <th><p class="center"><center>Tanggal Pengambilan</center></p></p></th>
                          <th><p class="center"><center>Status Pengambilan</center></p></p></th>
                          <th><p class="center"><center>Petuga Penerima</center></p></p></th>
                          <th colspan="3"><p class="center"><center>Tindakan</center></p></th>
                        </tr>
                      </thead>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($gajian as $data)
                            <tbody>
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->Tunjangan_pegawai->Pegawai->User->name}}</td>
                                    <td>{{$data->Jumlah_jam_lembur}} </td>
                                    <td>{{$data->Jumlah_uang_lembur}} </td>
                                    <td>{{$data->Gaji_pokok}} </td>
                                    <td>{{$data->Total_gaji}} </td>
                                    <td>{{$data->updated_at}} </td>
                                    
                                    @if($data->Status_pengambilan == 0)
                                    
                                        <td>Belum Diambil </td>
                                    
                                    @endif
                                    @if($data->Status_pengambilan == 1)
                                    
                                        <td>Sudah Diambil</td>
                                    
                                    @endif
                                  <td>{{$data->Petugas_penerima}} </td>

	<td> <a href="{{url('penggajians',$data->id)}}" class="btn btn-primary">Read</a></td>
	<td> <a href="{{route('penggajians.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
	<td>
	{!! Form::open(['method'=>'DELETE','route'=>['penggajians.destroy', $data->id]]) !!}

	{!! Form::Submit('Delete',['class'=>'btn btn-danger']) !!}

	{!! Form::close() !!}
	</td>
	</tr>
	@endforeach
	</tbody>
</table>
@endsection