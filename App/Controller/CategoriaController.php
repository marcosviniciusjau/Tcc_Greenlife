<?php
// As classes Controller são responsáveis por responder os comandos do usuário mostando a View
namespace App\Controller;

use App\Model\CategoriaModel;

use \Exception;

class CategoriaController extends Controller
{


    public static function index()
    {
        $model = new CategoriaModel();
        $model->getAllRows();
        parent::render('Categoria/ListaCategoria', $model);
    }

    // Devolverá o formulário ao usuário

    public static function form()
    {
        $model = new CategoriaModel();

        if (isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);

        parent::render('Categoria/FormCategoria', $model);
    }
    //Preencherá uma Model para que as informações sejam enviadas para o banco de dados para serem salvas.

    public static function save()
    {


        // incluirá as informações do arquivo Model.

        // Abaixo cada propriedade do objeto será postada com os dados informados pelo usuário no formulário 
        $model = new CategoriaModel();

        $model->id =  $_POST['id'];
        $model->descricao = $_POST['descricao'];
   
        $model->save(); // Chamará o método save da Model.


        header("Location: /categoria"); // Redirecionará o usuário para outra rota.
    }

    public static function delete()
    {

        $model = new CategoriaModel();

        $model->delete((int) $_GET['id']); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /categoria"); // redirecionando o usuário para outra rota.
    }
}
