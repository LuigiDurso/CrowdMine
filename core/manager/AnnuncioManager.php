<?php

/**
 * Created by PhpStorm.
 * User: Fabricio Nicolas Madaio
 * Date: 28/11/2016
 * Time: 18:36
 */

include_once MODEL_DIR . 'Annuncio.php';

/**
 * Class AnnuncioManager
 * This Class Provides
 */
class AnnuncioManager
{

    /**
     * create a new persistent Annuncio and its categories
     *
     * @param null $id
     * @param string[] $macrocat An array of macrocategory names
     * @param string[] $microcat An array of microcategory names
     * @param String $title Title
     * @param String $description description
     * @param String $location  Location
     * @param String $type Type (domanda,offerta).
     * @param String $remuneration Indicative remuneration.
     * @return Annuncio A model instance of the created Annuncio.
     */
    public function createAnnuncio($id=null, $title, $description,$macrocat,$microcat, $location, $type, $remuneration){

        return new Annuncio($id,new DateTime(), $title, $description, $location, $type, $remuneration, null);
    }

    /**
     * update an existing Annuncio with the provided ID
     *
     * @param null $id
     * @param string[] $macrocat An array of macrocategory names
     * @param string[] $microcat An array of microcategory names
     * @param String $title Title
     * @param String $description description
     * @param String $location  Location
     * @param String $type Type (domanda,offerta).
     * @param String $remuneration Indicative remuneration.
     * @return Annuncio A model instance of the updated Annuncio.
     */
    public function updateAnnuncio($id=null, $title, $description,$macrocat,$microcat, $location, $type, $remuneration){
        return new Annuncio($id, null, $title, $description, $location, $type, $remuneration, null);
    }

    /**
     * delete an existing Annuncio with the provided ID
     * @param $idAnnuncio
     */
    public function deleteAnnuncio($idAnnuncio){

    }

    /**
     * Search an Annuncio with at least one of this fields
     *
     * @param $idUtente
     * @param String $title Title
     * @param String $description description
     * @param String $macrocat
     * @param String $microcat
     * @param String $location Location
     * @param String $type Type (domanda,offerta).
     * @return Annuncio A model instance of the Annuncio.
     */
    public function searchAnnuncio($idUtente, $title, $description, $macrocat, $microcat, $location, $type){
        return new Annuncio(null, null, null, null, null, null, null, null);
    }

    /**
     * Get the instance of the Annuncio containing this ID.
     *
     * @param $id
     * @return Annuncio A model instance of the Annuncio.
     */
    public function getAnnuncio($id){
        return new Annuncio(null, null, null, null, null, null, null, null);
    }

    /**
     * Search all the Annuncio elements for user id.
     *
     * @param $idUtente
     * @return Annuncio[] A list of Annuncio elements.
     */
    public function searchAnnunciUtente($idUtente){
        return [];
    }

    /**
     * Add a new candidacy into the Database.
     *
     * @param $idAnnuncio
     * @param $idUtente
     * @param String $message Candidacy proposal.
     */
    public function addCandidatura($idAnnuncio, $idUtente, $message){

    }

    /**
     * Add an Annuncio into the user's favorites list.
     *
     * @param $idAnnuncio
     * @param $idUtente
     */
    public function addToFavorites($idAnnuncio, $idUtente){

    }

    /**
     * Remove an Annuncio from the user's favorites list.
     *
     * @param $idAnnuncio
     * @param $idUtente
     */
    public function removeFromFavorites($idAnnuncio, $idUtente){

    }

    /**
     * Sets the Annuncio as Active if it was previously in Review, then updates the persistence system.
     * NOTE: this method can be called only by moderators
     *
     * @param $idAnnuncio
     */
    public function validateAnnuncio($idAnnuncio){

    }

    /**
     * Sets the Annuncio as Active if it was previously Reported, then updates the persistence system.
     *
     * @param $idAnnuncio
     */
    public function confirmValidationAnnuncio($idAnnuncio){

    }

    /**
     * Get the HomePage's list of announcements
     *
     * @return Annuncio[] A list of Annuncio elements.
     */
    public function getAnnunciHomePage(){
        return [];
    }

    /**
     * Sets the Annuncio as Reported on the Database
     *
     * @param $idAnnuncio
     */
    public function reportAnnuncio($idAnnuncio){

    }

    /**
     * Get the list of annuncements with the Reported status
     *
     * @return Annuncio[] A list of Annuncio elements.
     */
    public function getReportedAnnunci(){
        return [];
    }


    /**
     * Get all the candidacies for the Annuncio
     *
     * @param $idAnnuncio
     * @return Candidatura[] A list of Candidatura elements.
     */
    public function getAnnuncioConCandidati($idAnnuncio){
        return [];
    }

    /**
     * Add a comment for the Annuncio
     *
     * @param $idAnnuncio
     * @param $comment
     */
    public function commentAnnuncio($idAnnuncio, $comment){

    }

    /**
     * Send a new Claim for the Annuncio, updates the database
     *
     * @param $idAnnuncio
     * @param $message
     */
    public function sendClaim($idAnnuncio, $message){

    }

    /**
     *Set the Annuncio as Suspended, updates the database
     *
     * @param $idAnnuncio
     * @param string $message
     */
    public function sendSuspension($idAnnuncio, $message=""){

    }

    /**
     * Sets the Annuncio as Active if it was previously Reported, then updates the persistence system.
     * NOTE: this method can be called only by admins
     *
     * @param $idAnnuncio
     */
    public function sendConfirmation($idAnnuncio){

    }

    /**
     * Get the list of claimed announcements
     *
     * @return Annuncio[] A list of Annuncio elements.
     */
    public function getClaimedAnnunciList(){
        return [];
    }

    /**
     * Get the number of announcements that match the specified criteria.
     *
     * @param DateTime $initDate Starting date of the interval.
     * @param DateTime $endDate Ending date of the interval.
     * @param String $macro macrocategory name.
     * @param String $micro microcategory name.
     * @return int
     */
    public function getAnnunciCount($initDate=null, $endDate=null, $macro="", $micro=""){
        return 0;
    }

    /**
     * Get the ranking of best announcements
     *
     * @param String $macro macrocategory of interest
     * @param String $micro microcategory of interest
     * @return Annuncio[] A list of Annuncio elements.
     */
    public function getAnnunciRanking($macro=null, $micro=null){
        return [];
    }
}