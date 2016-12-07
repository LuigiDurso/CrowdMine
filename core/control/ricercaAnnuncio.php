<?php

//include MANAGER_DIR . 'AnnuncioManager.php';

if (isset($_POST['titolo'])) {
    $titolo = $_POST['titolo'];
} else {
    $titolo = null;
}

if (isset($_POST['data'])) {
    $data = $_POST['data'];
} else {
    $data = null;
}

if (isset($_POST['luogo'])) {
    $luogo = $_POST['luogo'];
} else {
    $luogo = null;
}

if (isset($_POST['utente'])) {
    $utente = $_POST['utente'];
} else {
    $utente = null;
}

if (isset($_POST['tipologia1'])) {
    $tipologia1 = $_POST['tipologia1'];
} else {
    $tipologia1 = null;
}

if (isset($_POST['tipologia2'])) {
    $tipologia2 = $_POST['titolo'];
} else {
    $tipologia2 = null;
}

$filters = array($titolo, $data, $luogo, $utente, $tipologia1, $tipologia2); /* Declaration and initialization of array filters variable, given from the union of  */

for ($i = 0; $i < 5; $i++) {
    echo $filters[$i];
}

$manager = new AnnuncioManager(); /* Declaration and initialization a manager variable */
$manager->searchAnnuncio($filters);/* Manager calls the function which search relative annuncio's with array filters */


?>