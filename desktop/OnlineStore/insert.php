<?php

include 'config.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(isset($_POST['upload'])){
    $name = $_POST['productName'];
    $price = $_POST['price'];
    $image = $_FILES['productImg'];
    $image_location = $_FILES['productImg']['tmp_name'];
    $image_name = $_FILES['productImg']['name'];
    $image_up = "images/".$image_name;
    //save query
    $insert = "INSERT INTO `products`(`prodName`, `prodPrice`, `prodImg`) VALUES ('$name','$price','$image_up')";

    //query with error handling

    if (mysqli_query($con, $insert)) {
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

?>