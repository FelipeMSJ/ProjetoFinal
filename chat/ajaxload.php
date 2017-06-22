<?php
include('../php/conectardb.php');
include('../php/session.php');

$con = getDB();

$id=$_GET['id'];

$result = $con->prepare("SELECT * FROM chat ORDER BY id ASC");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
	echo '<div style="color:'.$row['textcolor'].'">' .$row['usuario'] . ' : '. $row['message'] .'</div>';
}
?>