<?php
$conn = mysqli_connect("localhost", 'root', "");
if(!$conn)
{
    echo "not connected";
}

if (!mysqli_select_db($conn, 'webb')) {
    echo "not selected any db";
}

$id = $_POST['pid'];
$name = $_POST['pname'];
$price = $_POST['pprice'];
$quant = $_POST['pquantity'];
$add = $_POST['paddress'];




    $sql = "INSERT INTO product (product_id, product_name, price, quantity, product_address) VALUES ( $id, '$name' , $price, $quant,'$add' )";

    if(!mysqli_query($conn,$sql)) 
{
    echo 'not inserted yet';
    echo $conn->error;
}
else
{
    echo ' inserted';
} 





?>