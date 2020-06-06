<?php
    require_once("conexao-banco.php");

    if(isset($_GET['logout'])){
        session_start();
        session_unset();
        header("location: ../public/index/index.php");
    }

?>