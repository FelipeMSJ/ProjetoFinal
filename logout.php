 <?php
<<<<<<< HEAD
include('php/conectardb.php');

=======
include('php/config.php');
>>>>>>> origin/master
$session_uid='';
$_SESSION['uid']=''; 
if(empty($session_uid) && empty($_SESSION['uid']))
{
<<<<<<< HEAD
$url='index.php';
=======
$url=BASE_URL.'index.php';
>>>>>>> origin/master
header("Location: $url");
//echo "<script>window.location='$url'</script>";
}
?>