<?php
	include_once('../php/conectardb.php');
	$con = getDB();

	$id = $_POST['id'];

	$sql = "DELETE FROM calendario WHERE id=:id";
	$q = $con->prepare($sql);
	$q->bindParam(':id', $id, PDO::PARAM_INT);
	$q->execute();
?>