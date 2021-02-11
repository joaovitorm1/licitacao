<?php

if(isset($_GET['keywords'])) {
    include("search.php");
    exit();
}
?>

<br><br><br>



<table id="example"  style="width:100%" class="display table table-hover">
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

    $total_reg = 12;


  if($param == null) {
      $pc = 1;
  }else {
      $pc = $param;
  }

    $inicio = $pc -1;
    $inicio = $inicio * $total_reg;

    $sql = "SELECT * FROM licitacoes ORDER BY id DESC";
    $sql = Database::DB()->prepare($sql);
    $sql->execute();
    $countReg = $sql->rowCount();

    $stmt = "SELECT * FROM licitacoes ORDER BY id DESC LIMIT ?, ?";
    $stmt = Database::DB()->prepare($stmt);
    $stmt -> bindValue(1, $inicio, PDO::PARAM_INT);
    $stmt -> bindValue(2, $total_reg, PDO::PARAM_INT);
    $stmt->execute();



    $tp = $countReg / $total_reg; // verifica o número total de páginas

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


<nav aria-label="Page navigation" class="mb-4">
    <ul class="pagination mb-4">
        <?php if($param > 1) { ?>
            <li>
                <a href="./page/<?php echo $param -1; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

            <?php
        }
        ?>
        <?php
        for($i = 1; $i <= $tp; $i++) {
            if($i == $param) {
                echo '<li  style="background:#73ac33 !important;"><a href="./page/'.$i.'">'.$i.'</a></li>';
            } else {
            echo '<li><a href="./page/'.$i.'">'.$i.'</a></li>';
            }
        }
        ?>

        <?php if($param < $tp) { ?>
            <li>
                <a href="./page/<?php echo $param +1; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
</nav>


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
<p>Observação: O pregão eletrônico é feito via internet. Nas demais licitações o interessado deve se fazer presente.   <br><br>                      Sistema Criado por João Vitor S. Rocha</p>
<script>
$(document).ready(function() {
     $('#example').DataTable();
 } );
    $(document).ready(function(){
        $('table tr').click(function(){
            window.location = $(this).data('url');
            return false;
        });
    });
</script>