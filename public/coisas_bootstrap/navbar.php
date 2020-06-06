<?php 
    #DEFINIR UMA VARIAVEL $PAGINA NO INICIO DO ARQUIVO E DAR O VALOR DELA = AO NOME DO ARQUIVO PHP, sem extensão
        session_start();
        if(isset($pagina)){
            $_SESSION['param'] = $pagina;
        }
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand h1 mb-0" href="../index/index.php">Site Bonito</a>
        <button class="navbar-toggler" type="button" data-toogle="collapse" data-target="navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSite">
        <ul class="navbar-nav">
        <li class="navbar-item"><a <? if($_SESSION['param'] == "index"){echo 'class="nav-link active"';}else{echo'class="nav-link"';}?> href="../index/index.php">Inicio</a></li>
        <li class="navbar-item"><a <? if($_SESSION['param'] == "inscrever"){echo 'class="nav-link active"';}else{echo'class="nav-link"';}?> href="../inscrever/inscrever.php">Inscrever-me</a></li>
        </ul>
        <ul class="navbar-nav ml-auto mr-20">
        <li><a class="nav-link" href="https://twitter.com/Rafao_Rafoso" target="_blank"> <img src="https://img.icons8.com/material-rounded/24/000000/twitter.png"/></a></li>
        <li><a class="nav-link" href="https://github.com/Rafel460" target="_blank"><img src="https://img.icons8.com/material-rounded/24/000000/github.png"/></a></li>
        <li><a class="nav-link" href="https://www.reddit.com/user/Rafaelmonte" target="_blank"><img src="https://img.icons8.com/metro/26/000000/reddit.png"/></a></li>
        </ul>
        </div>
        
    </nav>