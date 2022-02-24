<?php

include("conexao.php");


$id_aluno = $_POST['id_aluno'];
$nome_aluno = $_POST['nome_aluno'];
$nascimento_aluno = $_POST['nascimento_aluno'];
$sexo_aluno = $_POST['sexo_aluno'];
$email_aluno = $_POST['email_aluno'];
$telefone_aluno = $_POST['telefone_aluno'];
$matricula_aluno = $_POST['matricula_aluno'];

$recebendo_cadastros = "UPDATE `alunos` 
SET `nome_aluno` = '$nome_aluno', `nascimento_aluno` = '$nascimento_aluno', `sexo_aluno` = '$sexo_aluno', `email_aluno` = '$email_aluno', `matricula_aluno` = '$matricula_aluno', `telefone_aluno` ='$telefone_aluno'
WHERE `id_aluno` = '$id_aluno'";

$query_cadastros = mysqli_query($connx, $recebendo_cadastros);

header('location: listagem_aluno.php');

?>