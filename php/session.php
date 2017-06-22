 <?php
<<<<<<< HEAD
if(!empty($_SESSION['uid'])){
	
	$session_uid=$_SESSION['uid'];
	include_once('class/userClass.php');
	$userClass = new userClass();
	
}

if(empty($session_uid)) {
	
$url='../projeto_dw/index.php';
header("Location: $url");
	
}
=======
if(!empty($_SESSION['uid']))
{
$session_uid=$_SESSION['uid'];
include('class/userClass.php');
$userClass = new userClass();
}

if(empty($session_uid))
{
$url=BASE_URL.'../index.php';
header("Location: $url");
}


>>>>>>> origin/master
?>