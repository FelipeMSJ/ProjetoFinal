<?php
include_once('../php/conectardb.php');
$con = getDB();

/* Values received via ajax */
$id = $_POST['id'];
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];

 // update the records
$sql = "UPDATE calendario SET title=?, inicio=?, fim=? WHERE id=?";
$q = $con->prepare($sql);
$q->execute(array($title,$start,$end,$id));
?>