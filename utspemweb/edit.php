<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <?php
    require './config/db.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $productId = $_GET['id'];
        
        $productQuery = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $productId");
        $product = mysqli_fetch_assoc($productQuery);
    }
    ?>

    <h1>Edit Produk</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        <label for="name">Nama Produk:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>"><br>
        
        <label for="price">Harga:</label><br>
        <input type="text" id="price" name="price" value="<?php echo $product['price']; ?>"><br>

        <!-- Contoh: Bagian untuk mengunggah gambar produk -->
        <!-- <label for="image">Gambar Produk:</label><br>
        <input type="file" id="image" name="image"><br> -->

        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
