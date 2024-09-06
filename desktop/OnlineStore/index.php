<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store | Add Products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <div class="title">

        </div>
        <div class="main">
            <h2>Welcome to our online store!</h2>
            <img src="images/logo.jpeg" alt="LOGO">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="productName">
                <br>
                <input type="number" name="price">
                <br>
                <input type="file" name="productImg" id="file">
                <label for="file">Upload Image</label>
                <button name="upload">DONE</button>
                <br><br>
                <a href="products.php">View all products</a>
            </form>
        </div>
        <p>Developed By <a href="https://www.linkedin.com/in/moaaz-abdelrahman-733437247/">Moaaz Abderahman</a>.</p>
    </center>
</body>
</html>