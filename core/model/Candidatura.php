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
    private $idUser;
    private $idAnnouncement;
    private $body;
    private $dateAnswer;
    private $dateSent;
    private $requestSent;
    private $requestAccepted;

    /**
     * Candidatura constructor.
     * @param $id
     * @param $idUser
     * @param $idAnnouncement
     * @param $body
     * @param $dateAnswer
     * @param $dateSent
     * @param $requestSent
     * @param $requestAccepted
     */
    public function __construct($id, $idUser, $idAnnouncement, $body, $dateAnswer, $dateSent, $requestSent, $requestAccepted)
    {
        $this->id = $id;
        $this->idUser = $idUser;
        $this->idAnnouncement = $idAnnouncement;
        $this->body = $body;
        $this->dateAnswer = $dateAnswer;
        $this->dateSent = $dateSent;
        $this->requestSent = $requestSent;
        $this->requestAccepted = $requestAccepted;
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
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return mixed
     */
    public function getIdAnnouncement()
    {
        return $this->idAnnouncement;
    }

    /**
     * @param mixed $idAnnouncement
     */
    public function setIdAnnouncement($idAnnouncement)
    {
        $this->idAnnouncement = $idAnnouncement;
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
    public function getDateAnswer()
    {
        return $this->dateAnswer;
    }

    /**
     * @param mixed $dateAnswer
     */
    public function setDateAnswer($dateAnswer)
    {
        $this->dateAnswer = $dateAnswer;
    }

    /**
     * @return mixed
     */
    public function getDateSent()
    {
        return $this->dateSent;
    }

    /**
     * @param mixed $dateSent
     */
    public function setDateSent($dateSent)
    {
        $this->dateSent = $dateSent;
    }

    /**
     * @return mixed
     */
    public function getRequestSent()
    {
        return $this->requestSent;
    }

    /**
     * @param mixed $requestSent
     */
    public function setRequestSent($requestSent)
    {
        $this->requestSent = $requestSent;
    }

    /**
     * @return mixed
     */
    public function getRequestAccepted()
    {
        return $this->requestAccepted;
    }

    /**
     * @param mixed $requestAccepted
     */
    public function setRequestAccepted($requestAccepted)
    {
        $this->requestAccepted = $requestAccepted;
    }



}