<?php
/**
 * Created by PhpStorm.
 * User: Claus Perbony
 * Date: 03/04/2018
 * Time: 14:34
 */

namespace Code\Sis\Service;

interface ProdutoServiceInterface
{
    //public function __construct(Produto $produto, MapperInterface $mapper);
    public function insert(array $data);
    public function findAll();
    public function find();
}