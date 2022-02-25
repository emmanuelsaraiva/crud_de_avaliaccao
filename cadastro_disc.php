<?php

include("conexao.php");

$descricao_disc = $_POST['descricao_disc'];
$nome_disc = $_POST['nome_disc'];

$recebendo_cadastros = "INSERT INTO `disciplinas` 
VALUES ('', '$descricao_disc', '$nome_disc')";

$query_cadastros = mysqli_query($connx, $recebendo_cadastros);

header('location: listagem_disc.php');

?>