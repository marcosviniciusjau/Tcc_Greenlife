<?php
//As classes DAO são responsáveis por executar o SQL em conjunto com o banco de dados.
namespace App\DAO;
use App\Model\ProdutoModel;
use \PDO;
class ProdutoDAO  extends DAO
{
    // Propriedade da classe que  armazenará o link de conexão com o banco de dados.




    public function __construct()
    {
        parent::__construct();   
    }

 
    public function insert(ProdutoModel $model)
    {
           $sql = "INSERT INTO produto (nome, link, id_categoria, valor,  quantidade, imagem) VALUES (?, ?, ?, ?, ?, ?) ";

         $stmt = $this->conexao->prepare($sql);


         $stmt->bindValue(1, $model->nome);
         $stmt->bindValue(2, $model->link);
         $stmt->bindValue(3, $model->id_categoria);
         $stmt->bindValue(4, $model->valor);
         $stmt->bindValue(5, $model->quantidade);
         $stmt->bindValue(6, $model->imagem);
        $stmt->execute();
    }


  
    public function update(ProdutoModel $model)
    {
        $sql = "UPDATE produto SET nome=?, link=?, id_categoria=?,  valor=?, quantidade=?, imagem=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->link);
        $stmt->bindValue(3, $model->id_categoria);
        $stmt->bindValue(4, $model->valor);
        $stmt->bindValue(5, $model->quantidade);
        $stmt->bindValue(6, $model->imagem);
        $stmt->bindValue(7, $model->id);
        $stmt->execute();
    }


    public function select()
    {
        $sql = "SELECT * FROM produto ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


   
    public function selectById(int $id)
    {
        

        $sql = "SELECT * FROM produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    
        return $stmt->fetchObject("App\Model\ProdutoModel"); 
    }
    
    public function getById($id)
    {
        try 
        {
            $stmt = $this->conexao->prepare("SELECT * FROM produto WHERE id = ?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject('App\Model\ProdutoModel');

        } catch (PDOException $e) {
            
            throw new Exception("Erro ao obter o produto no banco de dados.");
        }
    }

   
    public function delete(int $id)
    {
        $sql = "DELETE FROM produto WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}