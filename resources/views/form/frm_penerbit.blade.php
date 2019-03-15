@extends('template')

@section('judul')
Form Penerbit
@stop

@section('content')
<form id="frmPenerbit" class="form-horizontal" action="{{ url('penerbit/save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="fFoto col-md-12">
            <div class="box">
            <div class="box-body">
                <div class="form-group">
                    <label for="penerbit" class="col-sm-2 control-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="kd_penerbit" value="{{ $penerbit['kd_penerbit'] }}">
                        <input type="text" class="form-control" id="penerbit" placeholder="penerbit" name="nama_penerbit" value="{{ $penerbit['nama_penerbit'] }}">
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