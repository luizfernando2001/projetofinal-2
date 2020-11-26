<?php
include_once 'app/painelAdm/helpers/conexao.php';

function verificaSeLogado()
{
  $usuario = trim($_POST['usuario']);
  $senha = trim($_POST['senha']);

  $parametros = array(
    ':usuario' => $usuario
  );

  $resultConexao = new Conexao();

  $resultadoConsulta = $resultConexao->consultarBanco('SELECT * FROM usuarios WHERE nome = :usuario', $parametros);

  if (count($resultadoConsulta) > 0) {
    $senha_bd = $resultadoConsulta[0]['senha'];
    if (password_verify($senha, $senha_bd)) {
      //adiciona sessao
      $_SESSION['usuario'] = $usuario;
      return true;
    } else {
      //usuario e senha invalida
      echo 'usuario e senha invalida';
    }
  }



  // $usuario = 'luiz';
  // $senha = '123456';
  // if($_POST['usuario'] == $usuario){ 
  // } else {    
  // }

}
//-----------------------------------------------------------------------------------------------------------------------------
function inserirusuario()
{
  $nome = $_POST['nome'];
  $senha = $_POST['senha'];

  $parametros = array(
    ':nome' => $nome,
    ':senha' => password_hash($senha, PASSWORD_DEFAULT)
  );
  $resultdados = new conexao();
  $resultdados->intervencaonobanco('INSERT INTO usuarios(nome,senha) VALUES (:nome, :senha)', $parametros);
  include_once "app/painelAdm/paginas/usuarios-listar.php";
}
//----------------------------------------------------------------------------------------------------------------------------
function atualizarusuario()
{
  $idusuario = trim($_POST['id_usuario']);
  $senha = trim($_POST['senha']);
  //validando as variaveis
  $parametros = array(
    ':id_usuario' => $idusuario,
    ':senha' =>  password_hash($senha, PASSWORD_DEFAULT)
  );
  //atualizar no banco
  $atualizausuario = new conexao();
  $atualizausuario->intervencaonobanco('UPDATE usuarios SET senha = :senha WHERE id_usuarios = :id_usuario', $parametros);
  include_once "app/painelAdm/paginas/usuarios-listar.php";
}
//------------------------------------------------------------------------------------------------------------------------------
function visualizarusuario($id)
{
  if ($id) {
    $parametros = array(
      ':id_usuarios' => $_GET['id']
    );
    $resultusuarioconsulta = new conexao();
    $dados = $resultusuarioconsulta->consultarbanco('SELECT * FROM usuarios WHERE id_usuarios = :id_usuarios ', $parametros);
    if (count($dados) > 0) {
      return $dados;
    } else {
      header('Location: ?pg=usuarios-listar');
    }
  }
}
