
<link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">



<?php
if(!isset($_SESSION['UserLogin'])) {
    echo '<script>window.location = "./admin";</script>';
    exit();
}
?>

<style>
    body {
        background:#73ac33;
    }


    table tr {
        font-size:1.3rem;
    }

    .table .thead-dark th {
        font-size:1.3rem !important;

    }
</style>

<div class="row">
    <div class="col-sm-10 mx-auto admin-board mt-4 mb-4">
        <ul class="nav mt-4">
            <li class="nav-item">
                <a class="nav-link" href="./addRegistro">Adicionar Licitação</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./relatorio">Relatório de Licitações</a>
            </li>
        </ul>
        <hr>


<h3 style="font-weight:bold;" class="mt-4">Adicionar Registro</h3>
<h6 class="mb-4">Insira as licitações</h6>
<hr>

<form action="./request/admin/addRegistro" id="addRegistro" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Numero do Edital</label>
        <input type="text" name="num_edital" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o numero do edital">
        <small id="emailHelp" class="form-text text-muted">Forneça o número do edital</small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Numero do Processo</label>
        <input type="text" name="num_processo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o numero do edital">
        <small id="emailHelp" class="form-text text-muted">Forneça o número do processo</small>
    </div>



    <div class="form-group">
        <label for="exampleInputEmail1">Data da publicação</label>

        <div class="form-group">
            <div class='input-group date' id='datetimepicker1'>
                <input type='text' name="data_publicacao" class="form-control" />
                <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </div>
        </div>
<!--
        <div class="input-group date" >
            <input type="text" name="data_publicacao"  id='datetimepicker1' class="form-control" value="12/02/2012">
        </div>
-->
        <small id="emailHelp" class="form-text text-muted">Forneça a data da publicação</small>
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Data de Abertura</label>

        <div class="input-group date" id='datetimepicker2'>
            <input type='text' name="data_abertura" class="form-control" />
          <!--  <input type="text"  name="data_abertura" class="form-control"> -->
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </div>
        </div>

       <small id="emailHelp" class="form-text text-muted">Forneça a data de abertura</small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Modalidade</label>
        <input type="text" name="modalidade" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o numero do edital">
        <small id="emailHelp" class="form-text text-muted">Qual a modalidade dessa licitação ? </small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Objeto</label>
        <input type="text" name="objeto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o numero do edital">
        <small id="emailHelp" class="form-text text-muted">Qual é o objeto dessa licitação ?</small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Texto da licitação</label>
        <textarea name="text_licitacao" class="form-control" id="exampleInputEmail1" placeholder="Digite o texto da licitação"></textarea>
          <small id="emailHelp" class="form-text text-muted">Digite o texto da licitação</small>
    </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Situação</label>
        <input type="text" name="situacao" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Situação da licitação">
        <small id="emailHelp" class="form-text text-muted">Situação da licitação</small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Resultado</label>
        <input type="text" name="situacao" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Resultado">
        <small id="emailHelp" class="form-text text-muted">Resultado da licitação</small>
    </div>


    <div class="form-group">

        <h6 style="font-weight:bold; margin-top:30px;">Arquivo 01</h6>
        <label for="exampleInputEmail1">Arquivo</label>
        <input type="file" name="arquivo[]" >
        <br>
        <label for="exampleInputEmail1" style="margin-top:20px;">Nome do arquivo</label>
        <input type="text" name="file_name[]" class="form-control">

        <hr>
        <h6 style="font-weight:bold; margin-top:30px;">Arquivo 02</h6>
        <label for="exampleInputEmail1">Arquivo</label>
        <input type="file" name="arquivo[]" >
        <br>
        <label for="exampleInputEmail1" style="margin-top:20px;">Nome do arquivo</label>
        <input type="text" name="file_name[]" class="form-control">

        <hr>

        <h6 style="font-weight:bold; margin-top:30px;">Arquivo 03</h6>
        <label for="exampleInputEmail1">Arquivo</label>
        <input type="file" name="arquivo[]" >
        <br>
        <label for="exampleInputEmail1" style="margin-top:20px;">Nome do arquivo</label>
        <input type="text" name="file_name[]" class="form-control">

        <hr>
        <h6 style="font-weight:bold; margin-top:30px;">Arquivo 04</h6>
        <label for="exampleInputEmail1">Arquivo</label>
        <input type="file" name="arquivo[]" >
        <br>
        <label for="exampleInputEmail1" style="margin-top:20px;">Nome do arquivo</label>
        <input type="text" name="file_name[]" class="form-control">

        <hr>
        <h6 style="font-weight:bold; margin-top:30px;">Arquivo 05</h6>
        <label for="exampleInputEmail1">Arquivo</label>
        <input type="file" name="arquivo[]" >
        <br>
        <label for="exampleInputEmail1" style="margin-top:20px;">Nome do arquivo</label>
        <input type="text" name="file_name[]" class="form-control">


        <hr>
        <h6 style="font-weight:bold; margin-top:30px;">Arquivo 06</h6>
        <label for="exampleInputEmail1">Arquivo</label>
        <input type="file" name="arquivo[]" >
        <br>
        <label for="exampleInputEmail1" style="margin-top:20px;">Nome do arquivo</label>
        <input type="text" name="file_name[]" class="form-control">







        <small id="emailHelp" class="form-text text-muted">Somente arquivos .pdf serão aceitos pelo sistema.</small>
    </div>

    <button type="submit" class="btn btn-primary button-register mb-4">Enviar</button>
</form>


<script>
    $('.button-register').click(function() {


        var formData = new FormData($("#addRegistro")[0]);
        formData.append( 'action','uploadImages');
        jQuery.each($("input[name^='arquivo']")[0].files, function(i, file) {
            formData.append('arquivo['+i+']', file);
        });
        $.ajax({
            url: "./request/admin/addRegistro",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (response) {
                alert(response);
            }

        });

        return false;
    });
</script>

    </div></div>


<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: 'DD/MM/YYYY HH'
        });

        $('#datetimepicker2').datetimepicker({
            format: 'DD/MM/YYYY HH'
        });
    });
</script>

<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>