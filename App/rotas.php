<?php

use App\Controller\{HomeController,PagamentoController,
                    ProdutoController,LoginController,TelaFuncionarioController,
                    TelaClienteController,MeusDadosController,AlimentacaoController,CosmeticosController,
                    HigieneController,VestuarioController,PromocoesController,ComentariosController,
                    CategoriaController,UsuarioController,CarrinhoController};

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) 
{
        case '/':
            HomeController::index();
        break;
         
        case '/alimentacao':
            AlimentacaoController::index();
        break;

        case '/cosmeticos':
            CosmeticosController::index();
        break;

        case '/vestuario':
            VestuarioController::index();
        break;

        case '/higiene':
            HigieneController::index();
        break;
                        
        case '/promocoes':
             PromocoesController::index();
        break;

        case '/comentarios':
            ComentariosController::index();
        break;
              
        case '/comentarios/form/save':
            ComentariosController::save();
        break;  

        case '/categoria':
            CategoriaController::index();
        break;

        case '/categoria/form':
            CategoriaController::form();
        break;

        case '/categoria/form/save':
            CategoriaController::save();
        break;

        case '/login':
            LoginController::index();
        break;

        case '/login/auth':
            LoginController::auth();
        break;
    
        case '/logout':
            LoginController::logout();
        break;

        case '/esqueci-a-senha':
            LoginController::esqueciSenha();
        break;

        case '/enviar-nova-senha':
            LoginController::enviarNovaSenha();
        break;

        case '/tela-funcionario':
            TelaFuncionarioController::index();
        break;

        case '/tela-cliente':
            TelaClienteController::index();
        break;

        case '/tela-cliente/logout':
            TelaClienteController::logout();
        break;

        case '/usuario':
            UsuarioController::index();
        break;

        case '/usuario/cadastrar':
            UsuarioController::cadastrar();
        break;

        case '/usuario/salvar':
            UsuarioController::salvar();
        break;

        case '/usuario/meus-dados':            
            UsuarioController::meusDados();
        break;

        case '/usuario/meus-dados/salvar':            
            UsuarioController::meusDadosSalvar();
        break;
        
        case '/usuario/logout':
            UsuarioController::logout();
            break;

        case '/usuario/excluir':
                UsuarioController::excluir();    
                 break;

       
        case '/pagamento':
        PagamentoController::index();
        break;

        case '/pagamento/form':
        PagamentoController::form();
        break;

        case '/pagamento/form/save':
        PagamentoController::save();
        break;

        case '/pagamento/delete':
        PagamentoController::delete();
        break;

        case '/produto':
        ProdutoController::index();
        break;
    
        case '/produto/form':
        ProdutoController::form();
        break;
    
        case '/produto/form/save':
        ProdutoController::save();
        break;
    
        case '/produto/delete':
        ProdutoController::delete();
        break;

        default:
        echo "Erro 404";
        break;
}
