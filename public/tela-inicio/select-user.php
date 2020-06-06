<?php
    require_once("../../banco/conexao-banco.php");
    session_start();
    $id =  $_SESSION['iduser'];
    $sql = "SELECT username, email FROM usuario WHERE iduser = '$id'";
    $query = mysqli_query($conexao, $sql);
    $registro = mysqli_fetch_assoc($query);
    $username = $registro['username'];
    $email = $registro['email'];
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $username;
?>
