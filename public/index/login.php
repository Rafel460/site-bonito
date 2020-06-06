<?php 
    require_once("../../banco/conexao-banco.php");
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = "SELECT iduser FROM usuario WHERE email = '$email' AND senha = '$senha';";
        $query = mysqli_query($conexao, $sql);
        $result = mysqli_num_rows($query);
        if($result > 0){
            $registro = mysqli_fetch_assoc($query);
            $val = $registro['iduser'];
            session_start();
            $_SESSION['iduser'] = $val;
            header('location: ../tela-inicio/tela-inicio.php');
        }else{
            header('location: index.php?erro');
        }
    }

?>