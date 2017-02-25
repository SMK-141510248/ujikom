@extends('layout.dua')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Pegawai</div>
                <div class="panel-body">
                <hr>
                    <form class="form-horizontal">
                        <div class="form-group{{ $errors->has('Nip') ? ' has-error' : '' }}">
                            <label for="Nip" class="col-md-4 control-label">NIP</label>
                            <div class="col-md-6">
                                <input id="Nip" type="text" class="form-control" name="Nip" value="{{ $pegawais->Nip }}" readonly required autofocus>
                            </div>
                        </div>
                      <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                            <label for="user_id" class="col-md-4 control-label">Nama User</label>
                            <div class="col-md-6">
                                <input id="user_id" type="text" class="form-control" name="user_id" value="{{ $pegawais->User->name }}" readonly required autofocus>
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                            <label for="jabatan_id" class="col-md-4 control-label">Kode Jabatan</label>
                            <div class="col-md-6">
                                <input id="jabatan_id" type="text" class="form-control" name="jabatan_id" value="{{ $pegawais->Jabatan->Kode_jabatan }}" readonly required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                            <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan</label>
                            <div class="col-md-6">
                                <input id="jabatan_id" type="text" class="form-control" name="jabatan_id" value="{{ $pegawais->Jabatan->Nama_jabatan }}" readonly required autofocus>
                            </div>
                        </div>
                              <div class="form-group{{ $errors->has('Besaran_uang') ? ' has-error' : '' }}">
                            <label for="Besaran_uang" class="col-md-4 control-label">Besaran uang Jabatan</label>
                            <div class="col-md-6">
                                <input id="Besaran_uang" type="text" class="form-control" name="Besaran_uang" value="{{ $pegawais->Jabatan->Besaran_uang }}" readonly required autofocus>
                            </div>
                        </div>
                          
                        <div class="form-group{{ $errors->has('golongan_id') ? ' has-error' : '' }}">
                            <label for="golongan_id" class="col-md-4 control-label">Kode Golongan</label>
                            <div class="col-md-6">
                                <input id="golongan_id" type="text" class="form-control" name="golongan_id" value="{{ $pegawais->Golongan->Kode_golongan }}" readonly required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('golongan_id') ? ' has-error' : '' }}">
                            <label for="golongan_id" class="col-md-4 control-label">Nama Golongan</label>
                            <div class="col-md-6">
                                <input id="golongan_id" type="text" class="form-control" name="golongan_id" value="{{ $pegawais->Golongan->Nama_golongan }}" readonly required autofocus>
                            </div>
                        </div>
                               <div class="form-group{{ $errors->has('Besaran_uang') ? ' has-error' : '' }}">
                            <label for="Besaran_uang" class="col-md-4 control-label">Besaran Uang Golongan</label>
                            <div class="col-md-6">
                                <input id="Besaran_uang" type="text" class="form-control" name="Besaran_uang" value="{{ $pegawais->Golongan->Besaran_uang }}" readonly required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('Photo') ? ' has-error' : '' }}">
                            <label for="Photo" class="col-md-4 control-label">Photo</label>
                            <div class="col-md-6">
                                <img src="{{asset('/image/'.$pegawais->Photo)}}"  height="100px" width="100px" class="image-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="/pegawais" type="submit" class="btn btn-primary">
                                    Kembali
                                </a>
                            </div>
                        </div>
                    </form>
               </div>
           </div>
       </div>
    </div>
</div>  
@endsection