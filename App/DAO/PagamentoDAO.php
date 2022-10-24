<?php
namespace App\DAO;
use App\Model\PagamentoModel;
use \PDO;

class PagamentoDAO extends DAO
{

    public function __construct()
    {
        parent::__construct();       
    }


    public function insert(PagamentoModel $model)
    {
      
        $sql = "INSERT INTO pagamento (nome, numero, data_validade, cvv) VALUES (?, ?, ?,?) ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->numero);
        $stmt->bindValue(3, $model->data_validade);
        $stmt->bindValue(4, $model->cvv);
    

        $stmt->execute();
    }


    public function update(PagamentoModel $model)
    {
        $sql = "UPDATE pagamento SET nome=?, numero=?, data_validade=? cvv=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->numero);
        $stmt->bindValue(3, $model->data_validade);
        $stmt->bindValue(4, $model->cvv);
        $stmt->bindValue(5, $model->id);
        $stmt->execute();
    }


    /**
     * Método que retorna todas os registros da tabela pessoa no banco de dados.
     */
    public function select()
    {
        $sql = "SELECT * FROM pagamento ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        // Retorna um array com as linhas retornadas da consulta. Observe que
        // o array é um array de objetos. Os objetos são do tipo stdClass e 
        // foram criados automaticamente pelo método fetchAll do PDO.
        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


    /**
     * Retorna um registro específico da tabela pessoa do banco de dados.
     * Note que o método exige um parâmetro $id do tipo inteiro.
     */
    public function selectById(int $id)
    {
        $sql = "SELECT * FROM pagamento WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\PagamentoModel"); // Retornando um objeto específico PessoaModel
    }


    /**
     * Remove um registro da tabela pessoa do banco de dados.
     * Note que o método exige um parâmetro $id do tipo inteiro.
     */
    public function delete(int $id)
    {
        $sql = "DELETE FROM pagamento WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}