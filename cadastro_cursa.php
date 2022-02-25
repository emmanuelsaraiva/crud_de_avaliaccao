<?php

include("conexao.php");

$id_aluno_cursa = $_POST['id_aluno'];
$id_disc_cursada = $_POST['id_disc'];


$recebendo_cadastros = "INSERT INTO `cursa` 
VALUES ('','$id_aluno_cursa', '$id_disc_cursada')";

$query_cadastros = mysqli_query($connx, $recebendo_cadastros);

header('location: listagem_cursa.php');

?>