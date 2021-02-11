<?php
include('classes/class-valida-cpf-cnpj.php');
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$download = $_POST['download'];

// Cria um objeto sobre a classe
$cpf_cnpj = new ValidaCPFCNPJ($cpf);

// Verifica se o CPF ou CNPJ é válido
if (!$cpf_cnpj->valida() ) {
    $return = array('code' => 0, 'msg' => 'CPF/CNPJ INVÁLIDO');
    echo json_encode($return);
    exit();
}

if(empty($nome) || empty($cpf) || empty($email) || empty($telefone)) {
    $return = array('code' => 0, 'msg' => 'Preencha todos os campos!');
    echo json_encode($return);
}else {
    $sql = 'INSERT INTO users (nome, cpf, email, telefone, download_id, date, endereco, bairro) VALUES (:nome, :cpf, :email, :telefone, :download, :date, :endereco, :bairro)';
    $sql = Database::DB()->prepare($sql);
    $sql -> bindValue(':nome', $nome, PDO::PARAM_STR);
    $sql -> bindValue(':cpf', $cpf, PDO::PARAM_STR);
    $sql -> bindValue(':email', $email, PDO::PARAM_STR);
    $sql -> bindValue(':telefone', $telefone, PDO::PARAM_STR);
    $sql -> bindValue(':download', $download, PDO::PARAM_INT);
    $sql -> bindValue(':date', time(), PDO::PARAM_INT);
    $sql -> bindValue(':endereco', $endereco, PDO::PARAM_STR);
    $sql -> bindValue(':bairro', $bairro, PDO::PARAM_STR);
    $sql -> execute();

    if($sql) {

        $checkDownload = 'SELECT * FROM file_uploads WHERE id = :id';
        $checkDownload = Database::DB()->prepare($checkDownload);
        $checkDownload->bindValue(':id', $download, PDO::PARAM_INT);
        $checkDownload->execute();
        $result = $checkDownload->fetch(PDO::FETCH_OBJ);

        $return = array('code' => 1, 'msg' => 'Você será redirecionado para o download.', 'url' => $result->file_name);
        echo json_encode($return);
    }
}