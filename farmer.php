<?php
// Include the file containing database connection details
include 'connection.php';

// Sample product data
$products = array(
    array("id" => 1, "name" => "Tomato", "price" => 2.5),
    array("id" => 2, "name" => "Potato", "price" => 1.8),
    array("id" => 3, "name" => "Carrot", "price" => 1.2)
);

// Endpoint to get all products
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Content-Type: application/json');
    echo json_encode($products);
}
?>
