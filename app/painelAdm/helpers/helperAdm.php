<?php 
include_once 'app/painelAdm/helpers/conexao.php';

function verificaSeLogado()
{
  $usuario = $_POST['usuario'];
  $resultConexao = new Conexao();
$parametros= array(
  ';usuario'=>$usuario
);  
  $resultadoConsulta = $resultConexao->consultarBanco('SELECT * FROM usuarios WHERE nome = ;usuario', $parametros);
if (count($resultadoConsulta) > 1 ) {
  //adiciona sessao
   $_SESSION['usuario']=$usuario;
  return true;
}else {
  //usuario e senha invalida
 echo 'usuario e senha invalida';
}


// $usuario = 'luiz';
// $senha = '123456';
// if($_POST['usuario'] == $usuario){ 
// } else {    
// }

}
