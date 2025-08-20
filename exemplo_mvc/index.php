<?php

if ($_GET) {
    // outras rotas
    require_once "controllers/$controle.php";

    $controle = $_GET['controle'];
    $metodo = $get['metodo'];

    $obj = new $controlle();
    $obj->$metodo();

} else {
    // rota inicial
    require_once "controllers/InicioController.php";

    $obj = new InicioController();
    $obj->inicio();
}
