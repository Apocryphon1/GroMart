<?php
include('../PHP/config.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  $myemail = mysqli_real_escape_string($db, $_POST['email']);
  $myusername = mysqli_real_escape_string($db, $_POST['username']);
  $mypassword1 = mysqli_real_escape_string($db, $_POST['password']);
  $mypassword2 = mysqli_real_escape_string($db, $_POST['cPassword']);



  if (empty($myemail)) {
    $emailErr = "Email is required";
  }

  if (empty($myusername)) {
    $nameErr = "username is required";
  }
  if (empty($mypassword1)) {
    $passError = "Password is required";
  }


    $sql = "INSERT INTO `useraccount` (`email`, `username`, `password`) VALUES ('$myemail', '$myusername', '$mypassword1')";

    if ($db->query($sql) === TRUE) {
      header("location: loginForm.php");
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}
mysqli_close($db);
