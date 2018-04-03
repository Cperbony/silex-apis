<?php
/**
 * Created by PhpStorm.
 * User: Claus Perbony
 * Date: 03/04/2018
 * Time: 13:30
 */

namespace Code\Sis\Service;


use Code\Sis\Entity\Produto;
use Code\Sis\Mapper\MapperInterface;

class ProdutoService implements ProdutoServiceInterface
{
    private $produto;
    private $mapper;

    public function __construct(Produto $produto, MapperInterface $mapper)
    {
        $this->produto = $produto;
        $this->mapper = $mapper;
    }

    public function insert(array $data)
    {
        $produtoEntity = $this->produto;
        $produtoEntity->setNome($data['nome']);
        $produtoEntity->setValor($data['valor']);
        $produtoEntity->setDescricao($data['descricao']);

        return $this->mapper->insert($produtoEntity);
    }

    public function findAll()
    {
        return $this->mapper->findAll();
    }

    public function find()
    {
        return $this->mapper->find();
    }
}