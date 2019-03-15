@extends('template')

@section('judul')
Data Rak
@stop

@section('content')

<div class="box">
    <div class="box-header">
        <a href="{{ url('rak/add') }}"><button type="button" class="btn bg-green btn-flat margin">Add New</button></a>
    </div> 
    <div class="box-body">
        <table id="data" class=" table table-bordered table striped">  
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama rak</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rak as $rsRak)
                <tr>
                    <td>{{ $rsRak->kd_rak }}</td>
                    <td>{{ $rsRak->nama_rak }}</td>                    
                    <td>

                        <a href="{{ url('rak/edit',$rsRak->kd_rak) }}"><button type="button" class="btn bg-yellow btn-flat"><i class="fa fa-pencil"></i></button></a>
                        <a href="{{ url('rak/delete',$rsRak->kd_rak) }}"><button type="button" class="btn bg-red btn-flat"><i class="fa fa-trash"></i></button></a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop