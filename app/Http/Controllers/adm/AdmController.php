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
      dd($request->file_name);
      $licitacao= licitacoes::where('id',432)->with('file_uploads')->first();
      if($request->file("file_name")->isValid()){
        if($request->file("file_name")->extension()==="pdf"){
          $pdf = new file_uploads;
          $pdf->licitacoes()->associate($licitacao);
          $pdf->file_name = $request->file("file_name")->store('pdf');
          $pdf->name_custom = $request->name_custom;
          $pdf->save();
          $licitacao= licitacoes::where('id',432)->with('file_uploads')->first();
          return response()->json($pdf);
        }
      }
      
  }
}