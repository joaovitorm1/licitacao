 <?php
$sql = 'SELECT * FROM licitacoes WHERE id = :id';
$sql = Database::DB()->prepare($sql);
$sql -> bindValue(':id', $param, PDO::PARAM_INT);
$sql -> execute();
$result = $sql->fetch(PDO::FETCH_OBJ);

?>


 <div class="title_licitacao" style="margin-top:4rem;">
     <h2><?php echo $result->text_licitacao; ?></h2>
 </div>

 <table class="table">
     <tr>
         <td class="t1">Numero do Processo:</td>
         <td class="t2"><?php echo $result->num_processo; ?></td>
         <td class="t1">Modalidade da Licitação:  </td>
         <td class="t2"><?php echo $result->modalidade; ?></td>
         <td class="t1">Data de Abertura:</td>
         <td class="t2"><?php echo date('d/m/Y', $result->data_abertura) ?></td>
         <td class="t1">Hora da Abertura:</td>
         <td class="t2"><?php echo date('H:i', $result->data_abertura) ?></td>
     </tr>
     <tr>
         <td class="t1">Objeto:</td>
         <td class="t2" colspan="7"><?php echo $result->objeto; ?></td>
     </tr>

     <tr>
         <td class="t1">Situação:</td>
         <td class="t2" colspan="3"><?php if(empty($result->situacao)) {echo "-"; } else { echo $result->situacao; } ?></td>
         <!--
         <td class="t1">Resultado:</td>
         <td class="t2" colspan="3"><?php if(empty($result->resultado)) { echo "-"; } else { echo $result->resultado; } ?></td>
         -->
     </tr>

 </table>
<!--
<h2>Descrição do objeto:</h2>
<p class="mb-4"><?php echo $result->objeto; ?></p>
-->

 <!--
<h2>
    <?php echo $result->text_licitacao; ?>   
</h2><br>
<div><b>Numero do Edital</b>: <?php echo $result->num_edital; ?> | <b>Numero do Processo</b> :  <?php echo $result->num_processo; ?> | <b>Data da Publicação </b>:   <?php echo date('d/m/Y', $result->data_publicacao); ?> | <b>Data da Abertura </b>: <?php echo date('d/m/Y', $result->data_abertura) ?></div><br>
<div>  <b>Modalidade da Licitação </b> : <?php echo $result->modalidade; ?> | <b> Situacao </b> :  <?php echo $result->situacao; ?> | <b>Resultado </b> : <?php echo $result->resultado; ?> </div>
<div><h2 style="margin-top:30px;">
<br><b>Objeto</b>:<br><br>
    <?php echo $result->objeto; ?>
</h2></div><br>
-->
<h2 class="mt-4" style="margin-top:4rem; float:left; width:100%">Arquivos:</h2>
<?php
$sql = 'SELECT * FROM file_uploads WHERE lid = :id';
$sql = Database::DB()->prepare($sql);
$sql->bindValue(':id', $param, PDO::PARAM_INT);
$sql->execute();
$i = 1;
while($result = $sql -> fetch(PDO::FETCH_OBJ)) { ?>

    <button type="button" id="<?php echo $result->id; ?>" class="btn btn-primary button-openModal button-files mb-2" data-toggle="modal" data-target="#formCadastro">
        <i class="fas fa-file-pdf" style="color:#FFF !important;"></i> <?php echo $result->name_custom; ?>
    </button>
<?php
}
?>
<br>
<br>
<br>
<br>

<script>
    $('.button-openModal').click(function() {

        var id = $(this).attr("id");
        $('#download').attr("value", id);

    });
</script>
<!-- Modal -->
<div class="modal fade" id="formCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Digite seus dados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="alert alert-warning">É de responsabilidade exclusiva do interessado o acompanhamento das alterações e atualizações inseridas neste site, devendo entrar em contato imediato com a COPEL para informar sobre quaisquer dificuldades, na obtenção de informações ou acesso ao site.</div>

                <form action="./request/user/cadastrar" id="CadastroUser">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome da empresa</label>
                        <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o nome da sua empresa">
                        <small id="emailHelp" class="form-text text-muted">Digite o nome da sua empresa</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">CPF OU CNPJ</label>
                        <input type="text" name="cpf" class="form-control" id="cpfOuCnpj" aria-describedby="emailHelp" maxlength="30"placeholder="Digite seu CPF ou CNPJ">
                        <small id="emailHelp" class="form-text text-muted">Digite seu CPF ou CNPJ</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email">
                        <small id="emailHelp" class="form-text text-muted">Digite seu email</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefone</label>
                        <input type="text" name="telefone" class="form-control phone_with_ddd" id="phone" aria-describedby="emailHelp" placeholder="Digite seu telefone">
                        <small id="emailHelp" class="form-text text-muted">Digite seu telefone</small>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço</label>
                        <input type="text" name="endereco" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o seu endereço">
                        <small id="emailHelp" class="form-text text-muted">Digite seu endereço</small>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Bairro</label>
                        <input type="text" name="bairro" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o seu bairro">
                        <small id="emailHelp" class="form-text text-muted">Digite seu bairro</small>
                    </div>

                    <input type="hidden" id="download" name="download" value="" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary button-register2">Baixar</button>
            </div>
        </div>
    </div>
</div>

<script>

    $('.button-register2').click(function() {
        $.post( "./request/user/cadastrar", $("#CadastroUser").serialize(), function(response) {



            if(response.code == 1) {

                $("#formCadastro .close").click();
                window.open('./uploads/'+response.url, '_blank');


            }else {
                alert(response.msg);
            }
        }, 'json');
        return false;
    });

    $(function () {
        $('#phone').mask('(00) 00000-0000');


        var options = {
            onKeyPress: function (cpf, ev, el, op) {
                var masks = ['000.000.000-000', '00.000.000/0000-00'],
                    mask = (cpf.length > 14) ? masks[1] : masks[0];
                el.mask(mask, op);
            }
        }

        $('#cpfOuCnpj').mask("000.000.000-00", options);

    });
</script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/jquery.mask.js"></script>
