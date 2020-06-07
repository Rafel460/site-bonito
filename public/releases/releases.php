<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Bonito</title>
    <? require_once("../coisas_bootstrap/bootstrap.php"); ?>
</head>
<body>
    <? require_once("../tela-inicio/select-user.php");
        $pagina = "releases";
        require_once("../coisas_bootstrap/navbar-user.php");
        require_once("select-release.php");
    ?>
    <? while($registro = mysqli_fetch_assoc($query)){ ?>
    <div class="card text-center">
    <div class="card-header">
           Release <?= $registro['idrelease'] ?>
    </div>
        <div class="card-body">
            <h5 class="card-title"> <?=$registro['titulo'];?></h5>
            <p class="card-text"><?= $registro['texto'];?></p>
        </div>
        <div class="card-footer text-muted">
            <?=$registro['data_release'];?>
        </div>
        </div>
    <? } ?>
</body>
</html>