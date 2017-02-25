@extends('layout.dua')

@section('content')
          <br><br><br><br><br><br>
 <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <center><h2>Detail Penggajian</h2></center>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal">
        <div class="form-group">
            <label for="pegawai_id" class="col-sm-2 control-label">Pegawai</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="pegawai_id" placeholder="{{$penggajians->Pegawai->User->name}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Jumlah_jam_lembur" class="col-sm-2 control-label">Jumlah Jam Lembur</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Jumlah_jam_lembur" placeholder="{{$penggajians->Jumlah_jam_lembur}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Jumlah_uang_lembur" class="col-sm-2 control-label">Jumlah Uang Lembur</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Jumlah_uang_lembur" placeholder="{{$penggajians->Jumlah_uang_lembur}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Gaji_pokok" class="col-sm-2 control-label">Gaji Pokok</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Gaji_pokok" placeholder="{{$penggajians->Gaji_pokok}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Tanggal_pengambilan" class="col-sm-2 control-label">Tanggal Pengambilan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Tanggal_pengambilan" placeholder="{{$penggajians->Tanggal_pengambilan}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Status_pengambilan" class="col-sm-2 control-label">Status Pengambilan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Status_pengambilan" placeholder="{{$penggajians->Status_pengambilan}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Petugas_penerima" class="col-sm-2 control-label">Petugas Penerima</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Petugas_penerima" placeholder="{{$penggajians->Petugas_penerima}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('penggajians')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
    
@endsection
