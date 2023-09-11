<?php

const FOLDER = 'aula3';

if(isset($_GET['class']) && isset($_GET['acao'])){
$classe = $_GET['class'];
$metodo = $_GET['acao'];

$classe .= 'Controller';



require_once $_SERVER['DOCUMENT_ROOT']. '/' . FOLDER . '/controller/'.$classe.'.php';

$estudanteController = new $classe();
$estudanteController->$metodo();

}   else {
    require_once $_SERVER['DOCUMENT_ROOT']. '/' . FOLDER . '/view/home.php';

}