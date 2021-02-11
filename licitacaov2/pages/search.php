<h2 style="margin-top:2rem;">Licitações</h2>


<table class="table table-hover">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Edital</th>
        <th scope="col">Processo</th>
        <th scope="col">Publicação</th>
        <th scope="col">Abertura</th>
        <th scope="col">Modalidade da Licitação</th>
        <th scope="col">Objeto</th>
        <th scope="col">Situação</th>
       <!-- <th scope="col">Resultado</th> -->
    </tr>
    </thead>
    <tbody>

    <?php



    $pa = $_GET['keywords'];

    $stmt = "SELECT * FROM licitacoes WHERE num_edital LIKE :keyword";
    $stmt = Database::DB()->prepare($stmt);
    $stmt -> bindValue(':keyword',"%$pa%", PDO::PARAM_STR);
    $stmt->execute();




    while($result = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
        <tr data-url="./visualizar/<?php echo $result->id; ?>">
            <th scope="row"><?php echo $result->num_edital; ?></th>
            <td><?php echo $result->num_processo; ?></td>
            <td><?php echo date('d/m/Y', $result->data_publicacao); ?></td>
            <td><?php echo date('d/m/Y', $result->data_abertura); ?></td>
            <td class="t2"><?php echo  $result->modalidade; ?></td>
            <td><a href="./visualizar/<?php echo $result->id; ?>" style="text-transform: uppercase;"> <?php echo  substr($result->objeto, 0, 30); ?>... </a></td>
            <th scope="row"><?php if(empty($result->situacao)) {echo "-"; } else { echo $result->situacao; } ?></th>
          <!--  <th scope="row"><?php if(empty($result->resultado)) { echo "-"; } else { echo $result->resultado; } ?></th> -->
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>



<div class="col-sm-10 mx-auto" style="margin-top:4rem; margin-bottom:3rem; background:#ededed; padding:2rem; border-radius:10px;">

    <h4 style="font-weight: bold;">Pesquisar Licitação</h4>
    <form class="form" method="get" action="">
        <div class="row">
            <div class="col-sm-10">
                <input type="text" name="keywords" class="form-control" id="inputPassword2" style="height:4rem;" placeholder="Digite o que está procurando">
            </div>
            <div class="col-sm-2" style="margin:0; padding:0; margin-left:-20px;">
                <button type="submit" class="btn btn-primary" style="width:100% !important; height:4rem; border-radius:0 10px 10px 0;"><i class="fas fa-search" style="margin:0; font-size:1rem;  text-align:center !important; float:none !important;"></i></button>
            </div>
        </div>
    </form>

</div>

<a class="btn btn-primary mt-4" href="http://www.licitacoes-e.com.br/aop/index.jsp?codSite=75094&url" target="_blank">Pregão Eletrônico <br>(Banco do Brasil)<br></a>
<p>Observação: O pregão eletrônico é feito via internet. Nas demais licitações o interessado deve se fazer presente.</p>
<script>
    $(document).ready(function(){
        $('table tr').click(function(){
            window.location = $(this).data('url');
            return false;
        });
    });
</script>