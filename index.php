<?php 
<<<<<<< HEAD
include_once("php/conectardb.php");
include_once('php/class/userClass.php');

=======
include("php/config.php");
include('php/class/userClass.php');
>>>>>>> origin/master
$userClass = new userClass();

$errorMsgReg='';
$errorMsgLogin='';
<<<<<<< HEAD

if (!empty($_POST['loginSubmit'])) {
=======
if (!empty($_POST['loginSubmit'])) 
{
>>>>>>> origin/master
$email=$_POST['email'];
$password=$_POST['password'];
 if(strlen(trim($email))>1 && strlen(trim($password))>1 )
   {
    $uid=$userClass->userLogin($email,$password);
    if($uid)
    {
<<<<<<< HEAD
        $url='pp.php';
=======
        $url=BASE_URL.'pp.php';
>>>>>>> origin/master
        header("Location: $url");
    }
    else
    {
        $errorMsgLogin="Please check login details.";
    }
   }
}

<<<<<<< HEAD
if (!empty($_POST['signupSubmit'])) {
=======
if (!empty($_POST['signupSubmit'])) 
{
>>>>>>> origin/master

	$username=$_POST['usernameReg'];
	$email=$_POST['emailReg'];
	$password=$_POST['passwordReg'];
	$username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
	$email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
	$password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

<<<<<<< HEAD
	if($username_check && $email_check && $password_check > 0) {
    $uid=$userClass->userRegistration($username,$password,$email);
		if($uid){
			$url='pp.php';
			header("Location: $url");
		}
		else{
		  $errorMsgReg="Username or Email already exits.";
		}
    }

}
=======
	if($username_check && $email_check && $password_check > 0) 
	{
    $uid=$userClass->userRegistration($username,$password,$email,$name);
    if($uid)
    {
    	$url=BASE_URL.'pp.php';
    	header("Location: $url");
    }
    else
    {
      $errorMsgReg="Username or Email already exits.";
    }
    
	}


}

>>>>>>> origin/master
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
<<<<<<< HEAD
  <title>Cadastro/Login</title>
=======
  <title>Sign-Up/Login Form</title>
>>>>>>> origin/master
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
<<<<<<< HEAD
      <link rel="stylesheet" href="css/style_login.css">
=======
      <link rel="stylesheet" href="css/style2.css">
>>>>>>> origin/master

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Cadastrar</a></li>
        <li class="tab"><a href="#login">Conectar</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Cadastro</h1>
          
          <form action="" method="post" name="signup">
          
          
          <div class="field-wrap">
              <label>
                Usuário<span class="req">*</span>
              </label>
              <input type="text" name="usernameReg" required autocomplete="off" />
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name="emailReg" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password" name="passwordReg" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block" name="signupSubmit" value="Signup"/>Cadastrar</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Conectar</h1>
          
          <form action="" method="post" name="login">
          
            <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <button class="button button-block" name="loginSubmit" value="Login"/>Entrar</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<<<<<<< HEAD
    <script src="js/index_login.js"></script>
=======
    <script src="js/index2.js"></script>
>>>>>>> origin/master

</body>
</html>
