<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RouterDetails;

class RouterDetailController extends Controller
{

   /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
  }

  public function index()
  {
  	$data['rows']=RouterDetails::all();
    return view('router-details.index',$data);
  }



}