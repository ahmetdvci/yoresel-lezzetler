<?php
session_start();
include('db_connection.php');

$sql = "SELECT * FROM mesajlar ORDER BY tarih DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesajlar</title>
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
        <section class="message-section">
            <h2>Gönderilen Mesajlar</h2>

            <?php if (mysqli_num_rows($result) > 0): ?>
                <table class="message-table">
                    <thead>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>Email</th>
                            <th>Mesaj</th>
                            <th>Tarih</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?php echo $row['ad_soyad']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['mesaj']; ?></td>
                                <td><?php echo $row['tarih']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>Henüz gönderilmiş bir mesaj yok.</p>
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <p>© 2024 Türkiye Yöresel Lezzetler. Tüm Hakları Saklıdır.</p>
    </footer>

</body>
</html>
