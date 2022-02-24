<?php

include("conexao.php");

$id_disc = $_POST['id_disc'];

echo 'Quer mesmo excluir essa disciplina? ';
echo "<a href='excluir_disc.php?id_disc=$id_disc'>Sim</a> | ";
echo "<a href='listagem_disc.php'>Não</a>";

?>