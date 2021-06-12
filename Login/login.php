<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      


      $sqlu = "SELECT * FROM useraccount 
       WHERE username = '$myusername' and password = '$mypassword'";
     $resultu = mysqli_query($db,$sqlu);
     
    
      while($rowu = mysqli_fetch_array($resultu,MYSQLI_ASSOC)){
              
     $countu = mysqli_num_rows($resultu);

      }
 
     
  
		
      if($countu == 1) {
         if(isset($_REQUEST["loginkeeping"]) && $_REQUEST["loginkeeping"]==1)
	setcookie("loginname",$myusername,time()+60);

else{
	setcookie("login","1");
	 }
        session_start();

         $_SESSION['login_user'] = $myusername;
         
         header("location: loginSuccess.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }

   }



   


   mysqli_close($db);
?>