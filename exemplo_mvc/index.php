<?php

if ($_GET) {
    // outras rotas
    $controle = $_GET['controle'];
    $metodo = $_GET['metodo'];

    require_once "controllers/$controle.php";

    $obj = new $controle();
    $obj->$metodo();

} else {
    // rota inicial
    require_once "controllers/InicioController.php";

    $obj = new InicioController();
    $obj->inicio();
}
