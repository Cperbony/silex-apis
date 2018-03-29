<?php
/**
 * Created by PhpStorm.
 * User: Claus Perbony
 * Date: 28/03/2018
 * Time: 10:57
 */

namespace Code\Sis\Entity;


class Cliente
{
    private $nome;
    private $email;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }



}