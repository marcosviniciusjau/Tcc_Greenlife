<?php
// As classes Controller são responsáveis por responder os comandos do usuário mostando a View
namespace App\Controller;

use App\Model\ProdutoModel;

use \Exception;
use App\DAO\{ProdutoDAO,CategoriaDAO};

class ProdutoController extends Controller
{


    public static function index()
    {
        $arr_produtos = array();

        try {

            $model = new ProdutoModel();

            $arr_produtos = $model->getAll();

        } catch (Exception $e) {

           // echo $e->getMessage();

        }

        include PATH_VIEW . '/Produto/ListaProduto.php';
    

       
    }
    

    // Devolverá o formulário ao usuário

    public static function form()
    {
        $model = new ProdutoModel();
        
      
        $model->lista_categorias = $model->getAllCategorias();
        if (isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);

        parent::render('Produto/FormProduto', $model);
    }
    //Preencherá uma Model para que as informações sejam enviadas para o banco de dados para serem salvas.

    public static function save()
    {


        // incluirá as informações do arquivo Model.

        // Abaixo cada propriedade do objeto será postada com os dados informados pelo usuário no formulário 
        $model = new ProdutoModel();

        $model->id =  $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->link = $_POST['link'];
        $model->setCategoria((int) $_POST["id_categoria"]);
        $model->valor = $_POST['valor'];
        $model->quantidade = $_POST['quantidade'];
        //$model->imagem = $_POST['imagem'];


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

    public static function ver()
    {
        parent::isProtected();

        try {
            if (isset($_GET['id'])) {
                $model = new ProdutoModel();

                $dados = $model->getById((int) $_GET['id']);

                self::cadastrar($dados);
            } else {
                header("location: /produto");
            }
        } catch (Exception $e) {

            self::cadastrar($model);
        }
    }
    public static function delete()
    {

        $model = new ProdutoModel();

        $model->delete((int) $_GET['id']); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /produto");
    }
}
