<?php

include("conexao.php");

$id_disc = $_POST['id_disc'];

$excluir = $connx->query("DELETE FROM `disciplinas` WHERE `id_disc` = '$id_disc'");
if(mysqli_affected_rows($connx) > 0):
    header('location: listagem_disc.php');
endif;

?>