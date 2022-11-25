@extends('layouts.master')
@section('content')
@section('title','Excel Sheet Import')

<div class="py-1">


    <div class="col-12">
    <div class="card card-body border-0 shadow mb-4" id="preview-excel">
     
      @if(isset($rows) && count($rows)>0)
      @include('import.rows')
      @else
      @include('import.form')
      @endif

    </div>
  
  </div>

</div>

@endsection