<?php
//Header
include_once "app/site/paginas/includes/header.php";
//Navegaçao 
include_once "app/site/paginas/includes/navegacao.php";

include_once "app/painelAdm/helpers/conexao.php";

// Páginas do meu Site 

$paginas = isset($_GET['pg']);
if ($paginas) {
    # code...
    switch ($_GET['pg']) {

        case 'inicial':
            include_once "app/site/paginas/inicial.php";
            break;

        case 'produtos':
            include_once "app/site/paginas/produtos.php";
            break;

            case 'contato':
                include_once "app/site/paginas/contato.php";
                break;

        case 'cad_mensagem':
            //pegar as variaveis via post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $cat = $_POST['cat'];
                $msg = $_POST['msg'];
                
                
                $parametros = array(
                    ':nome' => $nome,
                    ':email' => $email,
                    ':cat' => $cat,
                    ':msg' => $msg,
                    

                );
                $inserirmsg = new conexao();
                $inserirmsg->intervencaonobanco('INSERT INTO contato (nome, email, cat, msg) VALUE (:nome, :email, :cat, :msg)', $parametros);
                header('location: ?pg=contato');
            } else { 
            }
            //validar paramentros 
            //inserir banco de dados
            //retornanr tela de mensagem
           
            break;

            case 'validalogin':
                include_once "app/site/paginas/validalogin.php";
                break;



        default:
            include_once "app/site/paginas/inicial.php";
            break;
    }
} else {
    include_once "app/site/paginas/inicial.php";
}
//Rodape
include_once "app/site/paginas/includes/footer.php";
