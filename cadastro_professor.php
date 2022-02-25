<?php

include("conexao.php");

$nome_professor = $_POST['nome_professor'];
$email_professor = $_POST['email_professor'];
$nascimento_professor = $_POST['nascimento_professor'];
$sexo_professor = $_POST['sexo_professor'];
$matricula_professor = $_POST['matricula_professor'];
$telefone_professor = $_POST['telefone_professor'];


$recebendo_cadastros = "INSERT INTO `professores` 
VALUES ('','$nome_professor', '$email_professor', '$nascimento_professor', '$sexo_professor', '$matricula_professor', '$telefone_professor')";

$query_cadastros = mysqli_query($connx, $recebendo_cadastros);

header('location: listagem_professor.php');

?>