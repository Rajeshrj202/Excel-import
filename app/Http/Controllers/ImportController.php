<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ImportStoreRequest;
use App\Http\Controllers\Controller;
use App\Imports\ImportRouterDetails;
use App\Models\RouterDetails;
use App\Services\ValidateExcelService;
use Excel;
use DB;

class ImportController extends Controller
{
  
  public $validatexcel;

  public function __construct(ValidateExcelService $validatexcel)
  {
    $this->validatexcel=$validatexcel;
  }



  public function index()
  {
    return view('import.upload');
  }



  public function upload(ImportStoreRequest $request)
  {

    $validated = $request->validated();
    $rows = Excel::toArray(new ImportRouterDetails, $request->file('excel'));
    $errors = $this->validatexcel->validateArray($rows);
    $data['errorinfo'] = $errors;
    $data['rows'] = $rows;
    $html = view('import.rows', $data)->render();

    return response()->json(["html" => $html, 'status' => true], 200);
  }




  public function verify(Request $request)
  {

    $errors = $this->validatexcel->validateArray($request->excelfile);
    $data['errorinfo'] = $errors;
    $data['rows'] = $request->excelfile;
    $html = view('import.rows', $data)->render();

    return response()->json(["html" => $html, 'status' => true], 200);
  }





  public function store(Request $request)
  {
    try {

      $errors = $this->validatexcel->validateArray($request->excelfile);
      $rows = $request->excelfile;
      $data['errorinfo'] = $errors;
      $data['rows'] = $request->excelfile;

      if(count($errors)>0):
         $html = view('import.rows', $data)->render();
         return response()->json(["html" => $html, 'status' => false], 200);
      endif;

      DB::beginTransaction();

      if (isset($rows[0]) && count($rows[0]) > 0) :

        foreach ($rows[0] as $key => $value) :
          RouterDetails::create($value);
        endforeach;

      endif;


      DB::commit();


      return response()->json(['status' => true,'redirect'=>route('router.details.index')], 200);

    } 
    catch (\Exception $e) 
    {
      DB::rollback();
      return response()->json(["error" => $e->getMessage(), 'status' => false], 500);
    }
  }
}
