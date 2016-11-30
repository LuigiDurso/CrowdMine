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
    private $idAnnuncio;
    private $idUtente;
    private $corpo;
    private $data;

    /**
     * Commento constructor.
     * @param $id
     * @param $idAnnuncio
     * @param $idUtente
     * @param $corpo
     * @param $data
     */
    public function __construct($id, $idAnnuncio, $idUtente, $corpo, $data)
    {
        $this->id = $id;
        $this->idAnnuncio = $idAnnuncio;
        $this->idUtente = $idUtente;
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