<?php
include '../PHP/config.php';

$sql = "SELECT id, name, price, quantity, manufacture, imagename FROM shoppingcart";
$result = $db->query($sql);
$cartItems = [];

if ($result->num_rows > 0) {

    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $item = (object) [
            'id' => $row["id"], 'name' => $row["name"], 'price' => $row["price"],
            'quantity' => $row["quantity"],  'manufacture' => $row["manufacture"],  'imageName' => $row["imagename"]
        ];
        array_push($cartItems, $item);
    };

    $cookie_name = "cartItems";
    $cookie_value = json_encode($cartItems);
    setcookie($cookie_name, $cookie_value);

    if (!isset($_COOKIES[$cookie_name])) {
        // Cookie Created
    }
}
