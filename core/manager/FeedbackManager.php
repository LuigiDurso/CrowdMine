<?php

/**
 * Created by PhpStorm.
 * User: LongSky
 * Date: 28/11/2016
 * Time: 11:43
 */

include_once MODEL_DIR . 'Feedback.php';
include_once MODEL_DIR . 'MicroCategoria.php';
include_once MODEL_DIR . 'FeedbackListObject.php';

/**
 * Class FeedbackManager
 * This Class provides the business logic for the Feedback Management and methods for database access.
 */
class FeedbackManager extends Manager
{
    /**
     * FeedbackManager constructor.
     */
    public function __construct()
    {
    }

    /**
     * Create a new persistent Feedback
     *
     * @param $id
     * @param $idAnnuncio
     * @param $idUtente
     * @param $idValutato
     * @param $corpo
     * @param $data
     * @param $valutazione
     * @return Feedback
     */
    public function createFeedback($id=null, $idAnnuncio, $idUtente, $idValutato, $corpo, $data, $valutazione){
        return new Feedback($id, $idAnnuncio, $idUtente, $idValutato, $corpo, $data, $valutazione);
    }

    /**
     * return a collection of Feedback about an User
     * @param $idUtente
     */
    public function getListaFeedback($idUtente){
        $GET_FEEDBACK_BY_USER = "SELECT feedback.id,feedback.titolo,feedback.corpo,
            feedback.valutazione,utente.nome,utente.cognome,utente.immagine_profilo 
            FROM feedback, utente WHERE feedback.id_valutato=$idUtente AND utente.id=$idUtente";
        $resSet = self::getDB()->query($GET_FEEDBACK_BY_USER);
        $us = array();
        if ($resSet) {
            while ($obj = $resSet->fetch_assoc()) {
                $u = new FeedbackListObject($obj['id'],$obj['titolo'],$obj['corpo'],$obj['nome'],$obj['cognome'],$obj['immagine_profilo'],$obj['valutazione']);
                $us[] = $u;
            }
        }
        return $us;
    }


    /**
     * return a collection of Feedback about an User and a microCategory
     * @param $idUtente
     * @param $microCategoria
     */
    public function getListaFeedbackByMicrocategoria($idUtente, $microCategoria){
        $mc = $microCategoria->getId();
        $GET_FEEDBACK_BY_USER_MICRO = "SELECT feedback.* FROM feedback 
        WHERE feedback.id_valutato=$idUtente AND feedback.id_annuncio IN  
        (SELECT annuncio.id 
          FROM annuncio,riferito 
          WHERE annuncio.id_utente = $idUtente AND riferito.id_microcategoria = $mc AND annuncio.id = riferito.id_annuncio)";
        return $this->feedbackToArray(self::getDB()->query($GET_FEEDBACK_BY_USER_MICRO));
    }



    /**
     * return the passed list of Feedback sorted on the basis of a parameters
     * @param $list
     * @param $param
     */
    public function sortListaFeedback($list, $param){
            // ATTENDENDO SVILUPPI CLASSE FEEDBACK
    }

    /**
     * return a collection of Feedback with status attribute setted to "segnalato"
     */
    public function getFeedbackSegnalati(){
        $stato = StatoFeedback::SEGNALATO;
        $GET_REPORTED_FEEDBACK = "SELECT feedback.* FROM feedback WHERE feedback.stato = $stato ";
        return $this->feedbackToArray(self::getDB()->query($GET_REPORTED_FEEDBACK));
    }

    /**
     * Delete permanently a Feedback identified by the passed id from the database
     * @param $idFeedback
     */
    public function removeFeedback($idFeedback){
        $stato = StatoFeedback::ELIMINATO;
        $SET_DELETE_FEEDBACK_STATUS = "UPDATE feedback SET feedback.stato = $stato WHERE feedback.id = $idFeedback ";
        self::getDB()->query($SET_DELETE_FEEDBACK_STATUS);
    }

    private function feedbackToArray($resSet){
        $feedback = array();
        if ($resSet) {
            while ($obj = $resSet->fetch_assoc()) {
                $data = new Date($obj['data']);
                $f = new MacroCategoria($obj['id'], $obj['id_utente'], $obj['id_annuncio'], $obj['valutazione'], $obj['corpo'], $data, $obj['stato']);
                $feedback[] = $f;
            }
        }
        return $feedback;
    }
}