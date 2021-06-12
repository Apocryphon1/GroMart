<?php
include '../PHP/config.php';

$id = $username = $password = $email = $role = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = test_input($_POST["id"]);
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $email = test_input($_POST["email"]);
    $role = test_input($_POST["role"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_POST["save"]) {
    $sql = "UPDATE `useraccount` SET `email` = '$email', `username` = '$username', `password` = '$password', `role` = '$role' WHERE `useraccount`.`ID` =  $id ";

    if ($db->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $db->error;
    }
    $db->close();
};

if ($_POST["delete"]) {
    $sql = "DELETE FROM `useraccount` WHERE `ID` = $id";

    if ($db->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $db->error;
    }
    $db->close();
};

if ($_POST["insert"]) {
    $sql = "INSERT INTO `useraccount` (`email`, `username`, `password`, `role`)
VALUES ('$email', '$username', '$password', '$role')";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
};




//redirect
header("Location: manageAccounts.php");
exit();
