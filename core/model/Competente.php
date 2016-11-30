<?php

/**
 * Created by PhpStorm.
 * User: Angelo
 * Date: 30/11/2016
 * Time: 20:57
 */
class Competente
{

    private $idUtente;
    private $idMicrocategoria;

    /**
     * Competente constructor.
     * @param $idUtente
     * @param $idMicrocategoria
     */
    public function __construct($idUtente, $idMicrocategoria)
    {
        $this->idUtente = $idUtente;
        $this->idMicrocategoria = $idMicrocategoria;
    }

    /**
     * @return mixed
     */
    public function getIdUtente()
    {
        return $this->idUtente;
    }

    /**
     * @param mixed $idUtente
     */
    public function setIdUtente($idUtente)
    {
        $this->idUtente = $idUtente;
    }

    /**
     * @return mixed
     */
    public function getIdMicrocategoria()
    {
        return $this->idMicrocategoria;
    }

    /**
     * @param mixed $idMicrocategoria
     */
    public function setIdMicrocategoria($idMicrocategoria)
    {
        $this->idMicrocategoria = $idMicrocategoria;
    }

}