<?php
include_once MANAGER_DIR . 'AnnuncioManager.php';
include_once CONTROL_DIR . "ControlUtils.php";
include_once EXCEPTION_DIR . "IllegalArgumentException.php";
include_once MODEL_DIR . 'Utente.php';
include_once MODEL_DIR . 'Annuncio.php';
include_once CONTROL_DIR . 'HomeController.php';

class ricercaAnnuncio extends Controller
{
    static $GET_ALL_ANNUNCI = "SELECT * FROM `annuncio`";
    static $GET_ANNUNCI_ID = "SELECT * FROM `annuncio` WHERE `id_utente` = '%s'";
    static $GET_SEARCHED_ANNUNCI = "SELECT * FROM `annuncio` WHERE `id_utente`= '%s' || `data` = '%s' || `titolo` = '%s' || `luogo` = '%s'";

    function searchAnnunci()
    {
        $filters = array();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $titolo = $_POST['titolo'];

            array_push($filters, $titolo);

            $data = $_POST['data'];

            array_push($filters, $data);

            $luogo = $_POST['luogo'];

            array_push($filters, $luogo);


            $idUtente = $_POST['utente'];

            array_push($filters, $idUtente);


            for ($i = 0; $i < count($filters); $i++) {
                echo $filters[$i];
            }
            $query = sprintf(self::$GET_SEARCHED_ANNUNCI, $filters[3], $filters[1], $filters[0], $filters[2]);
            echo $query;
            $res = Controller::getDB()->query($query);
            $annunci = array();
            if ($res) {
                while ($obj = $res->fetch_assoc()) {
                    $annuncio = new Annuncio($obj['id'], $obj['id_utente'], $obj['data'], $obj['titolo'], $obj['descrizione'], $obj['luogo'], $obj['tipo'], $obj['retribuzione'], $obj['stato']);
                    array_push($annunci, $annuncio);
                }
            }
            return $annunci;
        }
    }

}

$manager = new ricercaAnnuncio();
$array = $manager->searchAnnunci();

$_SESSION['cercati'] = $array;




?>