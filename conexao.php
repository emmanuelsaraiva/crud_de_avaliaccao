<?php

$host = 'localhost';
$user = 'root';
$passwd = '';
$bd_nome = 'escola';

// aqui conecta
$connx = mysqli_connect($host, $user, $passwd, $bd_nome);


// este é o nosso teste
//if($connx){
//    echo 'Conectou.';
// } else{
//     echo 'Erro.';
// }

?>