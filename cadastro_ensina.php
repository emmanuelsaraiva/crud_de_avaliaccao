<?php

include("conexao.php");

$id_professor_ensina = $_POST['id_professor'];
$id_disc_ensinada = $_POST['id_disc'];


$recebendo_cadastros = "INSERT INTO `ensina` 
VALUES ('','$id_professor_ensina', '$id_disc_ensinada')";

$query_cadastros = mysqli_query($connx, $recebendo_cadastros);

header('location: listagem_ensina.php');

?>