<?php

namespace App\Controller;


use App\Model\UsuarioModel;

use App\DAO\UsuarioDAO;

use stdClass;
use Exception;

class UsuarioController extends Controller
{
    public static function index() 
    {
   
      parent::isAuthenticated();
        $usuario_dao = new UsuarioDAO();
        $lista_usuarios = $usuario_dao->getAllRows();

      parent::render('LoginUsuario/login_usuario');

        
    }
    public static function form() 
    {
        $model = new UsuarioModel();
        parent::render('Usuario/cadastrar_usuario', $model);
        
      
    }

  
    public static function salvar()
    {
        $model = new UsuarioModel();

        $model->id =  $_POST['id'];
        $model->nome_usuario = $_POST['nome_usuario'];
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];
     

    $model->save();  
    header("Location: /usuario");


}

public static function meusDados()
    {
        $model = new UsuarioModel();
        $model->getAllRows();
        $usuario_dao = new UsuarioDAO();
        $meus_dados = $usuario_dao->getMyUserById(LoginUsuarioController::getIdOfCurrentUser());
        if(isset($_GET['success']))
        {
            $retorno['positivo'] = "Dados alterados com sucesso!";
        }
        if(isset($_GET['wrongpassword']))
        {
            $retorno['senha_incorreta'] = "Senha incorreta. As alterações não foram salvas.";
        }
        if(isset($_GET['wrongpasswordconfirmacation']))
        {
            $retorno['senha_confirmacao_incorreta'] = "A confirmação da nova senha não confere com a nova senha.";
        }
        
        require PATH_VIEW . '/TelaCliente/meus-dados.php';
    
    }
    public static function meusDadosSalvar()
    {
         parent::isAuthenticated();
        // Verificando se o usuário colocou a senha atual correta
        if (self::checkCurrentUserPassword($_POST['senha_atual'])) 
        {
            // Verificar se o usuário quer alterar a senha
            if(!empty($_POST['nova_senha']))
            {
                if($_POST['nova_senha'] == $_POST['confirmacao_nova_senha'])
                {
                    $nova_senha = $_POST['nova_senha'];
                } else {
                    header("Location: /usuario/meus-dados?wrongpasswordconfirmacation=true");
                }
            }
            $model = new UsuarioModel();
           
           
            $model->id =  LoginUsuarioController::getIdOfCurrentUser();
             $model->nome_usuario = $_POST['nome_usuario'];
            $model->email = $_POST['email'];
            $model->senha =isset($nova_senha) ? $nova_senha : $_POST['senha_atual'];
            try {
         
                if (!is_dir(UPLOADS))
                    throw new Exception("Diretório não encontrado");
    
                if (is_executable($_FILES["arquivo_up"]["tmp_name"]))
                    throw new Exception("Arquivos Executáveis não são permitidos");
    
                $ext_arquivo = pathinfo($_FILES["arquivo_up"]["name"], PATHINFO_EXTENSION);
    
                $nome_unico = uniqid("enviado_") . "." . $ext_arquivo;
    
                $nome_arquivo_servidor = UPLOADS . $nome_unico;
    
                if (move_uploaded_file($_FILES["arquivo_up"]["tmp_name"], $nome_arquivo_servidor)) {
                    $model->foto_perfil = $nome_unico;
            
                } else throw new Exception("Erro ao enviar. Erro:" . $_FILES["arquivo_up"]["error"]);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            $model->save();
            header("Location: /tela-cliente");
    
    
            $model->save();
            LoginUsuarioController::updateNameOfCurrentUser($model['nome_usuario']);
            header("Location: /usuario/meus-dados?success=true");            
        } else 
            header("Location: /usuario/meus-dados?wrongpassword=true");
    }


    private static function checkCurrentUserPassword($password)
    {
        parent::isAuthenticated();
        
        $usuario_dao = new UsuarioDAO();

        $retorno = $usuario_dao->checkUserByIdAndPassword(LoginUsuarioController::getIdOfCurrentUser(), $password);

        return (is_object($retorno)) ? true : false;
    }
    public static function logout()
    {
    
        
        unset($_SESSION["usuario_logado"]);
        header("Location:/login_usuario");
    }
  
    public static function excluir()
    {
        parent::isProtected();
        
        if(isset($_GET['id']))
        {
            $usuario_dao = new UsuarioDAO();

            $usuario_dao->delete($_GET['id']);

            header("Location: /usuario?excluido=true");
        } else 
            header("Location: /usuario");
    }
    }
