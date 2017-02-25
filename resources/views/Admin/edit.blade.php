@extends('layout.dua')

@section('content')
 <br><br><br><br><br><br>

                    <br />
    {!! Form::model($Admin,['method' => 'PATCH','route'=>['Admin.update',$Admin->id],'class' => 'form-horizontal form-label-left']) !!}
    <div id="pegawai">
      <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              {!! Form::label('Nama', 'Nama ') !!}
               <span class="required">*</span>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('name',null,['class'=>'form-control col-md-7 col-xs-12']) !!}
          </div>
      </div>
      <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              {!! Form::label('Email', 'Email ') !!}
               <span class="required">*</span>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('email',null,['class'=>'form-control col-md-7 col-xs-12']) !!}
          </div>
      </div>
            <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              {!! Form::label('Permission', 'Permission ') !!}
               <span class="required">*</span>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control col-md-7 col-xs-12" name="permission" id="permission" required>
                <option value="Admin">Admin</option>
                <option value="HRD">HRD</option>
                <option value="Bendahara">Bendahara</option>
                <option value="Pegawai">Pegawai</option>
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


@endsection