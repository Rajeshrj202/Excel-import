@extends('layouts.master')
@section('content')
@section('title','Excel Sheet Import')

<div class="py-1">


  <div class="col-12">
    <div class="card card-body border-0 shadow mb-4" id="preview-excel">

      <div class="d-lg-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <div class="col-auto justify-content-between ps-0 mb-4 mb-lg-0">

          <h2 class="form-label">Router Details Data</h2>
          <p class="mb-4 text-md font-weight-light">Manage router list </p>

        </div>
        <div class="col-12 col-lg-6 d-flex justify-content-lg-end">
          <div class="btn-group">
            <button class="btn btn-gray-800" id="store-excel" type="button">
              <svg class="icon icon-md me-2 text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              Save Excel File
            </button>
          </div>
        </div>
      </div>
      <table class="table user-table table-hover align-items-center mt-4">
        <thead>
          <tr>
            <th class="border-bottom">Action</th>
            <th class="border-bottom">Sapid</th>
            <th class="border-bottom">Hostname</th>
            <th class="border-bottom">Loopback</th>
            <th class="border-bottom">Mac Address</th>

          </tr>
        </thead>
        <tbody>
          @if(isset($rows) && count($rows)>0)
          @foreach($rows as $key=>$rowsdata)


          <tr>

           <td>{{$key+1}}</td>
           <td>{{$rowsdata->sapid}}</td>
           <td>{{$rowsdata->hostname}}</td>
           <td>{{$rowsdata->loopback}}</td>
           <td>{{$rowsdata->mac_address}</td>

          </tr>

          @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </div>
</div>