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
 * This Class provides the business logic for the Annuncio Management and methods for database access.
 */
class AnnuncioManager extends Manager{

    private static $GET_ALL_ANNUNCI = "SELECT * FROM `annuncio`";

    /**
     * AnnuncioManager constructor.
     */
    public function __construct()
    {

    }

    /**
     * create a new persistent Annuncio and its categories
     *
     * @param null $id
     * @param string $userid
     * @param string $data
     * @param String $title Title
     * @param String $location  Location
     * @param string[] $microcat An array of microcategory names
     * @param String $remuneration Indicative remuneration.
     * @param String $type Type (domanda,offerta).
     * @param String $description description
     * @return Annuncio A model instance of the created Annuncio.
     */
    public function createAnnuncio($id=null, $userid, $date, $title, $location, $microcat, $remuneration, $type, $description)
    {
        $INSERT_ANNUNCIO = "INSERT INTO `annuncio` (`id_utente`, `data`, `titolo`, `luogo`, `stato`, `retribuzione`, `tipo`, `descrizione`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');";

        $query = sprintf($INSERT_ANNUNCIO,$userid, $date, $title, $location, "revisione", $remuneration, $type, $description);
        if (!Manager::getDB()->query($query)) {
            throw new ApplicationException(ErrorUtils::$INSERIMENTO_FALLITO, Manager::getDB()->error, Manager::getDB()->errno);
        }

        $insertID =  Manager::getDB()->insert_id;

        $Annuncio = new Annuncio($insertID,$date,$title,$description,$location, "revisione",$remuneration,$type,$description);


        /* adding couples (insertId, microcatId) to RIFERITO */

        /*ignore insert, if some categories do not exist they get ignored*/
        $INSERT_RIFERITO = "INSERT IGNORE INTO `riferito`(`id_annuncio`, `id_microcategoria`) VALUES";
        $INSERT_ROW = " ('%s', '%s') ";

        $query = sprintf($INSERT_RIFERITO);

        for($i=0;i<count($microcat);$i++){
            if($i>0) $query.=",";
            $query .= sprintf($INSERT_ROW,$insertID,$microcat[$i]);
        }

        if (!Manager::getDB()->query($query)) {
            throw new ApplicationException(ErrorUtils::$INSERIMENTO_FALLITO, Manager::getDB()->error, Manager::getDB()->errno);
        }

        /*warnings handle due to IGNORE statement*/
        if (Manager::getDB()->warning_count) {
            $e = Manager::getDB()->get_warnings();
            do {
                echo "Warning: $e->errno: $e->message\n";
            } while ($e->next());
        }

        return $Annuncio;
    }

    /**
     * update an existing Annuncio with the provided ID
     *
     * @param $id
     * @param string $userid
     * @param string $data
     * @param String $title Title
     * @param String $location  Location
     * @param string[] $microcat An array of microcategory names
     * @param String $remuneration Indicative remuneration.
     * @param String $type Type (domanda,offerta).
     * @param String $description description
     * @return Annuncio A model instance of the updated Annuncio.
     */
    public function updateAnnuncio($id, $userid, $date, $title, $location, $microcat, $remuneration, $type, $description)
    {

        $UPDATE_ANNUNCIO = "UPDATE `Annuncio` SET `data` = '%s', `titolo` = '%s', `luogo` = '%s', `stato` = '%s', `retribuzione` = '%s', `tipo` = '%s', `descrizione` = '%s' WHERE `id` = '%s' AND `id_utente` = '%s' ";

        $query = sprintf($UPDATE_ANNUNCIO, $date, $title, $location, "revisione", $remuneration, $type, $description, $id, $userid);
        if (!Manager::getDB()->query($query)) {
            throw new ApplicationException(ErrorUtils::$AGGIORNAMENTO_FALLITO, Manager::getDB()->error, Manager::getDB()->errno);
        }

        $Annuncio = new Annuncio($id,$date,$title,$description,$location, "revisione",$remuneration,$type,$description);

        /*
        *   TODO: update couples (id, microcatId) to RIFERITO
         *  NOTE: Delete all and insert again, update is not coeherent
        */

        return $Annuncio;
    }

    /**
     * delete an existing Annuncio with the provided ID
     * @param $idAnnuncio
     */
    public function deleteAnnuncio($idAnnuncio){

        $DELETE_ANNUNCIO = "DELETE FROM `Annuncio` WHERE `id` = '%s' ";

        $query = sprintf($DELETE_ANNUNCIO, $idAnnuncio);
        if (!Manager::getDB()->query($query)) {
            throw new ApplicationException(ErrorUtils::$CANCELLAZIONE_FALLITA, Manager::getDB()->error, Manager::getDB()->errno);
        }
    }


    /**
     * Search an Annuncio with search filters
     *
     * @param array $filters array of filter objects
     * @return Annuncio[] A list of Annuncio elements.
     */
    public function searchAnnuncio($filters){

        $query = sprintf(self::$GET_ALL_ANNUNCI);
        FilterUtils::applyFilters($filters,$query);

        $res = Manager::getDB()->query($query);
        $annunci = array();
        if($res){
            while ($obj = $res->fetch_assoc()) {
                $annuncio = new Annuncio($obj['id'], $obj['titolo'], $obj['data'], $obj['descrizione'], $obj['luogo'], $obj['data_pubblicazione'], $obj['tipologia'], $obj['email_utente']);
                $annuncio->setId($obj['id']);
                $annunci[] = $annuncio;
            }
        }
        return $annunci;
    }

    /**
     * Get the instance of the Annuncio containing this ID.
     *
     * @param $id
     * @return Annuncio A model instance of the Annuncio.
     */
    public function getAnnuncio($id){
        return $this->searchAnnuncio(
            Array(new SearchByIdFilter($id))
        )[0];
    }

    /**
     * Search all the Annuncio elements for user id.
     *
     * @param $idUtente
     * @return Annuncio[] A list of Annuncio elements.
     */
    public function searchAnnunciUtente($idUtente){
        return $this->searchAnnuncio(
            Array(new SearchByUserIdFilter($idUtente))
        );
    }

    /**
     * Add a new candidacy into the Database.
     *
     * @param $idAnnuncio
     * @param $idUtente
     * @param String $message Candidacy proposal.
     */
    public function addCandidatura($idAnnuncio, $idUtente, $message, $data){

        $INSERT_CANDIDATURA = "INSERT INTO `Candidatura` (`id_utente`, `id_annuncio`, `corpo`, `data_risposta`, `data_inviata`, `richiesta_inviata`, `richiesta_accettata`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s');";

        $query = sprintf($INSERT_CANDIDATURA,$idUtente, $idAnnuncio, $message, null,$data, "inviata", "non_valutato");
        if (!Manager::getDB()->query($query)) {
            throw new ApplicationException(ErrorUtils::$INSERIMENTO_FALLITO, Manager::getDB()->error, Manager::getDB()->errno);
        }

        $insertID =  Manager::getDB()->insert_id;
    }

    /**
     * Add an Annuncio into the user's favorites list.
     *
     * @param $idAnnuncio
     * @param $idUtente
     */
    public function addToFavorites($idAnnuncio, $idUtente, $data){

        $INSERT_FAVORITES = "INSERT INTO `Preferito`(`id_utente`, `id_annuncio`, `data_aggiunta`) VALUES ('%s', '%s', '%s' );";

        $query = sprintf($INSERT_FAVORITES,$idUtente, $idAnnuncio, $data);
        if (!Manager::getDB()->query($query)) {
            throw new ApplicationException(ErrorUtils::$INSERIMENTO_FALLITO, Manager::getDB()->error, Manager::getDB()->errno);
        }

        $insertID =  Manager::getDB()->insert_id;
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
        return $this->searchAnnuncio(null);
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
        return $this->searchAnnuncio(null);
    }


    /**
     * Get all the candidacies for the Annuncio
     *
     * @param $idAnnuncio
     * @return Candidatura[] A list of Candidatura elements.
     */
    public function getAnnuncioWithCandidati($idAnnuncio){
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
        return $this->searchAnnuncio(null);
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
        return $this->searchAnnuncio(null);
    }
}