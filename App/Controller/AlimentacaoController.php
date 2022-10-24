<?php

namespace App\Controller;
use App\Model\AlimentacaoModel;
use \Exception;

class AlimentacaoController extends Controller
{
    public static function index()
    {  $model = new AlimentacaoModel();
        $model->getAllRows(1);
 
        parent::render('Alimentacao/alimentacao' ,$model);


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
    }
}