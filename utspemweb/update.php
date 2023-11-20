<?php
require './config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $productId = $_POST['id'];
    $productName = $_POST['name'];
    $productPrice = $_POST['price'];

    // Contoh: Query untuk melakukan UPDATE ke database
    $updateQuery = "UPDATE products SET name = '$productName', price = '$productPrice' WHERE id = $productId";
    
    if (mysqli_query($db_connect, $updateQuery)) {
        // Jika berhasil, munculkan alert
        echo "<script>
        alert('Data produk berhasil diperbarui!');
        document.location.href = 'show.php';
        </script>";
    } else {
        // Jika terjadi kesalahan, munculkan alert dengan pesan error
        echo "<script>alert('Error: " . mysqli_error($db_connect) . "');
        document.location.href = 'show.php';</script>";
    }
}
?>