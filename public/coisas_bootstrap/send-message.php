<?php
    require_once("../../banco/conexao-banco.php");
    session_start();
    $iduser = $_SESSION['iduser'];
    $remetente = $_SESSION['email'];
    $mensagem = $_POST['mensagem'];
    $destinatario = $_POST['email'];
    $sql = "INSERT INTO mensagem (mensagem, destinatario, remetente, iduser) VALUES ('$mensagem', '$destinatario', '$remetente', $iduser);";
    $query = mysqli_query($conexao, $sql);
    if($query){
        header("location: ../tela-inicio/tela-inicio.php");
    }else{
        die("Ocorreu um erro: ".mysqli_error($conexao));
    }




?>