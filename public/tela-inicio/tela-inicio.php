<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php require_once("../coisas_bootstrap/bootstrap.php"); ?>
</head>
<body>

    <?php 
    $pagina = "tela-inicio";
    require_once("select-user.php");     
    require_once("../coisas_bootstrap/navbar-user.php");
    ?>
    <div class="jumbotron">
        <h1 class="display-4">Estamos em construção aqui na página <?=$pagina?>.php!</h1>
        <p class="lead">Tenta dar uma olhada nas outras páginas por enquanto! &nbsp;&nbsp;&nbsp;<span class="badge badge-pill badge-info"><img src="https://img.icons8.com/material-two-tone/20/000000/octopus.png"/> Rafael - admin</span>&nbsp;</p>
        <hr class="my-4">
        <p>Paginas que já estão prontas (tenta dar uma fuçada no resto!):</p>
        <div class="row justify-content-md-center">
        <a class="btn btn-outline-dark" href="../market-place/market-place.php">MarketPlace</a>
        &nbsp;&nbsp;&nbsp;
        <a class="btn btn-outline-dark" href="../releases/releases.php">Releases</a>
        </div>
        
    </div>

</body>
</html>