<?php

include("conexao.php");

$id_aluno = $_POST['id_aluno'];

$excluir = $connx->query("DELETE FROM `alunos` WHERE `id_aluno` = '$id_aluno'");

if(mysqli_affected_rows($connx) > 0):
    header('location: listagem_aluno.php');
endif;

?>