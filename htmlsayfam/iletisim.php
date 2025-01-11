<?php
session_start();
?>

<?php
include('db_connection.php');

ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $ad_soyad = $_POST['name'];
    $email = $_POST['email'];
    $mesaj = $_POST['message'];

    $sql = "INSERT INTO mesajlar (ad_soyad, email, mesaj) VALUES ('$ad_soyad', '$email', '$mesaj')";

    if (mysqli_query($conn, $sql)) {
        echo "Mesaj başarıyla gönderildi.";
    } else {
        echo "Mesaj gönderilirken bir hata oluştu: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Bizimle İletişime Geçin</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Ana Sayfa</a></li>
                <li><a href="login.php">Giriş</a></li> 
                <li><a href="signup.php" >Kayıt Ol</a></li>
                <li><a href="mesajlar.php" >Mesajlar</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <h1>İletişim</h1>
        <form action="iletisim.php" method="POST" class="contact-form">
            <label for="name">Ad Soyad:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">E-posta:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Mesajınız:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            <button type="submit">Gönder</button>
        </form>
    </main>

    <footer>
        <p>© 2024 Yöresel Lezzetler. Tüm Hakları Saklıdır.</p>
    </footer>

</body>
</html>
