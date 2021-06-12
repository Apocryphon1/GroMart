<?php
include '../PHP/config.php';

$sql = "SELECT pID,pName,pDesc,pPrice,pDiscount,pImage,pManufacturer FROM productlist";
$result = $db->query($sql);
$products = array();
$x = 0;
class Product
{
    public $id;
    public $name;
    public $desc;
    public $price;
    public $discount;
    public $img;
    public $manu;
}

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $myProduct[] = new Product();
        $myProduct[$x]->id = $row["pID"];
        $myProduct[$x]->name = $row["pName"];
        $myProduct[$x]->desc = $row["pDesc"];
        $myProduct[$x]->price = $row["pPrice"];
        $myProduct[$x]->discount = $row["pDiscount"];
        $myProduct[$x]->img = $row["pImage"];
        $myProduct[$x]->manu = $row["pManufacturer"];
        $x= $x+1;
    }
   $cookie_name = "Products1";
   $cookie_value = json_encode($myProduct);
   setcookie($cookie_name, $cookie_value);
}