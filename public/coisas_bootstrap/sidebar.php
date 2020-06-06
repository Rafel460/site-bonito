<!-- COLOCAR UMA VARIAVEL $pagina COM O NOME DA PAGINA -->
<div class="container-fluid h-100">
    <div class="row h-100">
        <aside class="col-12 col-md-2 p-0 bg-dark">
            <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start">
                <div class="collapse navbar-collapse">
                    <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                        <li class="nav-item">
                        <a class="navbar-brand" href="#"><img src="https://img.icons8.com/ios/50/000000/octopus.png"/>&nbsp;<?=$username?></a>
                        </li>
                        <li class="nav-item"><a href="#" <?php if($pagina == "tela-inicio"){echo "class='nav-link active'";}else{echo "class='nav-link'";} ?>>Home</a></li>
                        <li class="nav-item">Teste</li>
                        <li class="nav-item">Teste</li>
                        <li class="nav-item">Teste</li>
                        ..
                    </ul>
                    
                </div>
            </nav>
        </aside>
        <main class="col">
            <nav></nav>
        </main>
    </div>
</div>