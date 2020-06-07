<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Bonito</title>
    <? require_once("../coisas_bootstrap/bootstrap.php");?>

</head>
<body>
    <? 
    $pagina = "market-place";
    require_once("../tela-inicio/select-user.php");
    require_once("../coisas_bootstrap/navbar-user.php");
    require_once("select-products.php");
    ?>
    <br>
    <!-- TEM QUE FAZER A CONSULTA ASSOCIADA COM O USUARIO QUE CRIOU O PRODUTO  -->
     <div class="row justify-content-md-center">
        <? while($registros = mysqli_fetch_assoc($query)){ ?>
    
        <div class="card" style="width: 18rem;">
        <img src=<?echo '"'.$registros['path'].'"'?> class="card-img-top image-responsive" alt="..." width="300px" height="300px">
        <div class="card-body">
        <h5 class="card-title"><?=$registros['nomeprod']?></h5>
        <p class="card-text"><?=$registros['descricao']?></p>
        <p class="card-text text-right">Preço R$ <?=$registros['preco']?></p>
        </div>
        </div>
        &nbsp;&nbsp;&nbsp;
        
        <? }?>
        
        </div>
            <br><br>
            <div class="row justify-content-md-center">
            <a class="btn btn-outline-dark" href="inserir-produto.php">Colocar um Produto!</a>
            </div>
</body>
</html>