<?php
include('config.php');
$ID=$_GET['ID'];
$up = mysqli_query($con, "select * from products where id=$ID");
$data = mysqli_fetch_array($up);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
</head>
<style>
        input{
            display: none;
        }
        .main{
            width: 30%;
            padding: 20px;
            box-shadow: 1px 1px 10px silver;
            margin-top: 50px
        }
    </style>

<body>
    <center>
    <div class="main">
        <form action="insertcart.php" method="post"> 
            <h2> Are you sure? </h2>
                <input type="text" name="id" value="<?php echo $data['ID']?>">
                <input type="text" name="name" value="<?php echo $data['prodName']?>"> 
                <input type="text" name="price" value="<?php echo $data ['prodPrice']?>"> 
                <button name="add" type="submit" class='btn btn-warning'> Add </button>
                <br> 
                <a href="shop.php">Back to products</a>
        </form>
    </div>
    </center>
</body>
</html>