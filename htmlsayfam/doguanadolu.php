<?php
session_start();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doğu Anadolu Bölgesi Tarifleri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Doğu Anadolu Bölgesi</h1>
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
            <!-- Cağ Kebabı -->
            <article>
                <h2>Cağ Kebabı</h2>
                <img src="images/cagkebabi.jpg" alt="Cağ Kebabı" class="food-image">
                <p><strong>Cağ Kebabı</strong>, Erzurum'un en meşhur lezzetlerinden biridir. Kuzu etinin şişe dizilip, odun ateşinde döndürülerek pişirilen bu kebap, etin yumuşak ve lezzetli olmasını sağlar. Yanında soğan, pide ve yoğurt ile servis edilir. Yöresel bir tat olan Cağ Kebabı, etin baharatlarla harmanlanıp şişe geçirilmesi ile eşsiz bir lezzet ortaya çıkarır.</p>

                <h3>Malzemeler:</h3>
                <ul>
                    <li>500g kuzu eti (tercihen but kısmı)</li>
                    <li>1 su bardağı yoğurt</li>
                    <li>1 tatlı kaşığı tuz</li>
                    <li>Yarım tatlı kaşığı pul biber</li>
                    <li>Karabiber, kimyon, kekik (isteğe bağlı)</li>
                </ul>

                <h3>Yapılışı:</h3>
                <ol>
                    <li>Kuzu etini kuşbaşı doğrayın ve yoğurt, tuz, pul biber, karabiber, kimyon ve kekikle harmanlayın.</li>
                    <li>Etin üzerinde baharatları iyice yedirin ve buzdolabında 1-2 saat marine olmasını bekleyin.</li>
                    <li>Etleri şişe dizin ve mangalda ya da odun ateşinde döndürerek pişirin.</li>
                    <li>Pişen Cağ Kebabını sıcak servis edin, yanında soğan, pide ve yoğurtla sunabilirsiniz.</li>
                </ol>
            </article>

            <!-- Kaz Eti -->
            <article>
                <h2>Kaz Eti</h2>
                <img src="images/kazeti.jpg" alt="Kaz Eti" class="food-image">
                <p><strong>Kaz Eti</strong>, Doğu Anadolu'nun geleneksel lezzetlerinden biridir. Özellikle kış aylarında yapılan bu yemek, kazın etli ve lezzetli kısmı kullanılarak pişirilir. Kaz eti, genellikle düşük ısılarda uzun süre pişirilerek yumuşatılır ve özlü, yağlı bir tat elde edilir.</p>

                <h3>Malzemeler:</h3>
                <ul>
                    <li>1 adet kaz</li>
                    <li>1 adet soğan</li>
                    <li>Yarım çay bardağı sıvı yağ</li>
                    <li>Tuz ve karabiber</li>
                    <li>Sarımsak (isteğe bağlı)</li>
                </ul>

                <h3>Yapılışı:</h3>
                <ol>
                    <li>Kazı temizleyin ve tüylerini iyice temizledikten sonra parçalara ayırın.</li>
                    <li>Bir tencerede sıvı yağı ısıtın, soğanı ve sarımsağı ekleyip soteleyin.</li>
                    <li>Kaz etini tencereye ekleyin ve üzerine tuz ve karabiber serpin.</li>
                    <li>Kaz etinin üzerine biraz su ekleyin ve kısık ateşte 2-3 saat kadar pişirin.</li>
                    <li>Pişen kaz etini sıcak olarak servis edin, yanında pilav ve yoğurtla sunabilirsiniz.</li>
                </ol>
            </article>
        </section>
    </main>

    <footer>
        <p>© 2024 Yöresel Lezzetler. Tüm Hakları Saklıdır.</p>
    </footer>
</body>
</html>
