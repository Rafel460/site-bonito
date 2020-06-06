<?php
    require_once("../../banco/conexao-banco.php");
    session_start();
    $id =  $_SESSION['iduser'];
    $sql = "SELECT username FROM usuario WHERE iduser = '$id'";
    $query = mysqli_query($conexao, $sql);
    $registro = mysqli_fetch_assoc($query);
    $username = $registro['username'];
?>
