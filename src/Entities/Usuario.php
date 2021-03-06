<?php

namespace Entities;

/**
 * @Entity @Table(name="usuarios")
 **/
class Usuario{

    /** @id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @nome @Column(type="string") **/
    protected $nome;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

}