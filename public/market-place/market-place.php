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
    $i = 0;
    $pagina = "market-place";
    require_once("../coisas_bootstrap/hover-effect.php");
    require_once("../tela-inicio/select-user.php");
    require_once("../coisas_bootstrap/navbar-user.php");
    require_once("select-products.php");
    ?>
    <br>

    <!-- TEM QUE FAZER A CONSULTA ASSOCIADA COM O USUARIO QUE CRIOU O PRODUTO  -->
    <div class="row justify-content-md-center">
    <h2>Hey, você também pode cadastrar um produto!</h2> &nbsp;&nbsp;&nbsp;
    <a class="btn btn-outline-dark" href="inserir-produto.php">Colocar um Produto!</a>
    </div>
    <br>
     <div class="row justify-content-md-center">
    
        <? while($registros = mysqli_fetch_assoc($query)){
            $i++;
            ?>
    
        <div class="card" style="width: 18rem;">
         <div class="hovereffect">
        <img src=<?echo '"'.$registros['path'].'"'?> class="card-img-top image-responsive" alt="..." width="300px" height="300px">
        <div class="overlay">
           <h2><?=$registros['nomeprod']?></h2>
           <a class="info" href="javascript:void(0)">Comprar Produto</a>
        </div>
        </div> 
        
        <div class="card-body">
        <h5 class="card-title"><?=$registros['nomeprod']?></h5>
        <p class="card-subtitle mb-2 text-muted"><?=$registros['username']?></p>
        <p class="card-text"><?=$registros['descricao']?></p>
        <p class="card-text text-right">Preço R$ <?=$registros['preco']?></p>
        </div>
        
        </div>
        
        &nbsp;&nbsp;&nbsp;
        
        <? }?>
        
        </div>
            <br>
            <div class="row justify-content-md-center">
            
            </div>
</body>
</html>