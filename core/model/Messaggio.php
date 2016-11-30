<?php

/**
 * Created by PhpStorm.
 * User: giorgio
 * Date: 27/11/16
 * Time: 14:26
 */
class Messaggio
{

    private $id;
    private $idUtenteMittente;
    private $idUtenteDestinatario;
    private $corpo;
    private $data;

    /**
     * Messaggio constructor.
     * @param $id
     * @param $idUtenteMittente
     * @param $idUtenteDestinatario
     * @param $corpo
     * @param $data
     */
    public function __construct($id, $idUtenteMittente, $idUtenteDestinatario, $corpo, $data)
    {
        $this->id = $id;
        $this->idUtenteMittente = $idUtenteMittente;
        $this->idUtenteDestinatario = $idUtenteDestinatario;
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
    public function getIdUtenteMittente()
    {
        return $this->idUtenteMittente;
    }

    /**
     * @param mixed $idUtenteMittente
     */
    public function setIdUtenteMittente($idUtenteMittente)
    {
        $this->idUtenteMittente = $idUtenteMittente;
    }

    /**
     * @return mixed
     */
    public function getIdUtenteDestinatario()
    {
        return $this->idUtenteDestinatario;
    }

    /**
     * @param mixed $idUtenteDestinatario
     */
    public function setIdUtenteDestinatario($idUtenteDestinatario)
    {
        $this->idUtenteDestinatario = $idUtenteDestinatario;
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