<?php
include('../conn.php');

$nome = $_POST['nome'];
$link = $_POST['link'];
$valor = $_POST['valor'];

$cad_prod= $pdo->prepare('INSERT INTO produtos (nome, link, valor) values (:nome, :link, :valor)');
$cad_prod->execute(array(
    ':nome'=> $nome,
    ':link'=> $link,
    ':valor'=> $valor
)
);
    

?>