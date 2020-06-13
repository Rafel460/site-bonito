<?php require_once("select-users.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <?php 
        require_once("../coisas_bootstrap/bootstrap.php");
    ?>
</head>
<body>

<div class="row justify-content-md-center">
    <h2>Usuarios Cadastrados</h2>
</div>
<div class="row justify-content-md-center">
    <div class="col-6 col-md-4">
        <ul class="list-group list-group-flush">
            <?php
                while($linha = mysqli_fetch_assoc($query)){ ?>
                <li class='list-group-item'> <?=$linha['username'].", ".$linha['email']?> <a class="btn btn-outline-dark" <?php 
                $username = $linha['username'];
                $email = $linha['email'];
                echo 'href="../friend-page/friend-page.php?username='.$username.'&email='.$email.'"';
                ?>>Acessar a página do Usuario</a></li>
                <?}?>
        </ul>
    </div>
</div>
</body>
</html>