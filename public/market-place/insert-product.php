<?php
    require_once("../../banco/conexao-banco.php");
    if(isset($_POST['submit'])){
        $imagem = $_FILES['imagem'];
        $nomeprod = $_POST['produto'];
        $descricao = $_POST['descricao'];
        $preco = (double) $_POST['preco'];
        $pasta = "../../uploads/";
        $temp = $_FILES['imagem']['tmp_name'];
        $novoNome = uniqid().".jpg";
        chmod($pasta, "777 -R");

        if(move_uploaded_file($temp, $pasta.$novoNome)){
            $path = $pasta.$novoNome;
            $sql =  "INSERT INTO produto (nomeprod, descricao, preco, imagem, path) VALUES ('$nomeprod', '$descricao', $preco, '$novoNome', '$path');";
             $query = mysqli_query($conexao, $sql);
             if(!$query){
                 die("Ocorreu um erro: ".mysqli_error($conexao));
             }else{
                 header("location: market-place.php");
             }
            }}
?>