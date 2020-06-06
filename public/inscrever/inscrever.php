<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Bonito</title>
    <?php require_once('../coisas_bootstrap/bootstrap.php');?>
</head>
<body>
    <?php $pagina = "inscrever";
        require_once("../coisas_bootstrap/navbar.php");
    ?>
    <br>
        <div class="row justify-content-md-center">
       <h2>Que bom que decidiu se juntar a nós!</h2>
        
       </div>
       <br>
       <div class="row justify-content-md-center">
            <div class="col-6 col-md-4">       
                <form action="insert.php" method="post">
                    <div class="form-group">
                        <label for="username">Nome de usuario</label>
                        <input type="text" class="form-control" id="username" name="username" min="5" max="80" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" min="12" max="100" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" aria-describedby="aviso-senha" min="12" max="100" required>
                        <small id="aviso-senha" class="form-text text-muted">Nunca compartilhe sua senha com terceiros</small>
                    </div>
                    <div class="form-group">
                        <label for="senha">Confirme a senha</label>
                        <input type="password" class="form-control" id="senhac" name="senhac" max="100" required>
                    </div>
                    <div class="row justify-content-md-center">
                        <button type="submit" class="btn btn-outline-dark" name="submit">Inscrever-se!</button>
                    </div>
                </form>
                </div>
            </div>

    <?php if(isset($_GET['erro'])){
        $numErro = (int) $_GET['erro'];
        ?>
    <br>
    <div class="row justify-content-md-center">
        <div class="alert alert-danger" role="alert">
            <?php
                switch($numErro){
                    case 1:
                        echo "As senhas não conferem, tente novamente!  ";
                        break;
                    case 2:
                        echo "Ocorreu um erro com a conexão com o Banco de dados  ";
                        break;
                    case 3:
                        echo "Esse email já foi registrado!  ";
                        break;
                    default:
                        echo "Ocorreu um erro inesperado, tente novamente  ";
                        break;
                }?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
    <?php } ?>
</body>
</html>