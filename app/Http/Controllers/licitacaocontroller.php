<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\licitacoes;
use App\Models\file_uploads;
use Illuminate\Http\Request;

class licitacaocontroller extends BaseController
{
    public function listalicitacao(){
        $licitacao = licitacoes::all()->sortBy('id');
        return view('index',['licitacao'=>$licitacao]);
    }

    public function adicionalicitacao(Request $request){
        $validacao = $request->validated();
        $licitacao = licitacoes::create($validacao);;
        $licitacao->num_edital = $request->num_edital;
        $licitacao->num_processo = $request->num_processo;
        $licitacao->data_publicacao = $request->data_publicacao;
        $licitacao->data_abertura = $request->data_abertura;
        $licitacao->modalidade = $request->modalidade;
        $licitacao->objeto = $request->objeto;
        $licitacao->situacao= $request->situacao;
        $licitacao->resultado= $request->resultado;
        $licitacao->text_licitacao = $request->text_licitacao;
        
        
    }
    public function adicionarpdf(){
        $licitacao = licitacoes::all()->sortBy('id');
        return view('pdf',['licitacao'=>$licitacao]);
    }
    public function adicionapdf(Request $request){
        foreach($request as $item){
            $pdf = new file_uploads;
            $pdf->lid = $request->id;
            $pdf->file_name = $request->file_name;
            $pdf->name_custom = $request->name_custom;
        }
    }
}
