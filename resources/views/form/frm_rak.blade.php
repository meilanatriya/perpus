@extends('template')

@section('judul')
Form Rak
@stop

@section('content')
<form id="frmRak" class="form-horizontal" action="{{ url('rak/save') }}" method="post">
    @csrf
    <div class="row">
        <div class="fFoto col-md-12">
            <div class="box">
            <div class="box-body">
                <div class="form-group">
                    <label for="rak" class="col-sm-2 control-label">Rak</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="kd_rak" value="{{ $rak['kd_rak'] }}">
                        <input type="text" class="form-control" id="rak" placeholder="Rak" name="nama_rak" value="{{ $rak['nama_rak'] }}">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">SAVE</button>
                </div>                   
            </div>
        </div>       
    </div>
</form>
@stop