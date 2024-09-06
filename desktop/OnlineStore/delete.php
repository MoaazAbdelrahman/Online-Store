<?php

include 'config.php';
$id = $_GET['ID'];

mysqli_query($con, "DELETE FROM products WHERE ID=$id");
header('location: products.php');

?>