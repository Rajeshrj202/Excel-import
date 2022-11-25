 <form action="{{route('excel.upload')}}" method="post" enctype="multipart/form-data" id="upload-excel" name="upload-excel">

      @csrf
      <div class="row">
        
      <h6 class="text-xs text-danger mb-2"> Note* :  Please use given sample excel header format </h6>
      <div class="col-md-6 mb-3">
        <label for="formFile" class="form-label">Please Upload Your Excel Sheet </label>

        <input class="form-control" type="file" id="fileexcel" name="excel">
        @if ($errors->has('excel'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('excel') }}</strong>
        </span>
        @endif
      </div>

      <div class="col-md-6 mt-4">
        <button class="btn btn-gray-800 mt-2 animate-up-2"  type="submit">Upload</button>
        <a class="btn btn-gray-800 mt-2 animate-up-2" href="https://exportexcel.rajesh.fun/public/RouterDetails.xlsx"  type="button">Sample Excel Download</a>
      </div>
     

      
    </form>