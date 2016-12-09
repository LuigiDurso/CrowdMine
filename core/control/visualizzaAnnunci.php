<?php

include_once MODEL_DIR . 'Utente.php';
include_once MODEL_DIR . 'Annuncio.php';

$id = 1;
$nome = "Salvatore";
$cognome = "Marone";
$telefono = "3272319143";
$dataNascita = "22-12-1994";
$citta = "Striano";
$email = "s.marone@gmail.com";
$password = "pelo";
$stato = "attivo";
$ruolo = "utente";
$immagineProfilo = "img\logojet.jpg";

$user = new Utente($id, $nome, $cognome, $telefono, $dataNascita, $citta, $email, $password, $stato, $ruolo, $immagineProfilo);

$id = 1;
$id2 = 2;
$idUtente = 1;
$data = "22-12-2016";
$titolo = "Offerta Programmatore Java";
$descrizione = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sagittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. Nullam a dolor arcu, ac tempor elit.   Donec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc eget laoreet sagittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis convallis. Integer varius egestas vestibulum. Nullam a dolor arcu, ac tempor elit. Donec.";
$luogo = "Striano";
$stato = "attivo";
$retribuzione = "2000";
$tipologia = "offerta";

$annuncio = new Annuncio($id, $idUtente, $data, $titolo, $descrizione, $luogo, $stato, $retribuzione, $tipologia);
$annuncio2 = new Annuncio($id2, $idUtente, $data, $titolo, $descrizione, $luogo, $stato, $retribuzione, $tipologia);

$annunci = array($annuncio, $annuncio2);


$_SESSION['user'] = $user;
$_SESSION['array'] = $annunci;

header("location: VIEW_DIR . 'annuncioProprietario.php'");


?>


