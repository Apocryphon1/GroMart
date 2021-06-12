<?php
include '../PHP/config.php';

$id = $quantity = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = test_input($_POST["id"]);
    $quantity = test_input($_POST["quantity"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_POST["delete"]) {
    $sql = "DELETE FROM `shoppingcart` WHERE `id` = $id";

    if ($db->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $db->error;
    }
    $db->close();
};

if ($_POST["update"]) {

    if($_POST["update"] == "increment"){
        $quantity ++;
    } ;
    if($_POST["update"] == "decrement"){
        $quantity --;
    };

    $sql = "UPDATE `shoppingcart` SET `quantity` = '$quantity' WHERE `shoppingcart`.`id` =  $id ";

    if ($db->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $db->error;
    }
    $db->close();
};

//redirect
header("Location: shoppingCart.php");
exit();