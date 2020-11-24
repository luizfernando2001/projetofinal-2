<?php
include_once 'app/painelAdm/helpers/conexao.php';

function verificaSeLogado()
{
  $usuario = $_POST['usuario'];
  $resultConexao = new Conexao();
  $parametros = array(
    ':usuario' => $usuario
  );
  $resultadoConsulta = $resultConexao->consultarBanco('SELECT * FROM usuarios WHERE nome = :usuario', $parametros);
  if (count($resultadoConsulta) > 0) {
    //adiciona sessao
    $_SESSION['usuario'] = $usuario;
    return true;
  } else {
    //usuario e senha invalida
    echo 'usuario e senha invalida';
  }


  // $usuario = 'luiz';
  // $senha = '123456';
  // if($_POST['usuario'] == $usuario){ 
  // } else {    
  // }

}

function inserirusuario()
{
  $nome = ($_POST['nome']);
  $senha = ($_POST['senha']);

  $parametros = array(
    ':nome' => $nome,
    ':senha' => password_hash($senha, PASSWORD_DEFAULT)
  );
  $resultdados = new conexao();
  $resultdados->intervencaonobanco('INSERT INTO usuarios(nome, senha) VALUES (:nome, :senha)', $parametros);
  include_once "app/painelAdm/paginas/usuarios-listar.php";
}
function atualizarusuario()
{
  $idusuario = trim($_POST['id']);
  $senha = trim($_POST['senha']);
  //validando as variaveis
  $parametros = array(
    ':id_usuarios' => $idusuario,
    ':senha' => $senha
  );
  //atualizar no banco
  $atualizausuario = new conexao();
  $atualizausuario->intervencaonobanco('UPDATE usuarios SET senha = :senha WHERE id_usuarios = :id_usuarios', $parametros);
  include_once "app/painelAdm/paginas/usuarios-listar.php";
}
