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
    ?>
    <br>
     <div class="row justify-content-md-center">
        <? for($i = 0; $i < 3; $i++){ ?>
    
        <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-text">Item <?=$i+1?></p>
        </div>
        </div>
       
        
        <? }?>
        </div>


</body>
</html>