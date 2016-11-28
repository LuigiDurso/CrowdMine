<?php

/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 28/11/2016
 * Time: 09:29
 */
class Preferito
{
    private $utente;
    private $annunci;
    private $dataAggiunta;

    /**
     * Preferito constructor.
     * @param $utente
     * @param $annunci
     * @param $dataAggiunta
     */
    public function __construct($utente, $annunci, $dataAggiunta)
    {
        $this->utente = $utente;
        $this->annunci = $annunci;
        $this->dataAggiunta = $dataAggiunta;
    }

    /**
     * @return mixed
     */
    public function getUtente()
    {
        return $this->utente;
    }

    /**
     * @param mixed $utente
     */
    public function setUtente($utente)
    {
        $this->utente = $utente;
    }

    /**
     * @return mixed
     */
    public function getAnnunci()
    {
        return $this->annunci;
    }

    /**
     * @param mixed $annunci
     */
    public function setAnnunci($annunci)
    {
        $this->annunci = $annunci;
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