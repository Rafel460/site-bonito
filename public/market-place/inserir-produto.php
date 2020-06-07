<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Bonito</title>
    <? require_once("../coisas_bootstrap/bootstrap.php"); ?>
</head>
<body>
   <? 
    require_once("../tela-inicio/select-user.php");
    $pagina = "inserir-produto";
    require_once("../coisas_bootstrap/navbar-user.php");
   ?>
   <br><br>
<div class="row justify-content-md-center">
            <div class="col-6 col-md-4">       
                <form action="insert-product.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="produto">Nome do Produto</label>
                        <input type="text" class="form-control" id="produto" name="produto" min="5" max="80" required>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição do Produto</label>
                        <textarea class="form-control" id="descricao" name="descricao" rows="3" min="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="preco">Preço do Produto</label>
                        <input type="text" class="form-control" id="preco" name="preco" aria-describedby="aviso-senha" min="1" onkeyup="maskIt(this,event,'###.###.###,##',true,{pre:'R$'}" required>
                        <small id="preco" class="form-text text-muted">Não coloque preços absurdos no seu produto</small>
                    </div>
                    <div class="form-group">
                        <label for="imagem">Imagem do produto</label>
                        <input type="file" class="form-control" id="imagem" name="imagem" required>
                    </div>
                    <div class="row justify-content-md-center">
                        <button type="submit" class="btn btn-outline-dark" name="submit">Colocar Produto!</button>
                    </div>
                </form>
                </div>
            </div>
</body>
</html>