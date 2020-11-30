<?php
include_once 'app/painelAdm/helpers/conexao.php';

function verificaSeLogado()
{
  $usuario = trim($_POST['usuario']);
  $senha = trim($_POST['senha']);
  //pegando img
  
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
      $erro = 'usuario ou senha invalidos';
      include_once "app/painelAdm/paginas/login.php";
      //usuario e senha invalida
      
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
      echo 'app/painelAdm/img/' . $_FILES['img_usuario']['name'];
      die();
      
      $img_usuario = $_FILES['img_usuario']['tmp_name'];
      move_uploaded_file($_FILES['img_usuario']['tmp_name'], 'app/painelAdm/img/' . $_FILES['img_usuario']['name']);
      die('feito');
      echo '<pre>';
      print_r($_FILES);
      
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
