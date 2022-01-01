<?php
require="reservation.php"
if (isset($_POST['annuler'])) {

	$requete = "DELETE reservation  ";
	$reponse = $mysqli->prepare($requete);
	$reponse->execute(array($GET_reservation));
}
?>