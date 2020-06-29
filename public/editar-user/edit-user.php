<?php
    require_once("../../banco/conexao-banco.php");
    
    if(isset($_POST['submit'])){
        session_start();
        $idUser = $_SESSION['iduser'];
        $newUsername = $_POST['username'];
        $newPassword = $_POST['senha'];
        $sql = "UPDATE usuario SET username = '$newUsername', senha = '$newPassword' WHERE iduser = $idUser";
        $query = mysqli_query($conexao, $sql);
        if(!$query){
            die("Ocorreu um erro: ".mysqli_error($conexao));
        }else{
            header("location: ../tela-inicio/tela-inicio.php");
        }

    }






















?>