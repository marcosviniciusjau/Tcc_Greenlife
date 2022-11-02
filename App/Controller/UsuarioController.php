<?php

namespace App\Controller;


use App\Model\UsuarioModel;

use App\DAO\UsuarioDAO;

use stdClass;


class UsuarioController extends Controller
{
    public static function index() 
    {
   
      parent::isAuthenticated();
        $usuario_dao = new UsuarioDAO();
        $lista_usuarios = $usuario_dao->getAllRows();

      parent::render('Login/login');

        
    }

    public static function cadastrar($dados_usuario = null, array $validations = null) 
    {
    
        parent::render('Usuario/cadastar_usuario');
      
    }

    public static function salvar() 
    {


        $usuario_dao = new UsuarioDAO();

        $id_usuario = isset($_POST["id"]) ? (int) $_POST["id"] : null;


        if($usuario_dao->checkDuplicateEmail($_POST["email"], $id_usuario))
        {         
            if($id_usuario !== null)
                header("Location: /usuario/ver?duplicate_email=true&id=" . $id_usuario);
            else {

                $dados_usuario = (object) $_POST;

                self::cadastrar($dados_usuario, array('duplicate_email' => true));
            }
            
            exit;
        }

  

        $dados_para_salvar = array(
            'nome'     => $_POST["nome"],
            'email'    => $_POST["email"],
            'senha'    => $_POST["password"],
            'usuario_tipo'    => $_POST["usuario_tipo"]
        );
    

        if($id_usuario !== null) {
    
            $dados_para_salvar['id'] = $id_usuario;
    
            $usuario_dao->update($dados_para_salvar);
    
        } else {
    
            $usuario_dao->insert($dados_para_salvar);
    
            echo "Inserido.";
        }
        
        header("Location:  /usuario");     
    }

    public static function excluir()
    {
       
        parent::isAuthenticated();
        if(isset($_GET['id']))
        {
            $usuario_dao = new UsuarioDAO();

            $usuario_dao->delete($_GET['id']);

            header("Location: /usuario?excluido=true");
        } else 
            header("Location: /usuario");
    }


    public static function meusDados()
    {
        $model = new UsuarioModel();
        $model->getAllRows();

        $usuario_dao = new UsuarioDAO();

        $meus_dados = $usuario_dao->getMyUserById(LoginController::getIdOfCurrentUser());


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
        
        try {
            //$diretorio_destino = "enviados/";

            if (!is_dir(UPLOADS))
                throw new Exception("Diretório não encontrado");


            if (is_executable($_FILES["arquivo_up"]["tmp_name"]))
                throw new Exception("Arquivos Executáveis não são permitidos");



            $ext_arquivo = pathinfo($_FILES["arquivo_up"]["name"], PATHINFO_EXTENSION);




            $nome_unico = uniqid("enviado_") . "." . $ext_arquivo;


            $nome_arquivo_servidor = UPLOADS . $nome_unico;



            if (move_uploaded_file($_FILES["arquivo_up"]["tmp_name"], $nome_arquivo_servidor)) {
                $model->imagem = $nome_unico;
               // echo "Arquivo Enviado!";

            } else throw new Exception("Erro ao enviar. Erro:" . $_FILES["arquivo_up"]["error"]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        $model->save(); // Chamará o método save da Model.

        header("Location: /produto");
    
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

            $usuario_dao = new UsuarioDAO();

            $dados_para_salvar = array(
                'id' => LoginController::getIdOfCurrentUser(),
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => isset($nova_senha) ? $nova_senha : $_POST['senha_atual']
            );

            $usuario_dao->update($dados_para_salvar);

            LoginController::updateNameOfCurrentUser($dados_para_salvar['nome']);

            header("Location: /usuario/meus-dados?success=true");            

        } else 
            header("Location: /usuario/meus-dados?wrongpassword=true");
    }


    private static function checkCurrentUserPassword($password)
    {
        parent::isAuthenticated();
        
        $usuario_dao = new UsuarioDAO();

        $retorno = $usuario_dao->checkUserByIdAndPassword(LoginController::getIdOfCurrentUser(), $password);

        return (is_object($retorno)) ? true : false;
    }

    }
