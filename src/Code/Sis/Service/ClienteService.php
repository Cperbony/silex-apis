<?php

namespace Code\Sis\Service;

use Code\Sis\Entity\Cliente;
use Code\Sis\Mapper\ClienteMapper;

/**
 * Created by PhpStorm.
 * User: Claus Perbony
 * Date: 28/03/2018
 * Time: 11:27
 */
class ClienteService
{

    private $cliente;
    private $clienteMapper;

    public function __construct(Cliente $cliente, ClienteMapper $clienteMapper)
    {
        $this->cliente = $cliente;
        $this->clienteMapper = $clienteMapper;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function insert(array $data)
    {
        /** @var Cliente $clienteEntity */
        $clienteEntity = $this->cliente;
        $clienteEntity->setNome($data['nome']);
        $clienteEntity->setEmail($data['email']);
        $clienteEntity->setCpf($data['cpf']);

        $mapper =  $this->clienteMapper;
        $result = $mapper->insert($clienteEntity);

        return $result;
    }
}