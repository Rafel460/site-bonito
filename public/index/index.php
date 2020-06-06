<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site-Bonito</title>
    <?php require_once('../coisas_bootstrap/bootstrap.php') ?>
</head>
<body>
    <?php 
    $pagina = "index";
    require_once('../coisas_bootstrap/navbar.php');
    ?>
    <br><br><br>
    <div class="row justify-content-md-center">
        <div class="caixa">
            <div class="col-6 col-md-4">
                <div class="row justify-content-md-center"><img src="https://img.icons8.com/windows/64/000000/person-male.png"/></div>
            
                <br>
               
            </div>
        </div>
    </div>
    <?php 
        if(isset($_GET['erro'])){

    ?>
        <div class="row justify-content-md-center">
            <div class="col-6 col-md-4">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Email ou senha incompatíveis
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            </div> 
        </div>
    <?php
        }
    ?>
    <div class="row justify-content-md-center">
            <div class="col-6 col-md-4">       
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" min="12" max="100" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" aria-describedby="aviso-senha" min="12" max="100" required>
                        <small id="aviso-senha" class="form-text text-muted">Nunca compartilhe sua senha com terceiros</small>
                    </div>
                    <div class="row justify-content-md-center">
                        <button type="submit" class="btn btn-outline-dark" name="submit">Entrar</button>
                    </div>
                </form>
                </div>
            </div>

</body>
</html>