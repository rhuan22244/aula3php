<?php

$controller = $_GET['controller'];
$metodo = $_GET['acao'];
$controller .= "controller";

const FOLDER = "aula3";

require_once $_SERVER['DOCUMENT_ROOT'] . '/'.FOLDER. '/aula3/controller/EstudanteController.php';

$objeto = new $controller();
$objeto->$metodo();