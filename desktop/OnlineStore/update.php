<?php

include 'config.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(isset($_POST['update'])){
    $Id = $_POST['ID'];
    $name = $_POST['productName'];
    $price = $_POST['price'];
    $image = $_FILES['productImg'];
    $image_location = $_FILES['productImg']['tmp_name'];
    $image_name = $_FILES['productImg']['name'];
    $image_up = "images/".$image_name;
    //save query
    $update = "UPDATE products SET prodName='$name' , prodPrice='$price' , prodImg= '$image_up' WHERE ID=$Id";

    //query with error handling

    if (mysqli_query($con, $update)) {
        if (move_uploaded_file($image_location, $image_up)) {
            echo "<script>alert('File Uploaded!')</script>";
        } else {
            echo "<script>alert('The file is not uploaded please try again')</script>";
        }
        header('location: index.php');
    } else {
        echo "Error: " . mysqli_error($con);
    }
    
}
header('location: products.php');
?>