<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
      
      $myid = mysqli_real_escape_string($db,$_POST['x1']);
      $myname = mysqli_real_escape_string($db,$_POST['x2']); 
      $mydesc = mysqli_real_escape_string($db,$_POST['x3']);
      $myprice = mysqli_real_escape_string($db,$_POST['x4']); 


     $sql = "INSERT INTO product (ProductID,ProductName,Description,Price)
     VALUES ('$myid' , '$myname','$mydesc','$myprice')";

if ($sql){

echo "product added successfully";

}



   }


 
   


   mysqli_close($db);
?>