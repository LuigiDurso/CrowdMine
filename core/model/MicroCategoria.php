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
    private $id_macrocategoria;

    /**
     * MicroCategoria constructor.
     * @param $id
     * @param $nome
     * @param $id_macrocategoria
     */
    public function __construct($id, $nome, $id_macrocategoria)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->id_macrocategoria = $id_macrocategoria;
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
        return $this->id_macrocategoria;
    }

    /**
     * @param mixed $id_macrocategoria
     */
    public function setIdMacrocategoria($id_macrocategoria)
    {
        $this->id_macrocategoria = $id_macrocategoria;
    }






}