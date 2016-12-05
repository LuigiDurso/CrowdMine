<?php

include_once MODEL_DIR . "Messaggio.php";
/**
 * Created by PhpStorm.
 * User: Andrea Sarto
 * Date: 30/11/2016
 * Time: 11.24
 */
class MessaggioManager extends Manager
{

    /**
     * MessaggioManager constructor.
     */
    public function __construct()
    {

    }

    /**
     * Send an object Messaggio
     *
     * @param Double $idMittente
     * @param Double $idDestinatario
     * @param Messaggio $messaggio
     */
    public function sendMessaggio($messaggio){
        $id = $messaggio->getId();
        $corpo = $messaggio->getCorpo();
        $letto = $messaggio->getLetto();
        $data = $messaggio->getData();
        $idMittente = $messaggio->getIdUtenteMittente();
        $idDestinatario = $messaggio->getIdUtenteDestinatario();
        $INSERT_MESSAGGIO = "INSERT INTO `Messaggio` (`id`, `corpo`, `data`, `letto`, `id_utente_mittente`, `id_utente_destinatario`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s');";
        $query = sprintf($INSERT_MESSAGGIO, $id, $corpo, $letto, $data, $idMittente, $idDestinatario);
        if (!Manager::getDB()->query($query)) {
            if (Manager::getDB()->errno == 1062) {
                throw new ApplicationException(ErrorUtils::$EMAIL_ESISTE, Controller::getDB()->error, Controller::getDB()->errno);
            } else
                throw new ApplicationException(ErrorUtils::$INSERIMENTO_FALLITO, Controller::getDB()->error, Controller::getDB()->errno);
        }
        return $messaggio;
    }

    /**
     * Load the message refeer to an Utente
     *
     * @param $idUtente
     */
    public function loadMessaggi($idUtente){
        $LOAD_MESSAGGIO = "SELECT * FROM `Messaggio` WHERE `id_utente_mittente` = $idUtente;";
        $query = sprintf($LOAD_MESSAGGIO);
        $result = Manager::getDB()->query($query);
        $messaggi = array();
        if ($result) {
            while ($obj = $result->fetch_assoc()) {
                $messaggio = new Messaggio($obj['id'], $obj['id_utente_mittente	'], $obj['id_utente_destinatario'], $obj['corpo'], $obj['data'], $obj['letto']);
                $messaggi[] = $messaggio;
            }
        }
        return $messaggi;
    }

    /**
     *Load the conversation created by the twosome of Utente
     *
     * @param $idMittente
     * @param $idDestinatario
     */
    public function loadMessaggio($idMittente, $idDestinatario){
        $LOAD_MESSAGGIO = "SELECT * FROM `Messaggio` WHERE `id_utente_mittente` = $idMittente AND `id_utente_destinatario` = $idDestinatario ORDER BY 'data' ASC;";
        $query = sprintf($LOAD_MESSAGGIO);
        $result = Manager::getDB()->query($query);
        $messaggi = array();
        if ($result) {
            while ($obj = $result->fetch_assoc()) {
                $messaggio = new Messaggio($obj['id'], $obj['id_utente_mittente'], $obj['id_utente_destinatario'], $obj['corpo'], $obj['data'], $obj['letto']);
                $messaggi[] = $messaggio;
            }
        }
        return $messaggi;
    }

    /**
     *
     * @param $idMittente
     * @param $idDestinatario
     */
    public function sendRichiestaCollaborazione($idMittente, $idDestinatario){

    }

    /**
     * @param $idAnnuncio
     */
    public function agreeCollaborazione($idAnnuncio){

    }
}