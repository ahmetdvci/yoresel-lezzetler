<?php
$servername = "localhost"; // XAMPP ile genelde localhost olur
$username = "root"; // Varsayılan kullanıcı adı root
$password = ""; // Varsayılan şifre genelde boştur
$dbname = "yemek"; // Oluşturduğunuz veri tabanının adı

// Bağlantı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı başarısız: " . $conn->connect_error);
}
?>
