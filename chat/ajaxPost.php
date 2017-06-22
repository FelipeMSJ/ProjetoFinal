<?php
include('../php/conectardb.php');
include('../php/session.php');

$text = '#'.$_POST['text'];
$message = $_POST['messages'];
$user = $_POST['user'];

$con = getDB();

$sql = "INSERT INTO chat (usuario,message,textcolor) VALUES (:sas,:asas,:asafs)";
$q = $con->prepare($sql);
$q->execute(array(':sas'=>$user,':asas'=>$message,':asafs'=>$text));

echo '<div style="color:'.$text.'">'.$user .' : '. $message.'</div>';
?>