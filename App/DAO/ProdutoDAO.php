<?php
//As classes DAO são responsáveis por executar o SQL em conjunto com o banco de dados.
namespace App\DAO;
use App\Model\ProdutoModel;
use App\DAO\CategoriaDAO;
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
           $sql = "INSERT INTO produto (nome, link, id_categoria, valor,descricao,  quantidade, imagem) VALUES (?, ?, ?, ?, ?, ?,?) ";

         $stmt = $this->conexao->prepare($sql);


         $stmt->bindValue(1, $model->nome);
         $stmt->bindValue(2, $model->link);
         $stmt->bindValue(3, $model->id_categoria);
         $stmt->bindValue(4, $model->valor);
         $stmt->bindValue(5, $model->descricao);
         $stmt->bindValue(6, $model->quantidade);
         $stmt->bindValue(7, $model->imagem);
        $stmt->execute();
    }


  
    public function update(ProdutoModel $model)
    {
        $sql = "UPDATE produto SET nome=?, link=?, id_categoria=?,  valor=?,descricao=?, quantidade=?, imagem=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->link);
        $stmt->bindValue(3, $model->id_categoria);
        $stmt->bindValue(4, $model->valor);
        $stmt->bindValue(5, $model->descricao);
        $stmt->bindValue(6, $model->quantidade);
        $stmt->bindValue(7, $model->imagem);
        $stmt->bindValue(8, $model->id);
        $stmt->execute();
    }


    public function select()
    {
        $sql = "SELECT * FROM produto ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }

    public function setCategoria(int $_id_categoria)
    {
        if (!empty($_id_categoria))
            $this->id_categoria = $_id_categoria;
        else
            $this->validaton_erros[] = "Desculpe, selecione a categoria.";
    }

    public function getAllCategorias()
    {
        $categoria_dao = new CategoriaDAO();
        
        return $categoria_dao->getAllRows();
    }

    public function getByIdCategoria($id_categoria)
    {
      
            $sql="SELECT * FROM produto WHERE id_categoria = ?";
            $stmt->bindValue(1,$id_categoria);
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_CLASS);

     
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