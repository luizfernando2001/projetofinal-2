<?php 
function verificaSeLogado(){
$usuario = 'luiz';
$senha = '123456';

if($_POST['usuario'] == $usuario){
   $_SESSION['usuario']=$usuario;
  return true;
} else { 
    echo 'usuario e senha invalida';
}

}
