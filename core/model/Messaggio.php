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
    private $date;
    private $body;
    private $idUserSender;
    private $idUserRecipient;

    /**
     * Messaggio constructor.
     * @param $id
     * @param $date
     * @param $body
     * @param $idUserSender
     * @param $idUserRecipient
     */
    public function __construct($id, $date, $body, $idUserSender, $idUserRecipient)
    {
        $this->id = $id;
        $this->date = $date;
        $this->body = $body;
        $this->idUserSender = $idUserSender;
        $this->idUserRecipient = $idUserRecipient;
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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
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
    public function getIdUserSender()
    {
        return $this->idUserSender;
    }

    /**
     * @param mixed $idUserSender
     */
    public function setIdUserSender($idUserSender)
    {
        $this->idUserSender = $idUserSender;
    }

    /**
     * @return mixed
     */
    public function getIdUserRecipient()
    {
        return $this->idUserRecipient;
    }

    /**
     * @param mixed $idUserRecipient
     */
    public function setIdUserRecipient($idUserRecipient)
    {
        $this->idUserRecipient = $idUserRecipient;
    }



}