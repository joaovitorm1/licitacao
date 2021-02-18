/*
 * Author: Lucas Matos e Souza
 * Date: 22 Fev 2021
 * Description:
    Este é um arquivo utilizado apenas para a página de Cadastro de Títulos do Candidato
 **/
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function adicionapdf() {
    item++;


    $("#btn-adicionar-pdf").attr("disabled", true);
    //Carrega os Tipos de Títulos Disponíveis
    geraItem();

};

function editapdf($id) {

    $idNome = '#nome-' + $id;
    $idpdf = '#pdf-' + $id;
    $idData = '#data-' + $id;

    $($idNome).attr("disabled", false);
    $($idpdf).attr("disabled", false);
    $($idData).attr("disabled", false);

    $("#btn-adicionar-pdf").attr("disabled", true);
};

function salvapdf($id) {

    //Pega os campos 
    $idBD = '#id-' + $id;
    $idNome = '#nome-' + $id;
    $idData = '#data-' + $id;

    data = {
        id: $($idBD)[0].value,
        name_custom: $($idNome)[0].value,
        file_name: $($idData)[0].value
    };

    //Ajax
    $.ajax({
        type: "POST",
        url: "/adm/pdf/adiciona",
        data: data,
        success: function(dados) {

            //Desabilita os campos
            $($idBD).val(dados.id);
            $($idNome).attr("disabled", true);
            $($idData).attr("disabled", true);
            $("#btn-adicionar-pdf").attr("disabled", false);

            toastr.success("Título cadastrado com sucesso!");
        },
        fail: function() {
            toastr.warning('Falha ao salvar o Título');
        },
        error: function(e) {
            toastr.error(e.responseJSON.errors);
        },
    });
};

function removepdf($id) {

    //Pega os campos 
    $idBD = '#id-' + $id;

    data = {
        id: $($idBD)[0].value
    };

    //Ajax
    $.ajax({
        type: "DELETE",
        url: "/inscricao/novo/candidato/pdf",
        data: data,
        success: function(dados) {

            //Desabilita os campos
            $idItem = '#item-' + $id;
            $($idItem).remove();

            $("#btn-adicionar-pdf").attr("disabled", false);

            toastr.success("Título removido com sucesso!");
        },
        fail: function() {
            toastr.warning('Falha ao remover o Título');
        },
        error: function(e) {
            toastr.error(e.responseJSON.errors);
        },
    });

};



function geraItem() {
    //Gera a estrutura do HTML necessária para criar uma nova linha para adicionar escolaridade
    var linha =
        '   <div id="item-' + item + '" name="items[]" for="item-' + item + '" class="row">' +
        '           <div class="col-md-1">' +
        '               <div class="form-group">' +
        '                   <label for="id">ID</label>' +
        '                   <div class="input-group">' +
        '                       <input id="id-' + item + '" name="id" type="text" class="form-control" required readonly>' +
        '                   </div>' +
        '               </div>' +
        '           </div>' +
        '           <div class="col-md-11">' +
        '               <div class="form-group">' +
        '                   <label for="nome">NOME/TÍTULO</label>' +
        '                   <div class="input-group">' +
        '                       <input id="nome-' + item + '" name="name_custom" type="text" class="form-control" required>' +
        '                   </div>' +
        '               </div>' +
        '           </div>' +
        '           <div class="col-md-3">' +
        '               <div class="form-group">' +
        '                   <label for="data">Arquivo</label>' +
        '                   <input id="data-' + item + '" name="file_name" type="file" class="form-control" required>' +
        '               </div>' +
        '           </div>' +
        '           <div id="grupo-btn"class="align-middle" style="margin-top: 27px;">' +
        '               <div class="btn-group btn-group-justified">' +
        '                   <div class="btn-group">' +
        '                       <button id="btn-salva-item" type="button" onclick="salvapdf(' + item + ')" class="btn btn-success form-control" formtarget="_self"><i class="far fa-save"></i></button>' +
        '                   </div>' +
        '                   <div class="btn-group">' +
        '                       <button id="btn-remove-item" type="button" onclick="removepdf(' + item + ')" class="btn btn-danger form-control" formtarget="_self"><i class="far fa-trash-alt"></i></button>' +
        '                   </div>' +
        '               </div>' +
        '           </div>' +
        '   <hr>' +
        '   </div>';

    //Adiciona a nova linha na div
    $("#div-pdf").append(linha);
};

function adicionapdf() {
    item++;


    $("#btn-adicionar-pdf").attr("disabled", true);
    //Carrega os Tipos de Títulos Disponíveis
    geraItem();


};