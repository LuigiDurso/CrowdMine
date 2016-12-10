<?php
/**
 * Created by PhpStorm.
 * User: Angelo
 * Date: 01/12/2016
 * Time: 21:47
 */

echo $idAnnuncio = $_GET['id'];
$annunci = $_SESSION['annunci'];
unset($annunci[$idAnnuncio]);
echo "ok";
die("<script>location.href = 'annuncioProprietario.php'</script>");

?>