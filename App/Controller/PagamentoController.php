<?php

namespace App\Controller;
use App\Model\PagamentoModel;
class PagamentoController extends Controller
{



    public static function index()
    {      
        $model = new PagamentoModel(); // Instância da Model
        $model->getAllRows(); // Obtendo todos os registros, abastecendo a propriedade $rows da model.

     
        parent::render('Pagamento/ListaPagamento', $model);
    }


    /**
     * Devolve uma View contendo um formulário para o usuário.
     */
    public static function form()
    {
        $model = new PagamentoModel();

        if(isset($_GET['id'])) // Verificando se existe uma variável $_GET
            $model = $model->getById( (int) $_GET['id']); // Typecast e obtendo o model preenchido vindo da DAO.
            // Para saber mais sobre Typecast, leia: https://tiago.blog.br/type-cast-ou-conversao-de-tipos-do-php-isso-pode-te-ajudar-muito/
        
        parent::render('Pagamento/FormPagamento', $model);
    }


    /**
     * Preenche um Model para que seja enviado ao banco de dados para salvar.
     */
    public static function save()
    {
       // Abaixo cada propriedade do objeto sendo abastecida com os dados informados
       // pelo usuário no formulário (note o envio via POST)
       $model = new PagamentoModel();

       $model->id =  $_POST['id'];
       $model->nome = $_POST['nome'];
       $model->numero = $_POST['numero'];
       $model->cvv = $_POST['cvv'];
       $model->data_validade = $_POST['data_validade'];

       $model->save(); // chamando o método save da model.

       header("Location: /pagamento"); // redirecionando o usuário para outra rota.
    }


    /**
     * Método para tratar a rota delete. 
     */
    public static function delete()
    {
        $model = new PagamentoModel();

        $model->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /pagamento"); // redirecionando o usuário para outra rota.
    }
}