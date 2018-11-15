<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use PDF;  

class NikahController extends Controller
{
  public function index() {
	  return view('index');
  }

  public function cetak(Request $request){
    $req = $request->all();

    $result = User::create($req);

    $data['data'] = User::where('id',$result->id)->first();

    $pdf = \App::make('dompdf.wrapper');
    $pdf = PDF::loadView('cetak',$data)->setPaper('a4', 'landscape');
    return $pdf->stream();
  }
}