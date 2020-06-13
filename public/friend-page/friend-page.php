<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Bonito</title>
    <? require_once("../coisas_bootstrap/bootstrap.php");?>
</head>
<body>
    <? 
        $pagina = "friend-page";
        session_start();
        $username = $_GET['username'];
        $_SESSION['destinatario'] = $_GET['email'];
        $email = $_GET['email'];
        $isFriend = true;
        require_once("../coisas_bootstrap/area-user-css.php");
        require_once("../coisas_bootstrap/area-user.php");
    
    ?>
</body>
</html>