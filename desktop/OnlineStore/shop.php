<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store | Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class= "navbar-brand" href="cart.php">My Cart</a>
    </nav>

    <center>
        <h3>All Available Products</h3>
    </center>

    <?php
    include 'config.php';
    $result = mysqli_query($con, "SELECT * FROM products");
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
            <div class='card' style='width: 18rem;''>
                <img src='$row[prodImg]' class='card-img-top'>
                <div class='card-body>
                    <h5 class='card-title'>$row[prodName]</h5>
                    <p class='card-text'>$row[prodPrice]</p>
                    <a href='validate.php?ID=$row[ID]' name='add' class='btn btn-success'>Add to cart</a>
                </div>
            </div>
        </center>
        ";
    }

    ?>

    <!-- Styling !-->
    <style>
        .card{
    font-family: Arial, Helvetica, sans-serif;
    float: right;
    margin-top: 20px;
    margin-left: 20px;
    margin-right: 10px;
    }
        h3{
    margin-top: 40px;
    }
    .card img{
        width: 100%;
        height: 200px;
    }
    .navbar-brand{
        margin-left: 70px;
        text-decoration: none;
        color: white;
    }
    </style>

</body>
</html>