<?php 
    require_once("../../banco/conexao-banco.php");

    if(isset($_POST['submit'])){
        if($_POST['senha'] != $_POST['senhac']){
            header('location: inscrever.php?erro=1');
        }else{
            $username = $_POST['username'];
            $senha = $_POST['senha'];
            $email = $_POST['email'];
            $insert = "INSERT INTO usuario (username, email, senha) VALUES ('$username', '$email', '$senha');";
            $query = mysqli_query($conexao, $insert);
            if($query){
                session_start();
                $_SESSION['username'] = $username;
                header("location:../index/index.php");
            }else{
                header("location: inscrever.php?erro=3");
            }
        }
    }





?>