<?php
include '../PHP/config.php';

$sql = "SELECT ID, username, email, role, password FROM useraccount";
$result = $db->query($sql);
$allUsers = [];

if ($result->num_rows > 0) {

    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $user = (object) ['ID' => $row["ID"], 'username' => $row["username"], 'password' => $row["password"], 'email' => $row["email"],  'role' => $row["role"]];
        array_push($allUsers, $user);
    }
    $cookie_name = "AllUsers";
    $cookie_value = json_encode($allUsers);
    setcookie($cookie_name, $cookie_value);

    if (!isset($_COOKIES[$cookie_name])) {
        // Cookie Created
    }
}
