<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\file_uploads;
use App\Models\licitacoes;
use Illuminate\Http\Request;

class AdmController extends Controller{
    public function adicionarpdf(){
      $licitacao = licitacoes::all()->sortBy('id');
      return view('adm/pdf',['licitacao'=>$licitacao]);
    }
    public function adicionapdf(Request $request){
      foreach($request as $item){
          $pdf = new file_uploads;
          $pdf->lid = 544;
          $pdf->file_name = $request->file_name;
          $pdf->name_custom = $request->name_custom;
          $pdf->save();
          dd($pdf->file_name);
      }
  }
}