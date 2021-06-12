<?php
include '../../PHP/config.php';

$sql = "SELECT * FROM `productlist`";
$result = $db->query($sql);

$productList = [];

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $item = (object) [
            'id' => $row["pID"], 'name' => $row["pName"], 'price' => $row["pPrice"],
            'description' => $row["pDesc"],  'manufacturer' => $row["pManufacturer"]
        ];
        array_push($productList, $item);
    };

    $cookie_name = "productList";
    $cookie_value = json_encode($productList);
    setcookie($cookie_name, $cookie_value);

    if (!isset($_COOKIES[$cookie_name])) {
        // Cookie Created
    }
}
