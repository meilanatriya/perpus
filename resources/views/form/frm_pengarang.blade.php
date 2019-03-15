@extends('template')

@section('judul')
Form Pengarang
@stop

@section('content')
<form id="frmPengarang" class="form-horizontal" action="{{ url('pengarang/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="fFoto col-md-12">
            <div class="box">
            <div class="box-body">
                <div class="form-group">
                    <label for="pengarang" class="col-sm-2 control-label">pengarang</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="kd_pengarang" value="{{ $pengarang['kd_pengarang'] }}">
                        <input type="text" class="form-control" id="pengarang" placeholder="pengarang" name="nama_pengarang" value="{{ $pengarang['nama_pengarang'] }}">
                     </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">SAVE</button>
                </div>                   
            </div>
        </div>       
    </div>
</form>
@stop