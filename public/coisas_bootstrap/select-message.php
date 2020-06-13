<?php
    require_once("../../banco/conexao-banco.php");
    $destinatario = $_SESSION['email'];
    $sql = "SELECT * FROM mensagem WHERE destinatario = '$email';";
    $query = mysqli_query($conexao, $sql);
    if(!$query){
        die("Ocorreu um erro: ".mysqli_error($conexao));
    }else{
        $sql2 = "SELECT COUNT(mensagem) as numM FROM mensagem WHERE destinatario = '$email';";
        $query_c = mysqli_query($conexao, $sql2);
        if(!$query_c){
            die("Ocorreu um erro: ".mysqli_error($conexao));
        }
    }


?>