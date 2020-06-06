<?php 
    $conexao = mysqli_connect("localhost","root","","novoDB");

    if(!$conexao){
        die("Ocorreu um erro ao conectar ao Banco de Dados, tentando reconectar");
        $conexao = mysqli_select_db("novoDB");
    }

?>