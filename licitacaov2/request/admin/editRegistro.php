<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$lid = $_POST['lid'];
$num_edital = $_POST['num_edital'];
$num_processo = $_POST['num_processo'];
$modalidade = $_POST['modalidade'];
$objeto = $_POST['objeto'];
$text = nl2br($_POST['text_licitacao']);

$data_publicacao = strtotime(str_replace("/", "-", $_POST['data_publicacao'].":00:00"));
$data_abertura = strtotime(str_replace("/", "-", $_POST['data_abertura'].":00:00"));

$arquivos = $_FILES['arquivo']['name'];
$file_name = $_POST['file_name'];


$sql = 'UPDATE licitacoes SET num_edital = :num_edital, num_processo = :num_processo, modalidade = :modalidade, objeto = :objeto, text_licitacao = :text, data_abertura = :data_abertura, data_publicacao = :data_publicacao WHERE id = :id';
$sql = Database::DB()->prepare($sql);
$sql -> bindValue(':num_edital',$num_edital,PDO::PARAM_STR);
$sql -> bindValue(':num_processo',$num_processo,PDO::PARAM_STR);
$sql -> bindValue(':modalidade',$modalidade,PDO::PARAM_STR);
$sql -> bindValue(':objeto',$objeto,PDO::PARAM_STR);
$sql -> bindValue(':text',$text,PDO::PARAM_STR);
$sql -> bindValue(':data_abertura',$data_abertura,PDO::PARAM_STR);
$sql -> bindValue(':data_publicacao',$data_publicacao,PDO::PARAM_STR);
$sql -> bindValue(':id', $lid, PDO::PARAM_INT);
$sql -> execute();


$dir = 'uploads/';

$totalFiles = count($arquivos) -1;
$totalNames = count($file_name) -1;


for($i = 0; $i <= $totalFiles; $i++) {
    $ext = strtolower(substr($_FILES['arquivo']['name'][$i],-4)); //Pegando extensão do arquivo


    $new_name = uniqid().date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo

    if($_FILES['arquivo']['size'][$i] > 0) {

    $sql = 'INSERT INTO file_uploads (lid, file_name, name_custom) VALUES (:lid, :filename, :name_custom)';
    $sql = Database::DB()->prepare($sql);
    $sql -> bindValue(':lid', $lid, PDO::PARAM_INT);
    $sql -> bindValue(':filename', $new_name, PDO::PARAM_STR);
    $sql -> bindValue(':name_custom', $file_name[$i], PDO::PARAM_STR);
    $sql -> execute();

    move_uploaded_file($_FILES['arquivo']['tmp_name'][$i], $dir.$new_name); //Fazer upload do arquivo
    }



}

echo "Registro efetuado com sucesso!";


