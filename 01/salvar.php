<?php

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];

$arquivo = fopen("clientes.csv", "a");

fwrite($arquivo, $nome . ",");
fwrite($arquivo, $cidade . ",");
fwrite($arquivo, $estado . ",");
fwrite($arquivo, $telefone . "\n");

fclose($arquivo);

header("location:index.php")

?>