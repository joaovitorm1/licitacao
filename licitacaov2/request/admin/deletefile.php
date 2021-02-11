<?php

$lid = $_GET['id'];

$editing = 0;

$sql = 'SELECT * FROM file_uploads WHERE id = :id';
$sql = Database::DB()->prepare($sql);
$sql -> bindValue(':id', $lid, PDO::PARAM_INT);
$sql -> execute();

while($result = $sql -> fetch(PDO::FETCH_OBJ)) {
    if(file_exists("./uploads/".$result->file_name)) {
    unlink("./uploads/".$result->file_name);
    }
    $editing = $result->lid;
}

$sql = 'DELETE FROM file_uploads WHERE id = :id';
$sql = Database::DB()->prepare($sql);
$sql -> bindValue(':id', $lid, PDO::PARAM_INT);
$sql -> execute();

header("Location: ../../editLicitacoes/{$editing}");