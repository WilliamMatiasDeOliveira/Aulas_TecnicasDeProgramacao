<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista produtos</title>
</head>
<body>

<table border = "1">
    <thead>
        <tr>Nome</tr>
        <tr>Preço</tr>
        <tr>Estoque</tr>
        <tr>Ações</tr>
    </thead>
    <tbody>

    <?php  foreach($resultados as $res): ?>
        <?php $preco = number_format($res->preco, 2, ",", ".") ?>
        <tr>
            <td><?= $res->nome ?></td>
            <td><?= $preco ?></td>
            <td><?= $res->estoque ?></td>
            <td>
                <a href="">Alterar</a>
                <a href="">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
    
</body>
</html>