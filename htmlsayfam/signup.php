<?php
session_start();
?>
    
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yemek"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_username = $_POST['username'];
    $input_email = $_POST['email'];
    $input_password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    if ($input_password !== $confirm_password) {
        echo "Şifreler uyuşmuyor!";
        exit();
    }

    $hashed_password = sha1($input_password);

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    if (!$stmt = $conn->prepare($sql)) {
        die("Hata: SQL sorgusu hazırlanamıyor! " . $conn->error);
    }
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $input_username, $input_email, $hashed_password);

    if ($stmt->execute()) {
        echo "Kayıt başarılı! Giriş yapabilirsiniz.";
        header("Location: login.php");
        exit();
    } else {
        echo "Hata: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Türkiye Yöresel Lezzetleri</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Ana Sayfa</a></li>
                <li><a href="iletisim.php">İletişim</a></li>
                <li><a href="login.php">Giriş</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="signup-section">
            <h1>Kayıt Ol</h1>
            <form action="signup.php" method="POST">
                <label for="username">Kullanıcı Adı</label>
                <input type="text" id="username" name="username" required>

                <label for="email">E-posta</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Şifre</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm-password">Şifreyi Tekrar Girin</label>
                <input type="password" id="confirm-password" name="confirm-password" required>

                <button type="submit">Kayıt Ol</button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2024 Türkiye Yöresel Lezzetler. Tüm Hakları Saklıdır.</p>
    </footer>
</body>
</html>
