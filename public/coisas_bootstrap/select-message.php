<?php
    require_once("../../banco/conexao-banco.php");

    $destinatario = $_SESSION['email'];
    $sql = "SELECT * FROM mensagem WHERE destinatario = '$email'";
    $query = mysqli_query($conexao, $sql);
    if(!$query){
        die("Ocorreu um erro: ".mysqli_error($conexao));
    }


?>