<?php
session_start();
require('classes/ClassDatabase.php');


function treatment($sql) {
    $sql = trim($sql);
    $sql = strip_tags($sql);
    $sql = addslashes($sql);
    $sql = htmlentities($sql, ENT_QUOTES);
    return $sql;
}

$_GET['page'] = (isset($_GET['page']) ? $_GET['page'].'/' : 'home');
$page = explode('/', treatment($_GET['page']));

$page[0] = (isset($page[0]) ? $page[0].'/' : 'null');
$page[1] = (isset($page[1]) ? $page[1].'/' : '1');
$page[2] = (isset($page[2]) ? $page[2].'/' : 'null');

$pagename = str_replace('/', '', $page[0]);
$param = str_replace('/', '', $page[1]);
$action = str_replace('/', '', $page[2]);
if($pagename == 'uploads'){
require('uploads/'.$param.'');
}else if($pagename == 'request') {
require('request/'.$param.'/'.$action.'.php');
}
else {
    include('template.php');
}
