<?php
/**
 * Created by PhpStorm.
 * User: Claus Perbony
 * Date: 03/04/2018
 * Time: 14:28
 */

namespace Code\Sis\Mapper;

use Code\Sis\DB\Connection;
use Code\Sis\Entity\Produto;

interface MapperInterface
{
    public function __construct(Connection $conn);
    public function insert(Produto $produto);
    public function findAll();
    public function find();
}