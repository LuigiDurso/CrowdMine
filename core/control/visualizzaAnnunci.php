<?php

include_once MODEL_DIR . 'Utente.php';
include_once MODEL_DIR . 'Annuncio.php';
include_once CONTROL_DIR . 'HomeController.php';
include_once EXCEPTION_DIR . "IllegalArgumentException.php";
class visualizzaAnnunci extends Controller
{
    static $GET_ALL_ANNUNCI = "SELECT * FROM `annuncio`";
    static $GET_ANNUNCI_ID = "SELECT * FROM `annuncio` WHERE `id_utente` = '%s'";

    function getAllAnnunci()
    {
        $query = sprintf(self::$GET_ALL_ANNUNCI);
        $res = Controller::getDB()->query($query);
        $annunci = array();
        if ($res) {
            while ($obj = $res->fetch_assoc()) {
                $annuncio = new Annuncio($obj['id'], $obj['id_utente'], $obj['data'], $obj['titolo'] , $obj['descrizione'], $obj['luogo'], $obj['tipo'], $obj['retribuzione'], $obj['stato']);
                array_push($annunci, $annuncio);
            }
        }
        return $annunci;
    }

    function searchById() {
        $query = sprintf(self::$GET_ANNUNCI_ID, "1");
        $res = Controller::getDB()->query($query);
        $annunci = array();
        if ($res) {
            while ($obj = $res->fetch_assoc()) {
                $annuncio = new Annuncio($obj['id'], $obj['id_utente'], $obj['data'], $obj['titolo'] , $obj['descrizione'], $obj['luogo'], $obj['tipo'], $obj['retribuzione'], $obj['stato']);
                array_push($annunci, $annuncio);
            }
        }
        return $annunci;
    }

}
$manager = new visualizzaAnnunci();
$array = array();
$array = $manager->searchById();

$_SESSION['lista'] = $array;
header("Location:" . DOMINIO_SITO . "/visualizzaAnnuncioProprietario");

?>