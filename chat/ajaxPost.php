<?php
include('connect.php');
$text = '#'.$_POST['text'];
$message = $_POST['messages'];
$user = $_POST['user'];
$sql = "INSERT INTO messages (user,message,textcolor) VALUES (:sas,:asas,:asafs)";
$q = $db->prepare($sql);
$q->execute(array(':sas'=>$user,':asas'=>$message,':asafs'=>$text));

echo '<div style="color:'.$text.'">'.$user .' : '. $message.'</div>';