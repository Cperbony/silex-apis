<?php
/**
 * Created by PhpStorm.
 * User: Claus Perbony
 * Date: 03/04/2018
 * Time: 12:57
 */

namespace Code\Sis\Mapper;

use Code\Sis\DB\Connection;
use Code\Sis\Entity\Produto;
use Code\Sis\Service\ProdutoService;

class ProdutoMapper implements MapperInterface
{
    /**
     * @var Connection
     */
    private $conn;
    /**
     * @var ProdutoService
     */
    private $service;

    /**
     * ProdutoMapper constructor.
     * @param Connection $conn
     */
    public function __construct(Connection $conn)
    {
        $this->conn = $conn;
    }

    public function insert(Produto $produto)
    {
        $sql = "INSERT INTO produtos(nome, valor, descricao) VALUES (:nome, :valor, :descricao)";
        $stmt = $this->conn->getInstance()->prepare($sql);
        $stmt->bindValue(':nome', $produto->getNome());
        $stmt->bindValue(':valor', $produto->getValor());
        $stmt->bindValue(':descricao', $produto->getDescricao());
        $stmt->execute();

        if(!$stmt){
            return " Erro ao Inserir";
        }
        $result = $this->conn->getInstance()->query("SELECT * FROM produtos");
        return 'O Produto ' . $result->rowCount() . ' foi inserido com Sucesso';
    }

    public function findAll()
    {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->conn->getInstance()->prepare($sql);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function find() {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->conn->getInstance()->prepare($sql);

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}