
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <img src="https://www.jamf.com/jamf-nation/img/default-avatars/generic-user-purple.png" class="rounded-circle" width="40px" height="40px">
      <!-- Começa o dropdown -->
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?=$username?></a>
        <div class="dropdown-menu">
            <a <? if($pagina=="user-page" ){echo "class='dropdown-item active'";}else{echo "class='dropdown-item'"; }?> href="../user-page/user-page.php"><img src="https://img.icons8.com/material-sharp/20/000000/customize-view.png"/>&nbsp;&nbsp;Conf. da Conta</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="../../banco/logout.php?logout=true"><img src="https://img.icons8.com/windows/20/000000/logout-rounded-left.png"/>&nbsp;&nbsp;Logout</a>
    </div>  
      <!-- Termina o dropdown -->
      <a <? if($pagina == "tela-inicio"){echo "class='nav-item nav-link active'"; }else{ echo "class='nav-item nav-link'";}?> href="../tela-inicio/tela-inicio.php"><img src="https://img.icons8.com/material-outlined/20/000000/home--v2.png"/>&nbsp;&nbsp;Home</a>
      <a  <? if($pagina == "market-place"){echo "class='nav-item nav-link active'"; }else{ echo "class='nav-item nav-link'";}?> href="../market-place/market-place.php"><img src="https://img.icons8.com/ios-glyphs/20/000000/e-commerce--v1.png"/>&nbsp;&nbsp;MarketPlace</a>
      <a class="nav-item nav-link" href="#"><img src="https://img.icons8.com/windows/20/000000/news.png"/>&nbsp;&nbsp;Ultimas Notícias</a>
      <a <? if($pagina == "releases"){echo "class='nav-item nav-link active'"; }else{ echo "class='nav-item nav-link'";}?> href="../releases/releases.php"><img src="https://img.icons8.com/windows/20/000000/journal.png"/>&nbsp;&nbsp;Releases</a>
    </div>
    <ul class="navbar-nav ml-auto mr-20">
        
        </ul>
    <nav class="navbar navbar-dark bg-dark">
      <form class="form-inline my-2 my-lg-0" action="../usuarios-cadastrados/usuarios-cadastrados.php" method="get">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar coisas" aria-label="Search" name="param">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="submit">Pesquisar</button>
        </form>
      </nav>
  </div>
</nav>