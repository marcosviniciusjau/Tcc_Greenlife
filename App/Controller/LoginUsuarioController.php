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
        self::forget();
        
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