<?php

$login = $_POST['username'];
$senha = $_POST['password'];

$users = array('rilei', 'administrador','hebert');
$passwords = array('licitarilei', 'ascom2020','pedecana');

if(empty($login) || empty($senha)) {

    $return = array('code' => 0, 'msg' => 'Preencha todos os Campos');
    echo json_encode($return);

} elseif (!in_array($login, $users)) {

    $return = array('code' => 0, 'msg' => 'Login incorreto');
    echo json_encode($return);
}

elseif (!in_array($senha, $passwords)) {
    $return = array('code' => 0, 'msg' => 'Senha Incorreta');
    echo json_encode($return);
} else {

    $_SESSION['UserLogin'] = $login;
    $return = array('code' => 1, 'msg' => 'Success!');
    echo json_encode($return);
}