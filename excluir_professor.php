<?php

include("conexao.php");

$id_professor = $_POST['id_professor'];

$excluir = $connx->query("DELETE FROM `professores` WHERE `id_professor` = '$id_professor'");

if(mysqli_affected_rows($connx) > 0):
    header('location: listagem_professor.php');
endif;

?>