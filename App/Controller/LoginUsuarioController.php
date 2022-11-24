<?php

namespace App\Controller;
use App\DAO\LoginUsuarioDAO;
use Exception;
class LoginUsuarioController extends Controller
{
    public static function index()
    {
        parent::render('LoginUsuario/login_usuario');

    }
    
    public static function esqueciSenha() 
    {

        parent::render('LoginUsuario/esqueci-senha');
    }

    public static function auth()
    {
        $email = $_POST["email"];
        $senha   = $_POST["senha"];

        $login_dao = new LoginUsuarioDAO();

        $resultado = $login_dao->getByEmailAndSenha($email, $senha);

        if($resultado !== false)
        {
            $_SESSION["usuario_logado"] = (array) $resultado;

            if(isset($_POST['remember']))
                self::remember($email);                                    

            //var_dump($_SESSION["usuario_logado"]);

            header("Location: /tela-cliente");

        } else 
            header("Location: /login?fail=true");        
    }


      

    public static function logout()
    {
        
        
        unset($_SESSION["usuario_logado"]);
        header("Location:/login_usuario");
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