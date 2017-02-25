@extends('layout.dua')

@section('content') <div class="col-md-12 col-sm-12 col-xs-12">
      <span class="help-block">
            {{$errors->first('tunjangan_pegawai_id')}}
          </span>
                                       <div>
                                           @if(isset($error))
                              <div class="alert alert-danger">Maaf Gaji Telah Diambil!</div>
                                           @endif
                                       </div>
                               </div>
  <div class="container">
            <div class="row">
                    <center><h2>Input Penggajian</h2></center>
                    <br />
              {!! Form::open(['url' => 'penggajians', 'class' => 'form-horizontal form-label-left']) !!}
    <div class="form-group">
        <div class="control-label col-md-3 col-sm-3 col-xs-12">
            {!! Form::label('Pegawai', 'Pegawai ') !!}
      
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control col-md-7 col-xs-12" name="tunjangan_pegawai_id">
            <option>--NIP | Nama Pegawai--</option>
            @foreach($tunjangan as $data)
                <option value="{{$data->id}}">{{$data->Pegawai->Nip}}&nbsp;|&nbsp;{{$data->Pegawai->User->name}}</option>
            @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="control-label col-md-3 col-sm-3 col-xs-12">
            {!! Form::label('Status Pengambilan', 'Status Pengambialn ') !!}
           
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
             <select name="Status_pengambilan" class="form-control">
                                    <option value="0">Belum Diambil</option>
                                    <option value="1">Sudah Diambil</option>
            </select>
        </div>
    </div>
       <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              {!! Form::submit('Save', ['class' => 'btn btn-success form-control']) !!}
          </div>
      </div>
    </div>
    {!! Form::close() !!}
          </div>
          </div>     
    </div>
@endsection
