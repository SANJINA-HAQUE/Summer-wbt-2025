<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>

<body>
    <h2>ADD PRODUCT</h2>
    <form action="product_db.php" method="post">   
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="buying">Buying Price</label><br>
        <input type="number" id="buying_price" name="buying_price"><br>

        <label for="selling">Selling Price</label><br>
        <input type="number" id="selling_price" name="selling_price"><br><hr>

        <input type="checkbox" id="display" name="display"> Display<br><hr>

        <input type="submit" value="Save">
</body>

</html>