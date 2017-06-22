<?php
	include_once('../php/conectardb.php');
	$con = getDB();
	// Values received via ajax
	echo print_r($_POST, true);
	$title = $_POST['title'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$url = $_POST['url'];

	// insert the records
	$sql = "INSERT INTO calendario (title, start, end, url) VALUES (:title, :start, :end, :url)";
	$q = $con->prepare($sql);
	$q->bindValue(':title', $title , PDO::PARAM_STR);
	$q->bindValue(':start', $start, PDO::PARAM_STR);
	$q->bindValue(':end', $end, PDO::PARAM_STR);
	$q->bindValue(':url', $url, PDO::PARAM_STR);
	$q->execute();
?>