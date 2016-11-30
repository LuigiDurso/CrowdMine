<?php

/**
 * Created by PhpStorm.
 * User: giorgio
 * Date: 26/11/16
 * Time: 18:44
 */
class MicroCategoria
{
    private $id;
    private $nome;
    private $idMacrocategoria;

    /**
     * MicroCategoria constructor.
     * @param $id
     * @param $nome
     * @param $idMacrocategoria
     */
    public function __construct($id, $nome, $idMacrocategoria)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->idMacrocategoria = $idMacrocategoria;
    }

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

    /**
     * @return mixed
     */
    public function getIdMacrocategoria()
    {
        return $this->idMacrocategoria;
    }

    /**
     * @param mixed $idMacrocategoria
     */
    public function setIdMacrocategoria($idMacrocategoria)
    {
        $this->idMacrocategoria = $idMacrocategoria;
    }

}