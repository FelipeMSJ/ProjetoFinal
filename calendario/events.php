<?php
include_once('../php/conectardb.php');
$con = getDB();

// List of events
 $json = array();

 // Query that retrieves events
 $requete = "SELECT * FROM calendario ORDER BY id";
 // Execute the query
 $resultat = $con->query($requete) or die(print_r($con->errorInfo()));

 // sending the encoded result to success page
 echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));

?>