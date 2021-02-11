<?php
if(!isset($_SESSION['UserLogin'])) {
    echo '<script>window.location = "./admin";</script>';
    exit();
}
?>

<link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">


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

<?php

$stmt = 'SELECT * FROM licitacoes WHERE id = :id LIMIT 1';
$stmt = Database::DB()->prepare($stmt);
$stmt -> bindValue(':id', $param, PDO::PARAM_INT);
$stmt -> execute();
$result = $stmt->fetch(PDO::FETCH_OBJ);
?>
<h1>Editar Registro</h1>

<form action="./request/admin/addRegistro" id="addRegistro" enctype="multipart/form-data">

    <input type="hidden" name="lid" value="<?php echo $param; ?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Numero do Edital</label>
        <input type="text" name="num_edital" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result->num_edital; ?>">
        <small id="emailHelp" class="form-text text-muted">Forneça o número do edital</small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Numero do Processo</label>
        <input type="text" name="num_processo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result->num_processo; ?>">
        <small id="emailHelp" class="form-text text-muted">Forneça o número do processo</small>
    </div>



    <div class="form-group">
        <label for="exampleInputEmail1">Data da publicação</label>

        <div class="form-group">
            <div class='input-group date' id='datetimepicker1'>
                <input type='text' name="data_publicacao" class="form-control" value="<?php echo date("d-m-Y H", $result->data_publicacao); ?>" />
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
            <input type='text' name="data_abertura" class="form-control" value="<?php echo date("d-m-Y H", $result->data_abertura); ?>" />
            <!--  <input type="text"  name="data_abertura" class="form-control"> -->
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </div>
        </div>

        <small id="emailHelp" class="form-text text-muted">Forneça a data de abertura</small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Modalidade</label>
        <input type="text" name="modalidade" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result->modalidade; ?>">
        <small id="emailHelp" class="form-text text-muted">Qual a modalidade dessa licitação ? </small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Objeto</label>
        <input type="text" name="objeto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result->objeto; ?>">
        <small id="emailHelp" class="form-text text-muted">Qual é o objeto dessa licitação ?</small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Texto da licitação</label>
        <textarea name="text_licitacao" class="form-control" id="exampleInputEmail1"><?php echo $result->text_licitacao; ?></textarea>
          <small id="emailHelp" class="form-text text-muted">Digite o texto da licitação</small>
    </div>


    <div class="form-group">


        <label for="exampleInputEmail1" style="margin-top:20px;">Arquivo</label>
        <input type="file" name="arquivo[]" >

        <label for="exampleInputEmail1" style="margin-top:20px;">Nome do arquivo</label>
        <input type="text" name="file_name[]" class="form-control">

        <label for="exampleInputEmail1" style="margin-top:20px;">Arquivo</label>
        <input type="file" name="arquivo[]" >

        <label for="exampleInputEmail1" style="margin-top:20px;">Nome do arquivo</label>
        <input type="text" name="file_name[]" class="form-control">

        <label for="exampleInputEmail1" style="margin-top:20px;">Arquivo</label>
        <input type="file" name="arquivo[]" >


        <label for="exampleInputEmail1" style="margin-top:20px;">Nome do arquivo</label>
        <input type="text" name="file_name[]" class="form-control">

        <label for="exampleInputEmail1" style="margin-top:20px;">Arquivo</label>
        <input type="file" name="arquivo[]" >


        <label for="exampleInputEmail1" style="margin-top:20px;">Nome do arquivo</label>
        <input type="text" name="file_name[]" class="form-control">


        <label for="exampleInputEmail1">Arquivo</label>
        <input type="file" name="arquivo[]" >


        <label for="exampleInputEmail1" style="margin-top:20px;">Nome do arquivo</label>
        <input type="text" name="file_name[]" class="form-control">

        <label for="exampleInputEmail1">Arquivo</label>
        <input type="file" name="arquivo[]" >



        <small id="emailHelp" class="form-text text-muted">Somente arquivos .pdf serão aceitos pelo sistema.</small>
    </div>

    <button type="submit" class="btn btn-primary button-register">Submit</button>
</form>

        <h2>Arquivos</h2>

        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">File Name</th>
                <th scope="col">Deletar</th>
            </tr>
            </thead>



        <?php

        $sql = "SELECT * FROM file_uploads WHERE lid = :id";
        $sql = Database::DB()->prepare($sql);
        $sql -> bindValue(":id", $param, PDO::PARAM_INT);
        $sql->execute();


        while($result = $sql->fetch(PDO::FETCH_OBJ)) { ?>

            <tr>
                <td><?php echo $result->name_custom; ?></td>
                <td><a href="./request/admin/deletefile&id=<?php echo $result->id; ?>">Deletar</a></td>
            </tr>

        <?php
        }
        ?>

        </table>
<script>
    $('.button-register').click(function() {


        var formData = new FormData($("#addRegistro")[0]);
        formData.append( 'action','uploadImages');
        jQuery.each($("input[name^='arquivo']")[0].files, function(i, file) {
            formData.append('arquivo['+i+']', file);
        });
        $.ajax({
            url: "./request/admin/editRegistro",
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