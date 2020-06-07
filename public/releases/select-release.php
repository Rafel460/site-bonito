<?php
    require_once("../../banco/conexao-banco.php");
    $sql = "SELECT * FROM releases ORDER BY idrelease DESC;";
    $query = mysqli_query($conexao, $sql);
    if(!$query){
        die("Ocorreu um erro: ".mysqli_error()); 
    }



?>