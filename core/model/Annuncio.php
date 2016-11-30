<?php

/* 
 * Modificata da Angelo Caputo
 * 26/11/16  00:40
 */

class Annuncio {
    
    private $id;
    private $idUtente;
    private $data;
    private $titolo;
    private $descrizione;
    private $luogo;
    private $stato;
    private $retribuzione;
    private $tipologia;
    private $listaCommenti;

    /**
     * Annuncio constructor.
     * @param $id
     * @param $idUtente
     * @param $data
     * @param $titolo
     * @param $descrizione
     * @param $luogo
     * @param $stato
     * @param $retribuzione
     * @param $tipologia
     * @param $listaCommenti
     */
    public function __construct($id, $idUtente, $data, $titolo, $descrizione, $luogo, $stato, $retribuzione, $tipologia, $listaCommenti)
    {
        $this->id = $id;
        $this->idUtente = $idUtente;
        $this->data = $data;
        $this->titolo = $titolo;
        $this->descrizione = $descrizione;
        $this->luogo = $luogo;
        $this->stato = $stato;
        $this->retribuzione = $retribuzione;
        $this->tipologia = $tipologia;
        $this->listaCommenti = $listaCommenti;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * @param mixed $titolo
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * @param mixed $descrizione
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;
    }

    /**
     * @return mixed
     */
    public function getLuogo()
    {
        return $this->luogo;
    }

    /**
     * @param mixed $luogo
     */
    public function setLuogo($luogo)
    {
        $this->luogo = $luogo;
    }

    /**
     * @return mixed
     */
    public function getStato()
    {
        return $this->stato;
    }

    /**
     * @param mixed $stato
     */
    public function setStato($stato)
    {
        $this->stato = $stato;
    }

    /**
     * @return mixed
     */
    public function getTipologia()
    {
        return $this->tipologia;
    }

    /**
     * @param mixed $tipologia
     */
    public function setTipologia($tipologia)
    {
        $this->tipologia = $tipologia;
    }

    /**
     * @return mixed
     */
    public function getRetribuzione()
    {
        return $this->retribuzione;
    }

    /**
     * @param mixed $retribuzione
     */
    public function setRetribuzione($retribuzione)
    {
        $this->retribuzione = $retribuzione;
    }

    /**
     * @return mixed
     */
    public function getListaCommenti()
    {
        return $this->listaCommenti;
    }

    /**
     * @param mixed $listaCommenti
     */
    public function setListaCommenti($listaCommenti)
    {
        $this->listaCommenti = $listaCommenti;
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

}