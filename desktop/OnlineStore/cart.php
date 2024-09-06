<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store | Cart</title>
</head>
<body>
    <style>
        h3 {
            font-family: sans-serif;
            margin-top: 30px;
        }

        main {
            width: 40%;
            margin-top: 30px;
        }
        thead {
            text-align: center;
        }

        tbody {
            text-align: center;
        }
    </style>


    <center><h3>My Cart</h3></center>


    <?php
    
    include 'config.php';
    $result = mysqli_query($con, "SELECT * FROM addcart");
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
        <main>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>Product Name</th>
                        <th scope='col'>Product Price</th>
                        <th scope='col'>Delete Product</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><a href='delcart.php? id=$row[id]' class='btn btn-danger'>Delete Item</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </center>
    ";
    }
    ?>
    <center>
        <a href="shop.php">Back to the Products</a>
    </center>
</body>
</html>