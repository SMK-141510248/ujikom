@extends('layout.dua')

@section('content')
 <br><br><br><br><br><br>
 <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 <div class="col-md-12 col-sm-12 col-xs-12">
      <span class="help-block">
            {{$errors->first('tunjangan_pegawai_id')}}
          </span>
                                       <div>
                                           @if(isset($error))
                              <div class="alert alert-danger">Maaf Gaji Telah Diambil!</div>
                                           @endif
                                       </div>
                               </div>
                  <div class="x_title">
                    <center><h2>Edit Penggajian</h2></center>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
    {!! Form::model($data,['method' => 'PATCH','route'=>['penggajians.update',$data->id],'class' => 'form-horizontal form-label-left']) !!}
    <div id="pegawai">
    <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              {!! Form::label('Pegawai', 'Pegawai') !!}
           
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control col-md-7 col-xs-12" name="Kode_lembur_id">
               <option value="{{ $pselect->id }}" selected>{{ $pselect->Pegawai->Nip }} | {{ $pselect->Pegawai->User->name }}</option>
            @foreach($pegawai as $data)
                <option value="{{$data->id}}">{{$data->Pegawai->Nip}} |{{$data->Pegawai->User->name}}</option>
            @endforeach
            </select>
        </div>
    </div>
      </div>
     <div class="form-group">
        <div class="control-label col-md-3 col-sm-3 col-xs-12">
            {!! Form::label('Jumlah Jam Lembur', 'Jumlah Jam Lembur ') !!}
           </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
           {!! Form::number('Jumlah_jam_lembur',null,['class'=>'form-control col-md-7 col-xs-12']) !!}
        </div>
    </div>
      <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              {!! Form::label('Jumlah Uang Lembur', 'Jumlah Uang Lembur') !!}
              
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::number('Jumlah_uang_lembur',null,['class'=>'form-control col-md-7 col-xs-12']) !!}
          </div>
      </div>
       <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              {!! Form::label('Gaji Pokok', 'Gaji Pokok') !!}
            
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::number('Gaji_pokok',null,['class'=>'form-control col-md-7 col-xs-12']) !!}
          </div>
      </div>
       <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              {!! Form::label('Total Gaji', 'Total Gaji') !!}
               
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::number('Total_gaji',null,['class'=>'form-control col-md-7 col-xs-12']) !!}
          </div>
      </div>
       <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              {!! Form::label('Tanggal Pengambilan', 'Tanggal Pengambilan') !!}
       
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::date('Tanggal_pengambilan',null,['class'=>'form-control col-md-7 col-xs-12']) !!}
          </div>
      </div>
       <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              {!! Form::label('Status Pengambilan', 'Status Pengambilan') !!}
           
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="Status_pengambilan" class="form-control">
                                    <option value="0">Belum Diambil</option>
                                    <option value="1">Sudah Diambil</option>
            </select>
          </div>
      </div>
       <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              {!! Form::label('Petugas Penerima', 'Petugas Penerima') !!}
            
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('Petugas_penerima',null,['class'=>'form-control col-md-7 col-xs-12']) !!}
          </div>
      </div>
      <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              {!! Form::submit('Save', ['class' => 'btn btn-success form-control']) !!}
          </div>
      </div>
    </div>
    {!! Form::close() !!}


@endsection