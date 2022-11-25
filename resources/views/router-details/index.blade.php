@extends('layouts.master')
@section('content')
@section('title','Router Details List')

<div class="py-1">
  <div class="col-12">
    
    <div class="card card-body border-0 shadow mb-4" id="preview-excel">
      <div class="d-lg-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <div class="col-auto justify-content-between ps-0 mb-4 mb-lg-0">
          <h2 class="form-label">Router Details List</h2>
          <p class="mb-4 text-md font-weight-light">Manage below router list </p>
        </div>
     
      <div class="col-12 col-lg-6 d-flex justify-content-lg-end">
        
          <a class="btn btn-gray-800" href="{{route('home')}}">
           <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
            Upload Excel File
          </a>
        
      </div>
      </div>
      <hr>
      <table class="table user-table table-hover align-items-center mt-4">
         @if(isset($rows) && count($rows)>0)
        <thead>
          <tr>
            <th class="border-bottom">Action</th>
            <th class="border-bottom">Sapid</th>
            <th class="border-bottom">Hostname</th>
            <th class="border-bottom">Loopback</th>
            <th class="border-bottom">Mac Address</th>

          </tr>
          @endif
        </thead>
        <tbody>
          @if(isset($rows) && count($rows)>0)
          @foreach($rows as $key=>$rowsdata)


          <tr>

           <td>{{$key+1}}</td>
           <td>{{$rowsdata->sapid}}</td>
           <td>{{$rowsdata->hostname}}</td>
           <td>{{$rowsdata->loopback}}</td>
           <td>{{$rowsdata->mac_address}}</td>

          </tr>

          @endforeach
          @else

          <tr class="text-center"> <td colspan="5" class="bg-default border-0">No List Uploaded</td></tr>
          
          @endif
        </tbody>
      </table>
    </div>
  </div>


@endsection