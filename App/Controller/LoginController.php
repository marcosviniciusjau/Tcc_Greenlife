<?php

namespace App\Controller;
use App\DAO\LoginDAO;
use Exception;
class LoginController extends Controller
{
    public static function index()
    {
        parent::render('Login/login');

    }
    
    public static function esqueciSenha() 
    {

        parent::render('Login/esqueci-senha');
    }


    public static function enviarNovaSenha() 
    {
        try {

        
            $nova_senha = uniqid();
            $email      = $_POST['email'];

            $login_dao = new LoginDAO();
            $login_dao->setNewPassWordForUserByEmail($email, $nova_senha);

            $assunto  = "Nova Senha do Sistema";
            $mensagem = "Sua nova senha é: " . $nova_senha;


            $retorno = "Caso seu email esteja em nosso sistema você acaba de receber uma nova senha.";

            $saida_email = mail($email, $assunto, $mensagem, "From: teste.sendmail@metoda.com.br");


            if(!$saida_email)
            {
               // $teste = "Senha gerada: " . $nova_senha;

                throw new Exception("Desculpe, ocorreu um erro ao enviar o email, tente novamente mais tarde.");
            }
        } catch(Exception $e) {
            
            $retorno = $e->getMessage();
        }

        parent::render('Login/esqueci-senha');
    }

    private static function remember($user) 
    {

        $validade = strtotime("+1 month");

        setcookie("greenlife_user", $user, $validade, "/", "", false, true);
    }

    private static function forget() {

        $validade = time() - 3600;

        setcookie("greenlife_user", "", $validade, "/", "", false, true);
    }

    public static function auth()
    {
        $email = $_POST["email"];
        $senha   = $_POST["password"];
        $usuario_tipo   = $_POST["usuario_tipo"];
        $login_dao = new LoginDAO();

        $resultado = $login_dao->getByEmailAndUsuario($email, $usuario_tipo);

        //var_dump($_POST);
        //var_dump($resultado);
        //exit;

        if(is_object($resultado))
        {
            $_SESSION["usuario_logado"] = (array) $resultado;

            if(isset($_POST['remember']))
                self::remember($email);  

            if($usuario_tipo='funcionario')
                header("Location: /tela-funcionario");

                if($usuario_tipo='cliente')
                header("Location: /tela-cliente");
                 
            
        } else {
            header("Location: /login?fail=true"); 
        }
    }

      

    public static function logout()
    {
        //self::forget();
        
        unset($_SESSION["usuario_logado"]);
        parent::isAuthenticated();
    
    }

    
    public static function getEmalOfCurrentUser()
    {
        return $_SESSION['usuario_logado']['email'];
    }


    public static function updateNameOfCurrentUser($email)
    {
        $_SESSION['usuario_logado']['email'] = $email;
    }

    
    public static function getIdOfCurrentUser()
    {
        return $_SESSION['usuario_logado']['id'];
    }
    

}