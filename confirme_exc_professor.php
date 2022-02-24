<?php

include("conexao.php");

$id_professor = $_POST['id_professor'];

echo 'Quer mesmo excluir esse Professor? ';
echo "<a href='excluir_professor.php?id_professor=$id_professor'>Sim</a> | ";
echo "<a href='listagem_professor.php'>Não</a>";

?>