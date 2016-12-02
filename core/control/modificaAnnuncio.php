<?php
/**
 * Created by PhpStorm.
 * User: Angelo
 * Date: 01/12/2016
 * Time: 21:47
 */

include_once MANAGER_DIR . 'AnnuncioManager.php';

$idUtente = $_POST['idUtente'];
$data = $_POST['data'];
$titolo = $_POST['titolo'];
$descrizione = $_POST['descrizione'];
$luogo = $_POST["luogo"];
$stato = $_POST['stato'];
$retribuzione = $_POST['retribuzione'];
$tipologia = $_POST['tipologia'];
$listaMicrocategorie = $_POST['microcategorie'];

//$managerAnnuncio = new AnnuncioManager();
//$managerAnnuncio->updateAnnuncio($idUtente, $data, $titolo, $descrizione, $luogo, $stato, $retribuzione, $tipologia, $listaMicrocategorie);

header("Location:" . DOMINIO_SITO . "/");
?>