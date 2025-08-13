<?php
require_once "usuario.class.php";


$usuario = new Usuario("maria", "maria@email.com", "123456");

echo  "Nome : {$usuario->getNome()} <br>
        E-mail: {$usuario->getEmail()} <br>
        Senha: {$usuario->getSenha()}";

        $usuario->setNOme("Maria baptista");

        echo "Nome: {$usuario->getNome()}";


