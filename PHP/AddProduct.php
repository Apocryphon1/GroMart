<?php
   include("config.php");

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
      
      $myid = mysqli_real_escape_string($db,$_POST['x1']);
      $myname = mysqli_real_escape_string($db,$_POST['x2']); 
      $mydesc = mysqli_real_escape_string($db,$_POST['x3']);
      $myprice = mysqli_real_escape_string($db,$_POST['x4']); 


     $sql = "INSERT INTO product (ProductID,ProductName,Description,Price)
     VALUES ('$myid' , '$myname','$mydesc','$myprice')";

if ( $result = $db->query($sql)){




setcookie("pid",$myid,time()+60);
setcookie("pname",$myname,time()+60);
setcookie("pdes",$mydesc,time()+60);
setcookie("pprice",$myprice,time()+60);



   $sql2 = "select * from product";

   $result = $db->query($sql2);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["pID"]. " - Name: " . $row["pName"]. " - Description: " . $row["pDesc"]. " - Name: " . $row["pPrice"]. "<br>";
  }
} else {
  echo "0 results";
}
   }

   }
 
   

    
   mysqli_close($db);
?>


