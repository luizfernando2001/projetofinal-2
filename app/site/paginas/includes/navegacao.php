<div class="container-fluid navega ">
  <div class="container">
    <nav class="navbar  navbar-expand-lg navbar-danger">
      <a class="navbar-brand" href="#"><img src="app/assets/img/logo2.png" class="img-fluid" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="icon-menu1
 text-primary"></span>
      </button>

      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item active"><a class="botao nav-link <?php echo (($_GET ['pg'] == 'inicial') ? 'btn py-2 btn-primary' : ''); ?>" href="?pg=inicial">Inicial <span class="sr-only">(pagina atual)</span></a></li>
          <li class="nav-item active"><a class="botao nav-link  <?php echo (($_GET ['pg'] == 'produtos') ? 'btn py-2 btn-primary' : ''); ?>" href="?pg=produtos">Produtos <span class="sr-only">(pagina atual)</span></a></li>
          <li class="nav-item active"><a class="botao nav-link  <?php echo (($_GET ['pg'] == 'contato') ? 'btn py-2 btn-primary' : ''); ?>" href="?pg=contato">Contato <span class="sr-only">(pagina atual)</span></a></li>

        </ul>
<?php  
if (isset($_SESSION[''])) {?>
<ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="botao2 icon-user"></span>Login
            </a>
            <div class="botao dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="botao3 dropdown-item text-danger" href="#"><span class="icon-exit botao3 "></span>Sair</a>
            </div>
          </li>
        </ul>
<?php
}else{?>
<ul class="navbar-nav">
          <li class="vav-item active">
              <a class="nav-link btn btn-outline-secondary" href="cpanel.php?pg=cpanel">ADM</a>
          </li>
        </ul>
        <?php
}
?>

        

        
      </div>
    </nav>
  </div>
</div>
