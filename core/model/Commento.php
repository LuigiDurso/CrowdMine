<?php

/**
 * Created by PhpStorm.
 * User: Angelo
 * Date: 27/11/2016
 * Time: 20:15
 */
class Commento
{

    private $id;
    private $id_annuncio;
    private $id_utente;
    private $corpo;
    private $data;

    /**
     * Commento constructor.
     * @param $id
     * @param $id_annuncio
     * @param $id_utente
     * @param $corpo
     * @param $data
     */
    public function __construct($id, $id_annuncio, $id_utente, $corpo, $data)
    {
        $this->id = $id;
        $this->id_annuncio = $id_annuncio;
        $this->id_utente = $id_utente;
        $this->corpo = $corpo;
        $this->data = $data;
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
    public function getIdAnnuncio()
    {
        return $this->id_annuncio;
    }

    /**
     * @param mixed $id_annuncio
     */
    public function setIdAnnuncio($id_annuncio)
    {
        $this->id_annuncio = $id_annuncio;
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
    public function getCorpo()
    {
        return $this->corpo;
    }

    /**
     * @param mixed $corpo
     */
    public function setCorpo($corpo)
    {
        $this->corpo = $corpo;
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




}