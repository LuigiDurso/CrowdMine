<?php

/* 
 * Modificata da Angelo Caputo
 * 26/11/16  00:40
 */

class Annuncio {
    
    private $id;
    private $titolo;
    private $data;
    private $descrizione;
    private $luogo;
    private $stato;
    private $tipologia;
    private $retribuzione;
    
    function __construct($id=null, $titolo, $data, $descrizione, $luogo, $stato, $tipologia, $retribuzione) {
        $this->id = $id;
        $this->titolo = $titolo;
        $this->data = $data;
        $this->descrizione = $descrizione;
        $this->luogo = $luogo;
        $this->stato = $stato;
        $this->tipologia = $tipologia;
        $this->retribuzione = $retribuzione;
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
    
    public function toString(){
        return '{id":".$this->getId().","data":"'.$this->getData().'","titolo":"'.$this->getTitolo().'","descrizione":"'.$this->getDescrizione().'","luogo":"'.$this->getLuogo().'","stato":"'.$this->getStato().'","retribuzione":"'.$this->getRetribuzione().'","tipologia":"'.$this->getTipologia().'"}';
    }



}