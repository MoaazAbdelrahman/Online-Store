<?php

include 'config.php';

$ID = $_GET['id'];
$del = mysqli_query($con, "DELETE FROM addcart WHERE id=$ID");

header('location: cart.php');

?>