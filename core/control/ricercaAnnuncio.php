<?php

if (isset($_POST['titolo'])) {
    $titolo = $_POST['titolo'];
} else {
    $titolo = null;
}


$titolo = $_POST['titolo']; /* Declaration and initialization of title variable, given from POST */
$data = $_POST['data']; /* Declaration and initialization of data variable, given from POST */
$luogo = $_POST['luogo']; /* Declaration and initialization of location variable, given from POST */
$utente = $_POST['utente']; /* Declaration and initialization of user variable, given from POST */
$tipologia1 = $_POST['tipologia1']; /* Declaration and initialization of macro variable, given from POST */
$tipologia2 = $_POST['tipologia2']; /* Declaration and initialization of micro variable, given from POST */
$filters = array($titolo, $data, $luogo, $utente, $tipologia1, $tipologia2); /* Declaration and initialization of array filters variable, given from the union of  */

$manager = new AnnuncioManager(); /* Declaration and initialization a manager variable */
$manager->searchAnnuncio($filters);/* Manager calls the function which search relative annuncio's with array filters */


?>