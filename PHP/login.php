<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 


      if (empty($_POST["username"])) {
         $nameErr = "Name is required";
       } 
     
       if (empty($_POST["password"])) {
         $emailErr = "password is required";
       } 
     
   

      $sqlu = "SELECT * FROM useraccount 
       WHERE username = '$myusername' and password = '$mypassword'";
     $resultu = mysqli_query($db,$sqlu);
     
    
      while($rowu = mysqli_fetch_array($resultu,MYSQLI_ASSOC)){
              
     $countu = mysqli_num_rows($resultu);

      }
 
     
  
		
      if($countu == 1) {
         if(isset($_REQUEST["loginkeeping"]) && $_REQUEST["loginkeeping"]==1){
	setcookie("login",$myusername,time()+60);
         }
else {

   setcookie("login",$myusername,time()-1);
}
     

         $_SESSION['login_user'] = $myusername;
         

         if ($myusername === "adhamahmed"){
            header("location: AdminAccount.php");

         }
else{
         header("location: MyAccount.php");}
      }else {
         $error = "Your Login Name or Password is invalid";
      }

   }


 
   



?>