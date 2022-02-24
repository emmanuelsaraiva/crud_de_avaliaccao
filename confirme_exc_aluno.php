<?php

include("conexao.php");

$id_aluno = $_POST['id_aluno'];

echo 'Quer mesmo excluir esse Aluno? ';
echo "<a href='excluir_aluno.php?id_aluno=$id_aluno'>Sim</a> | ";
echo "<a href='listagem_aluno.php'>Não</a>";

?>