<?php
    require_once("../../banco/conexao-banco.php");

    $sql = "SELECT * FROM produto ORDER BY idprod DESC;";

    $query = mysqli_query($conexao, $sql);
    if(!$query){
        die("Ocorreu um erro: ".mysqli_error($conexao));
    }


?>