<?php
session_start();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ege Bölgesi Tarifleri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Ege Bölgesi</h1>
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
            <!-- Keşkek -->
            <article>
                <h2>Keşkek</h2>
                <img src="images/keskek.jpg" alt="Keşkek" class="food-image">
                <p><strong>Keşkek</strong>, özellikle Ege Bölgesi'nde yapılan geleneksel bir yemektir. Genellikle düğünler ve özel kutlamalarda yapılan keşkek, buğday ve etin uzun süre pişirilerek özleştiği, oldukça doyurucu ve besleyici bir yemektir. Bu yemeğin Osmanlı dönemine dayanan bir geçmişi vardır ve Anadolu'nun farklı bölgelerinde de benzer versiyonları bulunur.</p>
                
                <h3>Malzemeler:</h3>
                <ul>
                    <li>1 su bardağı buğday</li>
                    <li>500g tavuk eti (veya kuzu eti tercih edilebilir)</li>
                    <li>1 su bardağı sıvı yağ</li>
                    <li>1 tatlı kaşığı tuz</li>
                    <li>Karabiber (isteğe bağlı)</li>
                    <li>Üzeri için tereyağı</li>
                </ul>

                <h3>Yapılışı:</h3>
                <ol>
                    <li>Öncelikle buğdayı bir gece önceden suda bekletin.</li>
                    <li>Bir tencerede etleri haşlayın. Etler yumuşayana kadar pişirilsin.</li>
                    <li>Başka bir tencerede, bekletilen buğdayı bol suyla haşlamaya başlayın.</li>
                    <li>Etleri didikleyip, haşlanmış buğdayla karıştırın. Tuz, karabiber ekleyin.</li>
                    <li>Yavaşça pişirin, arada karıştırarak buğdayın etle birleşmesini sağlayın.</li>
                    <li>Son olarak üzerine tereyağını ekleyip karıştırın ve sıcak servis yapın.</li>
                </ol>
            </article>

            <!-- Zeytinyağlı Enginar -->
            <article>
                <h2>Zeytinyağlı Enginar</h2>
                <img src="images/enginar.jpg" alt="Zeytinyağlı Enginar" class="food-image">
                <p><strong>Zeytinyağlı Enginar</strong>, Ege mutfağının öne çıkan zeytinyağlı yemeklerinden biridir. Özellikle enginarın bol olduğu Ege kıyılarında sıkça tüketilen bu yemek, hem sağlıklı hem de hafif bir alternatiftir. Enginar, Ege'de "doğanın hediyesi" olarak kabul edilir ve çeşitli yemeklerde kullanılır. Zeytinyağı ile pişirildiğinde, zeytinin aroması ve enginarın kendine has tadı mükemmel bir uyum sağlar.</p>
                
                <h3>Malzemeler:</h3>
                <ul>
                    <li>4 adet enginar</li>
                    <li>1 su bardağı zeytinyağı</li>
                    <li>1 adet limon (suyu ve kabuğu)</li>
                    <li>1 tatlı kaşığı tuz</li>
                    <li>1 tatlı kaşığı şeker</li>
                    <li>2 su bardağı su</li>
                    <li>Sebzeler (havuç, bezelye, patates gibi isteğe bağlı)</li>
                </ul>

                <h3>Yapılışı:</h3>
                <ol>
                    <li>Enginarları temizleyin ve limonlu suya koyun, kararmamaları için.</li>
                    <li>Bir tencerede zeytinyağını ısıtın ve enginarları ekleyin.</li>
                    <li>Üzerine şeker, tuz, limon suyu ve suyu ekleyin.</li>
                    <li>Sebzeleri de ekleyip, kısık ateşte yaklaşık 30-40 dakika pişirin.</li>
                    <li>Enginarlar yumuşadığında ocaktan alın ve soğumaya bırakın.</li>
                    <li>Soğuduktan sonra limon kabuğunu rendelerek üzerine serpin ve soğuk olarak servis yapın.</li>
                </ol>
            </article>
        </section>
    </main>

    <footer>
        <p>© 2024 Yöresel Lezzetler. Tüm Hakları Saklıdır.</p>
    </footer>
</body>
</html>
