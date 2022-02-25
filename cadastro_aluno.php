<?php

include("conexao.php");

$nome_aluno = $_POST['nome_aluno'];
$email_aluno = $_POST['email_aluno'];
$nascimento_aluno = $_POST['nascimento_aluno'];
$sexo_aluno = $_POST['sexo_aluno'];
$matricula_aluno = $_POST['matricula_aluno'];
$telefone_aluno = $_POST['telefone_aluno'];


$recebendo_cadastros = "INSERT INTO `alunos` 
VALUES ('','$nome_aluno', '$email_aluno', '$nascimento_aluno', '$sexo_aluno', '$matricula_aluno', '$telefone_aluno')";

$query_cadastros = mysqli_query($connx, $recebendo_cadastros);

header('location: listagem_aluno.php');

?>