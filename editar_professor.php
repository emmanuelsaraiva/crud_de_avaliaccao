<?php

include("conexao.php");


$id_professor = $_POST['id_professor'];
$nome_professor = $_POST['nome_professor'];
$nascimento_professor = $_POST['nascimento_professor'];
$sexo_professor = $_POST['sexo_professor'];
$email_professor = $_POST['email_professor'];
$telefone_professor = $_POST['telefone_professor'];
$matricula_professor = $_POST['matricula_professor'];

$recebendo_cadastros = "UPDATE `professores` 
SET `nome_professor` = '$nome_professor', `nascimento_professor` = '$nascimento_professor', `sexo_professor` = '$sexo_professor', `email_professor` = '$email_professor', `matricula_professor` = '$matricula_professor', `telefone_professor` ='$telefone_professor'
WHERE `id_professor` = '$id_professor'";

$query_cadastros = mysqli_query($connx, $recebendo_cadastros);

header('location: listagem_professor.php');

?>