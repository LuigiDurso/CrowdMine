<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Feedback {
    
    private $id;
    private $userID;
    private $announcementID;
    private $evalutation;
    private $body;
    private $date;

    /**
     * Feedback constructor.
     * @param $id
     * @param $userID
     * @param $announcementID
     * @param $evalutation
     * @param $body
     * @param $date
     */
    public function __construct($id, $userID, $announcementID, $evalutation, $body, $date)
    {
        $this->id = $id;
        $this->userID = $userID;
        $this->announcementID = $announcementID;
        $this->evalutation = $evalutation;
        $this->body = $body;
        $this->date = $date;
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
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @return mixed
     */
    public function getAnnouncementID()
    {
        return $this->announcementID;
    }

    /**
     * @return mixed
     */
    public function getEvalutation()
    {
        return $this->evalutation;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $evalutation
     */
    public function setEvalutation($evalutation)
    {
        $this->evalutation = $evalutation;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    public function toString(){
        return '{id:'.$this->getId().', userID:'.$this->getUserID().', announcementID:'.$this->getAnnouncementID().'
        , evalutation: '.$this->getEvalutation().', body:'.$this->getBody().', date:'.$this->getDate().'}';
    }


}
