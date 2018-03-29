<?php
/**
 * Created by PhpStorm.
 * User: Claus Perbony
 * Date: 28/03/2018
 * Time: 10:59
 */

namespace Code\Sis\Mapper;

use Code\Sis\Entity\Cliente;

class ClienteMapper
{
    public function insert(Cliente $cliente)
    {
        return [
            'nome' => 'Cliente 1',
            'email' => 'email@claus.com',
            'cpf' => '1234567890'
        ];
    }
}