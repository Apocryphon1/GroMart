<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    
      
      $myemail = mysqli_real_escape_string($db,$_POST['u1']);
      $myusername = mysqli_real_escape_string($db,$_POST['u2']);
      $mypassword1 = mysqli_real_escape_string($db,$_POST['p1']);
      $mypassword2 = mysqli_real_escape_string($db,$_POST['p2']);  
  
      $sql2 = "INSERT INTO useraccount (Email,username,password)
      VALUES ( '$myemail', '$myusername', '$mypassword1' )  ";

      if ($sql2){
echo "Account was created successfully" ;

      }
    else {echo "ERROR" ;
    }
     
    

    
  
      
      
      
   
		
     
   }
   mysqli_close($db);
?>