  <form method="post" enctype="multipart/form-data" id="verify-excel" name="verify-excel">
  @csrf
  <div class="d-lg-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
  <div class="col-auto justify-content-between ps-0 mb-4 mb-lg-0">
    
     <h2  class="form-label">Excel Sheet Preview</h2>
     <p class="mb-4 text-md font-weight-light">Edit/Update Excel Rows and Click on the "Save" to save the data.</p>
     <p class="text-md font-weight-light text-danger">Note*</p>
     <p class="text-xs font-weight-light text-danger m-0"> Sapid : should be unique,Maximum 18 Character.</p>
     <p class="text-xs font-weight-light text-danger m-0"> Hostname : should be unique,Maximum 14 Character.</p>
     <p class="text-xs font-weight-light text-danger m-0"> Loopback : should be unique,Ipv4 Regex.</p>
     <p class="text-xs font-weight-light text-danger m-0"> Mac Address : should be unique,Mac Address Format Regex.</p>

  </div>
  <div class="col-12 col-lg-6 d-flex justify-content-lg-end">
    <div class="btn-group">
      <button class="btn btn-gray-800" id="store-excel" type="button">
        <svg class="icon icon-md me-2 text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
        Save Excel File
      </button>
    </div>
  </div>
</div>
  <table class="table user-table table-hover align-items-center mt-4">
    <thead>
      <tr>
        <th class="border-bottom">Action</th>
        <th class="border-bottom">Excel Row</th>
        <th class="border-bottom">Sapid</th>
        <th class="border-bottom">Hostname</th>
        <th class="border-bottom">Loopback</th>
        <th class="border-bottom">Mac Address</th>
        
      </tr>
    </thead>
    <tbody>
      @if(isset($rows[0]) && count($rows[0])>0)
        @foreach($rows[0] as $key=>$rowsdata)

         
          <tr>

            <td>
              <a class="align-items-center make-noneditable hide-field" data-bs-toggle="tooltip" data-bs-original-title="Update Row" title="Update">
                <svg class="icon icon-md me-2 text-success"  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" ><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
              </a>
              <a class="align-items-center make-editable" data-bs-toggle="tooltip" data-bs-original-title="Edit Row" title="Edit Row">
                <svg class="icon icon-xs me-2 text-dark"  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" >
                  <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                  <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                </svg>
              </a>
              <a class="align-items-center make-delete" data-bs-toggle="tooltip" data-bs-original-title="Delete Row" title="Delete Row" >
                <svg class="icon icon-xs text-danger ms-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-label="Delete"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
              </a>
             
            </td>
            <td >
              {{$key+2}}
            </td>
            <td>
              @if(isset($errorinfo[$key]['sapid']))
              <a  data-bs-toggle="tooltip" data-bs-placement="top" title="sapid field is {{$errorinfo[$key]['sapid']}}" type="button"><svg  class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
              </a>
              @endif
              <input class="p-0 row-excel non-editable @if(isset($errorinfo[$key]['sapid']))color-{{$errorinfo[$key]['sapid']}}@endif" type="text"  name="excelfile[0][{{$key}}][sapid]" value="{{$rowsdata['sapid']}}" >
            </td>

            <td>
              @if(isset($errorinfo[$key]['hostname']))
              <a data-bs-toggle="tooltip" data-bs-placement="top" title="hostname field is {{$errorinfo[$key]['hostname']}}" type="button"><svg  class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
              </a>
              @endif

              <input class="p-0 row-excel non-editable @if(isset($errorinfo[$key]['hostname']))color-{{$errorinfo[$key]['hostname']}}@endif"  type="text"  name="excelfile[0][{{$key}}][hostname]" value="{{$rowsdata['hostname']}}">
            </td>

            <td>
              @if(isset($errorinfo[$key]['loopback']))
              <a data-bs-toggle="tooltip" data-bs-placement="top" title="loopback field is {{$errorinfo[$key]['loopback']}}" type="button"><svg  class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
              </a>
              @endif
              <input class="p-0 row-excel non-editable @if(isset($errorinfo[$key]['loopback']))color-{{$errorinfo[$key]['loopback']}}@endif" type="text"  name="excelfile[0][{{$key}}][loopback]" value="{{$rowsdata['loopback']}}">
            </td>

            <td>
              @if(isset($errorinfo[$key]['mac_address']))
              <a data-bs-toggle="tooltip" data-bs-placement="top" title="mac_address field is {{$errorinfo[$key]['mac_address']}}" type="button"><svg  class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
              </a>
              @endif
              <input class="p-0 row-excel non-editable @if(isset($errorinfo[$key]['mac_address']))color-{{$errorinfo[$key]['mac_address']}}@endif"  type="text"  name="excelfile[0][{{$key}}][mac_address]" value="{{$rowsdata['mac_address']}}">
            </td>
             
          </tr>
         
        @endforeach
      @endif
    </tbody>
  </table>
</form>