<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yemek"; // Veritabanı adı

$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Şifreyi SHA1 ile hashle
    $hashed_password = sha1($input_password);

    // Kullanıcıyı veritabanından sorgula
    $sql = "SELECT * FROM users WHERE username=? AND password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $input_username, $hashed_password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['loggedIn'] = true;
        $_SESSION['username'] = $input_username;

        header("Location: index.php");
        exit();
    } else {
        $error = "Kullanıcı adı veya şifre hatalı!";
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
    <title>Giriş Yap</title>
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
                <li><a href="signup.php">Kayıt Ol</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Giriş Yap</h1>
        <form action="login.php" method="POST">
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Giriş Yap</button>
        </form>
        <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
    </main>

    <footer>
        <p>© 2024 Türkiye Yöresel Lezzetler. Tüm Hakları Saklıdır.</p>
    </footer>
</body>
</html>
