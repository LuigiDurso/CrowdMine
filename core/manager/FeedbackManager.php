<?php

/**
 * Created by PhpStorm.
 * User: Ferdinando D'Avino
 * Date: 28/11/2016
 * Time: 11:43
 */

include_once MODEL_DIR . 'Feedback.php';

/**
 * Class FeedbackManager
 * This Class provides the business logic for the Feedback Management and methods for database access.
 */
class FeedbackManager
{

    /**
     * FeedbackManager constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param $idUtente
     * @param string $microCategoria
     */
    public function getListaFeedback($idUtente, $microCategoria=""){

    }

    public function findUserBy($microCategoria, $macroCategoria, $numStelle){

    }
    public function sortListaFeedback($list, $param){

    }

    public function insertFeedback($descrizione, $rating){

    }

    public function setStatus($idFeedback, $status){

    }

    public function getFeedbackSegnalati(){

    }

    public function removeFeedback($idFeedback){

    }



}