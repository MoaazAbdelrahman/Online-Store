<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
    include 'config.php';
    $Id = $_GET['ID'];
    $up = mysqli_query($con, "SELECT * FROM products WHERE ID=$Id");
    $data = mysqli_fetch_array($up);
    ?>

    <center>
        <div class="title">
        </div>
        <div class="main">
            <h2>Edit the product's details</h2>
            <form action="update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="ID" value="<?php echo $Id; ?>"> <!-- Pass ID in a hidden field -->
                <input type="text" name="productName" value= '<?php echo $data['prodName']?>'>
                <br>
                <input type="number" name="price" value= '<?php echo $data['prodPrice']?>'>
                <br>
                <input type="file" name="productImg" id="file">
                <label for="file">Upload a new image</label>
                <button name="update">Update</button>
                <br><br>
                <a href="products.php">View all products</a>
            </form>
        </div>
        <p>Developed By <a href="https://www.linkedin.com/in/moaaz-abdelrahman-733437247/">Moaaz Abderahman</a>.</p>
    </center>
</body>
</html>