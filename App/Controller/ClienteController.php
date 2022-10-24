<?php

namespace App\Controller;

use App\DAO\{ ClienteDAO};
use stdClass;

class ClienteController extends Controller
{
    public static function index() 
    {
        parent::isProtected();

        $usuario_dao = new ClienteDAO();
       

      
    }

    public static function ver() 
    {
        parent::isProtected();

        if(isset($_GET['id']))
        {
      
            $cliente_dao = new ClienteDAO();
            $dados_cliente = $cliente_dao->getById($_GET['id']);

            include PATH_VIEW . 'modulos/cliente/cadastrar_cliente.php';
        } else 
            header("Location: /cliente"); 
    }

    public static function cadastrar($dados_cliente = null, array $validations = null) 
    {
        parent::isProtected();

       
        include PATH_VIEW . 'modulos/cliente/cadastrar_cliente.php';
    }

    public static function salvar() 
    {
        parent::isProtected();

        $cliente_dao = new UsuarioDAO();

        $id_cliente = isset($_POST["id"]) ? (int) $_POST["id"] : null;


        if($cliente_dao->checkDuplicateEmail($_POST["email"], $id_cliente))
        {         
            if($id_cliente !== null)
                header("Location: /cliente/ver?duplicate_email=true&id=" . $id_cliente);
            else {

                $dados_cliente = (object) $_POST;

                self::cadastrar($dados_cliente, array('duplicate_email' => true));
            }
            
            exit;
        }

        if($cliente_dao->checkDuplicateUsuario($_POST["cliente"], $id_cliente))
        {
            if($id_cliente !== null)
                header("Location: /cliente/ver?duplicate_user=true&id=" . $id_cliente);
            else
                header("Location: /cliente/cadastrar?duplicate_user=true");
            
            exit;
        }
    

        $dados_para_salvar = array(
            'nome'     => $_POST["nome"],
            'email'    => $_POST["email"],
            'cliente'  => $_POST["cliente"],
            
        );
    

        if($id_cliente !== null) {
    
            $dados_para_salvar['id'] = $id_cliente;
    
            $cliente_dao->update($dados_para_salvar);
    
        } else {
    
            $cliente_dao->insert($dados_para_salvar);
    
            echo "Inserido.";
        }
        
        header("Location:  /cliente");     
    }

   
    public static function meusDados()
    {
        parent::isProtected();

        $cliente_dao = new UsuarioDAO();

        $meus_dados = $cliente_dao->getMyUserById(LoginController::getIdOfCurrentUser());


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

        require PATH_VIEW . '/modulos/cliente/meus-dados.php';
    }


    public static function meusDadosSalvar()
    {
        parent::isProtected();

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
                    header("Location: /cliente/meus-dados?wrongpasswordconfirmacation=true");
                }
            }

            $cliente_dao = new ClienteDAO();

            $dados_para_salvar = array(
                'id' => LoginController::getIdOfCurrentUser(),
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => isset($nova_senha) ? $nova_senha : $_POST['senha_atual']
            );

            $usuario_dao->update($dados_para_salvar);

            LoginController::updateNameOfCurrentUser($dados_para_salvar['nome']);

            header("Location: /cliente/meus-dados?success=true");            

        } else 
            header("Location: /cliente/meus-dados?wrongpassword=true");
    }


    private static function checkCurrentUserPassword($password)
    {
        $cliente_dao = new ClienteDAO();

        $retorno = $cliente_dao->checkUserByIdAndPassword(LoginController::getIdOfCurrentUser(), $password);

        return (is_object($retorno)) ? true : false;
    }

}