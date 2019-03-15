@extends('template')

@section('judul')
Dashboard
@stop

@section('subjudul')
Ini adalah Dashboard
@stop

@section('content')
 <!-- Main content -->
 <section class="content">
 @if (session('status'))
  <div class="alert alert-success" role="alert">
      {{ session('status') }}
  </div>
@endif
@section('content')
   @include('tampilan')
@stop