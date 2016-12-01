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
    private $letto;

    /**
     * Messaggio constructor.
     * @param $id
     * @param $idUtenteMittente
     * @param $idUtenteDestinatario
     * @param $corpo
     * @param $data
     * @param $letto
     */
    public function __construct($id, $idUtenteMittente, $idUtenteDestinatario, $corpo, $data, $letto)
    {
        $this->id = $id;
        $this->idUtenteMittente = $idUtenteMittente;
        $this->idUtenteDestinatario = $idUtenteDestinatario;
        $this->corpo = $corpo;
        $this->data = $data;
        $this->letto = $letto;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getIdUtenteMittente()
    {
        return $this->idUtenteMittente;
    }

    /**
     * @return mixed
     */
    public function getIdUtenteDestinatario()
    {
        return $this->idUtenteDestinatario;
    }

    /**
     * @return mixed
     */
    public function getCorpo()
    {
        return $this->corpo;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getLetto()
    {
        return $this->letto;
    }

    /**
     * @param mixed $corpo
     */
    public function setCorpo($corpo)
    {
        $this->corpo = $corpo;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @param mixed $letto
     */
    public function setLetto($letto)
    {
        $this->letto = $letto;
    }

}