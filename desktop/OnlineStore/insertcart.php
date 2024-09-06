<?php

include 'config.php';
if(isset($_POST['add'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $id = $_POST['id'];

    $insert = "INSERT INTO addcart (name, price) VALUES ('$name', '$price')";

    mysqli_query($con, $insert);

    header('location:shop.php');
}
?>