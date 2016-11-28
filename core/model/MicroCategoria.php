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
    private $name;
    private $id_macrocategoria;

    /**
     * MicroCategoria constructor.
     * @param $id
     * @param $nome
     * @param $id_macrocategoria
     */
    public function __construct($id, $name, $id_macrocategoria)
    {
        $this->id = $id;
        $this->name = $name;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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