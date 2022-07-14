<?php

$sku = $_GET["sku"];
$name = $_GET["name"];
$price = $_GET["price"];
$productType = $_GET["productType"];
$size = $_GET["size"];
$height = $_GET["height"];
$width = $_GET["width"];
$length = $_GET["length"];
$weight = $_GET["weight"];

$host = "192.168.0.100";
$dbname = "wmgchypn_product";
$username = "wmgchypn_product";
$password = "1234";

$conn = mysqli_connect(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname
);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

validateCheck($conn, $sku);

$sql = "INSERT INTO product (sku, name, price, productType, size, height, width, length, weight) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";



$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param(
    $stmt,
    "sssssssss",
    $sku,
    $name,
    $price,
    $productType,
    $size,
    $height,
    $width,
    $length,
    $weight
);

mysqli_stmt_execute($stmt);

echo "<script> location.href='./index.php'; </script>";


function validateCheck($conn, $sku)
{

    $query = mysqli_query($conn, "SELECT * FROM product WHERE sku='$sku'");

    if (mysqli_num_rows($query) != 0) {
        die("SKU already exists");
    }
}
