<?php
include '../../PHP/config.php';

$id = $name = $price = $desc = $manufacturer = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = test_input($_POST["id"]);
  $name = test_input($_POST["name"]);
  $price = test_input($_POST["price"]);
  $desc = test_input($_POST["desc"]);
  $manufacturer = test_input($_POST["manufacturer"]);
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if ($_POST["delete"]) {
  $sql = "DELETE FROM `productlist` WHERE `pID` = $id";

  if ($db->query($sql) === TRUE) {
      echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . $db->error;
  }
};

if ($_POST["insert"]) {
  $sql = "INSERT INTO `productlist` (`pID`, `pName`, `pPrice`, `pDesc`, `pManufacturer`)
VALUES ('$id', '$name', '$price', '$desc', '$manufacturer')";

  if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }
};





mysqli_close($db);
header("Location: Content.php");
exit();
