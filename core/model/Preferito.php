<?php

/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 28/11/2016
 * Time: 09:29
 */
class Preferito
{
    private $idUtente;
    private $idAnnuncio;
    private $dataAggiunta;

    /**
     * Preferito constructor.
     * @param $idUtente
     * @param $idAnnuncio
     * @param $dataAggiunta
     */
    public function __construct($idUtente, $idAnnuncio, $dataAggiunta)
    {
        $this->idUtente = $idUtente;
        $this->idAnnuncio = $idAnnuncio;
        $this->dataAggiunta = $dataAggiunta;
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
    public function getIdAnnuncio()
    {
        return $this->idAnnuncio;
    }

    /**
     * @param mixed $idAnnuncio
     */
    public function setIdAnnuncio($idAnnuncio)
    {
        $this->idAnnuncio = $idAnnuncio;
    }

    /**
     * @return mixed
     */
    public function getDataAggiunta()
    {
        return $this->dataAggiunta;
    }

    /**
     * @param mixed $dataAggiunta
     */
    public function setDataAggiunta($dataAggiunta)
    {
        $this->dataAggiunta = $dataAggiunta;
    }

}