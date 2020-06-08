<?php
    require_once("../../banco/conexao-banco.php");

    $sql = "SELECT idprod, nomeprod, descricao, preco, path, imagem,username FROM produto INNER JOIN usuario ON usuario.iduser = produto.iduser ORDER BY idprod DESC;";

    $query = mysqli_query($conexao, $sql);
    if(!$query){
        die("Ocorreu um erro: ".mysqli_error($conexao));
    }


?>