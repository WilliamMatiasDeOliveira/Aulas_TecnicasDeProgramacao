<?php

class ProdutoController
{
    public function listar() {
        // buscar dados do produto
        $host = "localhost";
        $dbname = "exemplo_mvc";
        $user = "root";
        $pass = "";

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $sql = "SELECT * FROM produtos";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $conn = null;

        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        require_once "views/listaProdutos.php";
    }
}
