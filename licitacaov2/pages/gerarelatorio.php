<?php
if(!isset($_SESSION['UserLogin'])) {
    echo '<script>window.location = "./admin";</script>';
    exit();
}
?>


<ul class="nav nav-tabs">
    <li role="presentation"><a style="color:#666 !important;" href="./addRegistro">Adicionar Licitação</a></li>
    <li role="presentation"><a  style="color:#666 !important;" href="./relatorio">Relatório de Licitações</a></li>
</ul>


<div class="col-sm-9"></div>
<div class="col-sm-3">
<button class="btn btn-primary pull-right" style="margin-top:5%;" onclick="window.print();">Imprimir Relatório</button>
</div>
<h1>Licitações</h1>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Nome da empresa</th>
        <th scope="col">CNPJ</th>
        <th scope="col">Email</th>
        <th scope="col">Telefone</th>
        <th scope="col">Data</th>
        <th scope="col">Endereço</th>
        <th scope="col">Bairro</th>
        <th scope="col">Baixou</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $id = $param;

    $stmt = 'SELECT u.*, f.* FROM users AS u LEFT JOIN file_uploads as f ON u.download_id = f.id WHERE f.lid = :id ';
    $stmt = Database::DB()->prepare($stmt);
    $stmt -> bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    while($result = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
        <tr>
            <th scope="row"><?php echo $result->nome; ?></th>
            <td><?php echo $result->cpf; ?></td>
            <td><?php echo $result->email; ?></td>
            <td><?php echo $result->telefone; ?></td>
            <td><?php echo  date('d/m/Y H:i:s', $result->date); ?></td>
            <td><?php echo $result->endereco; ?></td>
            <td><?php echo $result->bairro; ?></td>
            <td><a href="./visualizar/<?php echo $param; ?>">Licitação</a> </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>
