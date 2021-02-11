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

<h1>Licitações</h1>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Num Edital</th>
        <th scope="col">Num Processo</th>
        <th scope="col">Editar</th>
        <th scope="col">Deletar</th>
        <th scope="col">Gerar</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $stmt = 'SELECT * FROM licitacoes ORDER BY id DESC';
    $stmt = Database::DB()->prepare($stmt);
    $stmt->execute();
    while($result = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
        <tr>
            <th scope="row"><?php echo $result->num_edital; ?></th>
            <td><?php echo $result->num_processo; ?></td>

            <td><a href="./editLicitacoes/<?php echo $result->id; ?>">Editar</a> </td>
            <td><a href="./request/admin/deleteRegistro&id=<?php echo $result->id; ?>">Deletar</a> </td>

            <td><a href="./gerarelatorio/<?php echo $result->id; ?>">Gerar Relatório</a> </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>

    </div></div>