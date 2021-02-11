<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$lid = $_GET['id'];


$sql = 'DELETE FROM licitacoes WHERE id = :id';
$sql = Database::DB()->prepare($sql);
$sql -> bindValue(':id', $lid, PDO::PARAM_INT);
$sql -> execute();

$sql = 'SELECT * FROM file_uploads WHERE lid = :id';
$sql = Database::DB()->prepare($sql);
$sql -> bindValue(':id', $lid, PDO::PARAM_INT);
$sql -> execute();

while($result = $sql -> fetch(PDO::FETCH_OBJ)) {
    if(file_exists("./uploads/".$result->file_name)) {
   unlink("./uploads/".$result->file_name);
    }
}

$sql = 'DELETE FROM file_uploads WHERE lid = :id';
$sql = Database::DB()->prepare($sql);
$sql -> bindValue(':id', $lid, PDO::PARAM_INT);
$sql -> execute();

header("Location: ../../relatorio");