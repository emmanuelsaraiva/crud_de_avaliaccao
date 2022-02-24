<?php

include("conexao.php");


$id_disc = $_POST['id_disc'];
$descricao_disc = $_POST['descricao_disc'];
$nome_disc = $_POST['nome_disc'];

$recebendo_cadastros = "UPDATE `disciplinas` 
SET `descricao_disc` = '$descricao_disc', `nome_disc` = '$nome_disc'
WHERE `id_disc` = '$id_disc'";

$query_cadastros = mysqli_query($connx, $recebendo_cadastros);

header('location: listagem_disc.php');

?>