<?php

/**
 * Created by PhpStorm.
 * User: giorgio
 * Date: 27/11/16
 * Time: 14:21
 */
class Candidatura
{
    private $id;
    private $idUtente;
    private $idAnnuncio;
    private $body;
    private $dataRisposta;
    private $dataInviata;
    private $richiestaInviata;
    private $richiestaAccettata;

    /**
     * Candidatura constructor.
     * @param $id
     * @param $idUtente
     * @param $idAnnuncio
     * @param $body
     * @param $dataRisposta
     * @param $dataInviata
     * @param $richiestaInviata
     * @param $richiestaAccettata
     */
    public function __construct($id, $idUtente, $idAnnuncio, $body, $dataRisposta, $dataInviata, $richiestaInviata, $richiestaAccettata)
    {
        $this->id = $id;
        $this->idUtente = $idUtente;
        $this->idAnnuncio = $idAnnuncio;
        $this->body = $body;
        $this->dataRisposta = $dataRisposta;
        $this->dataInviata = $dataInviata;
        $this->richiestaInviata = $richiestaInviata;
        $this->richiestaAccettata = $richiestaAccettata;
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
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getDataRisposta()
    {
        return $this->dataRisposta;
    }

    /**
     * @param mixed $dataRisposta
     */
    public function setDataRisposta($dataRisposta)
    {
        $this->dataRisposta = $dataRisposta;
    }

    /**
     * @return mixed
     */
    public function getDataInviata()
    {
        return $this->dataInviata;
    }

    /**
     * @param mixed $dataInviata
     */
    public function setDataInviata($dataInviata)
    {
        $this->dataInviata = $dataInviata;
    }

    /**
     * @return mixed
     */
    public function getRichiestaInviata()
    {
        return $this->richiestaInviata;
    }

    /**
     * @param mixed $richiestaInviata
     */
    public function setRichiestaInviata($richiestaInviata)
    {
        $this->richiestaInviata = $richiestaInviata;
    }

    /**
     * @return mixed
     */
    public function getRichiestaAccettata()
    {
        return $this->richiestaAccettata;
    }

    /**
     * @param mixed $richiestaAccettata
     */
    public function setRichiestaAccettata($richiestaAccettata)
    {
        $this->richiestaAccettata = $richiestaAccettata;
    }



}