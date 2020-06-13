<?php
    require_once("../../banco/conexao-banco.php");
    session_start();
    $iduser = $_SESSION['iduser'];
    $remetente = $_SESSION['email'];
    $mensagem = $_POST['mensagem'];
    $destinatario = $_SESSION['destinatario'];
    $assunto = $_POST['assunto'];
    $sql = "INSERT INTO mensagem (mensagem, destinatario, remetente, iduser, assunto) VALUES ('$mensagem', '$destinatario', '$remetente', $iduser, '$assunto');";
    $query = mysqli_query($conexao, $sql);
    if($query){
        header("location: ../tela-inicio/tela-inicio.php");
    }else{
        die("Ocorreu um erro: ".mysqli_error($conexao));
    }




?>