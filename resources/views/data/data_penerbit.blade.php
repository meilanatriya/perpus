@extends('template')

@section('judul')
Data Penerbit
@stop

@section('content')

<div class="box">
    <div class="box-header">
        <a href="{{ url('penerbit/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div> 
    <div class="box-body">
        <table id="data" class=" table table-bordered table striped">  
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Penerbit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penerbit as $rsPenerbit)
                <tr>
                    <td>{{ $rsPenerbit->kd_penerbit }}</td>
                    <td>{{ $rsPenerbit->nama_penerbit }}</td>                    
                    <td>

                        <a href="{{ url('penerbit/edit',$rsPenerbit->kd_penerbit) }}"><button type="button" class="btn bg-yellow btn-flat"><i class="fa fa-pencil"></i></button></a>
                        <a href="{{ url('penerbit/delete',$rsPenerbit->kd_penerbit) }}"><button type="button" class="btn bg-red btn-flat"><i class="fa fa-trash"></i></button></a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop