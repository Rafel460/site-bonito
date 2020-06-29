<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Bonito</title>
    <? require_once("../coisas_bootstrap/bootstrap.php"); ?>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <? require_once("../coisas_bootstrap/area-user-css.php"); ?>
</head>
<body>
    <? 
    require_once("../tela-inicio/select-user.php");
    $pagina = "editar-user.php";
    require_once("../coisas_bootstrap/navbar-user.php");
    require_once("../coisas_bootstrap/editar-usuario.php");
    ?>

</body>
</html>