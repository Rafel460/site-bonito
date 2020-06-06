<?php
    require_once("../../banco/conexao-banco.php");
    $param = $_GET['param'];
    $sql = "SELECT username,email FROM usuario where username LIKE '%$param%' OR email LIKE '%$param%';";
    $query = mysqli_query($conexao, $sql);
    if(!$query){
        die("Ocorreu um erro:".mysqli_error($conexao));
    } 






?>