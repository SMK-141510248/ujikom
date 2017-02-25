@extends('layout/dua')
@section('content')
 <h1><center>Lembur Pegawai</h1></center>

    <form class="form-horizontal">
         <form class="form-horizontal">
        <div class="form-group">
            <label for="Kode_lembur" class="col-sm-2 control-label">Kode Lembur</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Kode_lembur" placeholder="<?php echo e($lembur_pegawais->Kategori_lembur->Kode_lembur); ?>" readonly>
            </div>
        </div>
       
       <div class="form-group">
            <label for="jabatan_id" class="col-sm-2 control-label">Kode Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="jabatan_id" placeholder="<?php echo e($lembur_pegawais->Kategori_lembur->Jabatan->Kode_jabatan); ?>" readonly>
            </div>
        </div>
                <div class="form-group">
            <label for="jabatan_id" class="col-sm-2 control-label">Nama Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="jabatan_id" placeholder="<?php echo e($lembur_pegawais->Kategori_lembur->Jabatan->Nama_jabatan); ?>" readonly>
            </div>
        </div>
           <div class="form-group">
            <label for="golongan_id" class="col-sm-2 control-label">Kode Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="golongan_id" placeholder="<?php echo e($lembur_pegawais->Kategori_lembur->Golongan->Kode_golongan); ?>" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="golongan_id" class="col-sm-2 control-label">Nama Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="golongan_id" placeholder="<?php echo e($lembur_pegawais->Kategori_lembur->Golongan->Nama_golongan); ?>" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="Nip" class="col-sm-2 control-label">Kode Pegawai</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Nip" placeholder="<?php echo e($lembur_pegawais->Pegawai->Nip); ?>" readonly>
            </div>
        </div>
          <div class="form-group">
            <label for="user_id" class="col-sm-2 control-label">Nama Pegawai</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="user_id" placeholder="<?php echo e($lembur_pegawais->Pegawai->User->name); ?>" readonly>
            </div>
        </div>
          <div class="form-group">
            <label for="jabatan_id" class="col-sm-2 control-label">Nama jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="jabatan_id" placeholder="<?php echo e($lembur_pegawais->Pegawai->Jabatan->Nama_jabatan); ?>" readonly>
            </div>
        </div>
            <div class="form-group">
            <label for="golongan_id" class="col-sm-2 control-label">Nama Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="golongan_id" placeholder="<?php echo e($lembur_pegawais->Pegawai->Golongan->Nama_golongan); ?>" readonly>
            </div>
        </div>
         <div class="form-group">
            <label for="Besaran_uang" class="col-sm-2 control-label">Besaran Uang Kategori lembur</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Besaran_uang" placeholder="<?php echo e($lembur_pegawais->Kategori_lembur->Besaran_uang); ?>" readonly>
            </div>
        </div>
        

         <div class="form-group">
            <label for="Jumlah_jam" class="col-sm-2 control-label">Jumlah Jam</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Jumlah_jam" placeholder="<?php echo e($lembur_pegawais->Jumlah_jam); ?>" readonly>
            </div>
        </div>
        
          
            <div class="form-group">
            <label for="Besaran_uang" class="col-sm-2 control-label">Jumlah Besaran uang</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Besaran_uang" placeholder="<?php echo e($lembur_pegawais->Kategori_lembur->Besaran_uang *$lembur_pegawais->Jumlah_jam); ?>" readonly>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <a href="{{ url('lembur_pegawais')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
    @stop