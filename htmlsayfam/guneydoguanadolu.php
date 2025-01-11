<?php
session_start();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Güneydoğu Anadolu Bölgesi Tarifleri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Güneydoğu Anadolu Bölgesi</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Ana Sayfa</a></li>
                <li><a href="iletisim.php">İletişim</a></li>
                <li><a href="login.php">Giriş</a></li> 
                <li><a href="signup.php" >Kayıt Ol</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="recipes">
            <!-- Harran Kebabı -->
            <article>
                <h2>Harran Kebabı</h2>
                <img src="images/harrankebabi.jpg" alt="Harran Kebabı" class="food-image">
                <p><strong>Harran Kebabı</strong>, Güneydoğu Anadolu'nun en sevilen kebaplarından biridir. Kuzu eti, özel baharatlarla yoğrulup şişe geçirilerek mangalda pişirilir. Yanında pilav veya közlenmiş sebzelerle servis edilir.</p>

                <h3>Malzemeler:</h3>
                <ul>
                    <li>1 kg kuzu eti</li>
                    <li>1 adet soğan</li>
                    <li>2 yemek kaşığı zeytinyağı</li>
                    <li>Baharatlar (kimyon, pul biber, tuz, karabiber)</li>
                </ul>

                <h3>Yapılışı:</h3>
                <ol>
                    <li>Kuzu etini kuşbaşı doğrayın, soğanı rendeleyin ve baharatlarla karıştırarak etin üzerine ekleyin.</li>
                    <li>Etin üzerine zeytinyağını ekleyip iyice karıştırın ve buzdolabında 1 saat marine olmasını bekleyin.</li>
                    <li>Marine edilen etleri şişe dizin ve mangalda pişirin.</li>
                    <li>Pişen Harran Kebabını sıcak servis edin, yanında pilav veya közlenmiş sebzelerle sunabilirsiniz.</li>
                </ol>
            </article>

            <!-- Urfa Kebabı -->
            <article>
                <h2>Urfa Kebabı</h2>
                <img src="images/urfakebabi.jpg" alt="Urfa Kebabı" class="food-image">
                <p><strong>Urfa Kebabı</strong>, Urfa'nın en meşhur kebaplarından biridir. Kuzu kıyması, özel baharatlar ile yoğrulup şişe geçirilerek mangalda pişirilir. Yoğurt ve közlenmiş sebzelerle birlikte servis edilir.</p>

                <h3>Malzemeler:</h3>
                <ul>
                    <li>1 kg kuzu kıyması</li>
                    <li>1 adet soğan</li>
                    <li>Baharatlar (pul biber, kimyon, tuz, karabiber)</li>
                    <li>2 yemek kaşığı zeytinyağı</li>
                </ul>

                <h3>Yapılışı:</h3>
                <ol>
                    <li>Kuzu kıymasını geniş bir kapta yoğurun, ince doğranmış soğanı ve baharatları ekleyin.</li>
                    <li>Yoğurduğunuz harcı şişe geçirin ve mangalda pişirin.</li>
                    <li>Urfa Kebabını sıcak servis edin, yanında yoğurt ve közlenmiş sebzelerle sunabilirsiniz.</li>
                </ol>
            </article>
        </section>
    </main>

    <footer>
        <p>© 2024 Yöresel Lezzetler. Tüm Hakları Saklıdır.</p>
    </footer>
</body>
</html>
