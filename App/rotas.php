<?php

use App\Controller\{HomeController,LoginADMController,ADMController,
                    ProdutoController,LoginUsuarioController,TelaADMController,
                    TelaClienteController,AlimentacaoController,CosmeticosController,
                    HigieneController,VestuarioController,PromocoesController,ComentariosController,
                    CategoriaController,UsuarioController,ContatoController};

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

        case '/fale_conosco':
            ContatoController::index();
        break;

        case '/comentarios':
            ComentariosController::form();
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
        case '/categoria/ver':
            CategoriaController::ver();                       
        break;
        case '/categoria/salvar':
            CategoriaController::save();
        break;

        case '/categoria/excluir':
            CategoriaController::excluir();
        break;
        case '/login_usuario':
            LoginUsuarioController::index();
        break;

        case '/login_usuario/auth':
            LoginUsuarioController::auth();
        break;
    
        case '/logout_usuario':
            LoginUsuarioController::logout();
        break;

        case '/esqueci-a-senha':
            LoginUsuarioController::esqueciSenha();
        break;

        case '/enviar-nova-senha':
            LoginUsuarioController::enviarNovaSenha();
        break;

        case '/tela-adm':
            TelaADMController::index();
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

        case '/usuario/form':
            UsuarioController::form();
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

                 case '/login_adm':
                    LoginADMController::index();
                break;
        
                case '/login_adm/autenticar':
                    LoginADMController::autenticar();
                break;
            
                case '/logout':
                    LoginADMController::logout();
                break;
        
                case '/esqueci-a-senha':
                    LoginADMController::esqueciSenha();
                break;
        
                case '/enviar-nova-senha':
                    LoginADMController::enviarNovaSenha();
                break;
        
                case '/tela-adm':
                    TelaADMController::index();
                break;
        
                case '/tela-cliente':
                    TelaClienteController::index();
                break;
        
                case '/tela-cliente/logout':
                    TelaClienteController::logout();
                break;
        
                case '/adm':
                    ADMController::index();
                break;
        
                case '/adm/form':
                    ADMController::form();
                break;
        
                case '/adm/salvar':
                    ADMController::salvar();
                break;
        
                case '/adm/meus-dados':            
                    ADMController::meusDados();
                break;
        
                case '/adm/meus-dados/salvar':            
                    ADMController::meusDadosSalvar();
                break;
                
                case '/adm/logout':
                    ADMController::logout();
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

        case '/produto/ver':
            ProdutoController::ver();                       
        break;
        case '/produto/delete':
        ProdutoController::delete();
        break;

        default:
        echo "Erro 404";
        break;
}
