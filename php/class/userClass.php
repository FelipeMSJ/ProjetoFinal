<?php
class userClass{
	 /* User Login */
     public function userLogin($email,$password){

          $con = getDB();
          $hash_password= hash('sha256', $password);
          $stmt = $con->prepare("SELECT uid FROM users WHERE  email=:email AND  password=:hash_password");  
          $stmt->bindParam("email", $email,PDO::PARAM_STR) ;
          $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
          $stmt->execute();
          $count=$stmt->rowCount();
          $data=$stmt->fetch(PDO::FETCH_OBJ);
          $con = null;
          if($count)
          {
                $_SESSION['uid']=$data->uid;
                return true;
          }
          else
          {
               return false;
          }    
     }

     /* User Registration */
     public function userRegistration($username,$password,$email){
          try{
			  $con = getDB();
			  $st = $con->prepare("SELECT uid FROM users WHERE username=:username OR email=:email");  
			  $st->bindParam("username", $username,PDO::PARAM_STR);
			  $st->bindParam("email", $email,PDO::PARAM_STR);
			  $st->execute();
			  $count=$st->rowCount();
			  if($count<1) {
				  $stmt = $con->prepare("INSERT INTO users(username,password,email) VALUES (:username,:hash_password,:email)");  
				  $stmt->bindParam("username", $username,PDO::PARAM_STR) ;
				  $hash_password= hash('sha256', $password);
				  $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
				  $stmt->bindParam("email", $email,PDO::PARAM_STR) ;
				  $stmt->execute();
				  $uid=$con->lastInsertId();
				  $con = null;
				  $_SESSION['uid']=$uid;
				  return true;
			  }
			  else{
				  $con = null;
				  return false;
			  }
          } 
          catch(PDOException $e) {
          	echo '{"error":{"text":'. $e->getMessage() .'}}'; 
          }
     }
     
     /* User Details */
     public function userDetails($uid){
        try{
          $con = getDB();
          $stmt = $con->prepare("SELECT email,username FROM users WHERE uid=:uid");  
          $stmt->bindParam("uid", $uid,PDO::PARAM_INT);
          $stmt->execute();
          $data = $stmt->fetch(PDO::FETCH_OBJ);
          return $data;
         }
         catch(PDOException $e) {
          echo '{"error":{"text":'. $e->getMessage() .'}}'; 
          }

     }


}
?>