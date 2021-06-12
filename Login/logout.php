<?php
   session_start();
   
   if(session_destroy()) {
      setcookie("login","",time()-1);

      header("Location: MyAccount.html");
   }
?>