<?php

namespace App\Controller;
use App\DAO\LoginADMDAO;
use Exception;
class LoginADMController extends Controller
{
    public static function index()
    {
        parent::render('LoginADM/login_adm');

    }
    
    public static function esqueciSenha() 
    {

        parent::render('LoginADM/esqueci-senha');
    }


  

    private static function remember($adm) 
    {

        $validade = strtotime("+1 month");

        setcookie("greenlife_adm", $adm, $validade, "/", "", false, true);
    }

    private static function forget() {

        $validade = time() - 3600;

        setcookie("greenlife_adm", "", $validade, "/", "", false, true);
    }

    public static function autenticar()
    {
        $email_adm = $_POST["email_adm"];
        $senha_adm   = $_POST["senha_adm"];

        $login_dao = new LoginADMDAO();

        $resultado = $login_dao->getByEmailAndSenha($email_adm, $senha_adm);

        if($resultado !== false)
        {
            $_SESSION["adm_logado"] = (array) $resultado;

            if(isset($_POST['remember']))
                self::remember($adm);                                    

            //var_dump($_SESSION["usuario_logado"]);

            header("Location: /tela-adm");

        } else 
            header("Location: /login?fail=true");        
    }


      

    public static function logout()
    {
        self::forget();
        
        unset($_SESSION["adm_logado"]);
        parent::isAuthenticated();
    
    }

    
    public static function getEmalOfCurrentUser()
    {
        return $_SESSION['adm_logado']['email_adm'];
    }


    public static function updateNameOfCurrentUser($email_adm)
    {
        $_SESSION['adm_logado']['email_adm'] = $email_adm;
    }

    
    public static function getIdOfCurrentUser()
    {
        return $_SESSION['adm_logado']['id'];
    }
    

}