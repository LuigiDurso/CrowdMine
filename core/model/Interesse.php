<?php

/**
 * Created by PhpStorm.
 * User: Angelo
 * Date: 27/11/2016
 * Time: 20:17
 */
class Interesse
{

    private $id_utente;
    private $id_microcategoria;

    /**
     * Interesse constructor.
     * @param $id_utente
     * @param $id_microcategoria
     */
    public function __construct($id_utente, $id_microcategoria)
    {
        $this->id_utente = $id_utente;
        $this->id_microcategoria = $id_microcategoria;
    }

    /**
     * @return mixed
     */
    public function getIdUtente()
    {
        return $this->id_utente;
    }

    /**
     * @param mixed $id_utente
     */
    public function setIdUtente($id_utente)
    {
        $this->id_utente = $id_utente;
    }

    /**
     * @return mixed
     */
    public function getIdMicrocategoria()
    {
        return $this->id_microcategoria;
    }

    /**
     * @param mixed $id_microcategoria
     */
    public function setIdMicrocategoria($id_microcategoria)
    {
        $this->id_microcategoria = $id_microcategoria;
    }
    
}