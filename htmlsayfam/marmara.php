<?php
session_start();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marmara Bölgesi Tarifleri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Marmara Bölgesi</h1>
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
            <!-- İskender Kebap -->
            <article>
                <h2>İskender Kebap</h2>
                <img src="images/iskender.jpg" alt="İskender Kebap" class="food-image">
                <p><strong>İskender Kebap</strong>, Bursa'nın meşhur lezzetlerinden biridir. 19. yüzyılda, İskender Efendi tarafından yaratıldığı rivayet edilir. Bursa'nın geleneksel et yemeklerinden olan İskender Kebap, ince dövülmüş kuzu etinin özel bir sosla birleşmesiyle sunulur. Yemek, Osmanlı İmparatorluğu döneminde saraylarda da sıklıkla servis edilmiştir.</p>
                
                <h3>Malzemeler:</h3>
                <ul>
                    <li>500g kuzu eti (tercihen dönerlik)</li>
                    <li>1 adet pide</li>
                    <li>2 yemek kaşığı domates salçası</li>
                    <li>1 yemek kaşığı tereyağı</li>
                    <li>Yoğurt (servis için)</li>
                    <li>Geniş bir tavada sıvı yağ</li>
                    <li>Bir tutam tuz ve baharatlar (karabiber, pul biber)</li>
                </ul>
                
                <h3>Yapılışı:</h3>
                <ol>
                    <li>Öncelikle kuzu etini ince ince doğrayın ve üzerine tuz, karabiber ve diğer baharatları ekleyip karıştırın.</li>
                    <li>Bir tavada sıvı yağ ısıtın ve etleri ekleyin. Etleri güzelce kızartın.</li>
                    <li>Ayrı bir tencerede domates salçasını tereyağında kavurun ve üzerine biraz su ekleyin. Sosu kaynatmaya bırakın.</li>
                    <li>Pideyi küp şeklinde doğrayın ve tavada kızartın.</li>
                    <li>Yapılan etleri pide üzerine yerleştirin ve domates sosunu dökün. Üzerine tereyağını ekleyin.</li>
                    <li>Yoğurdu da üzerine ekleyip sıcak olarak servis yapın.</li>
                </ol>
            </article>

            <!-- Saray Muhallebisi -->
            <article>
                <h2>Saray Muhallebisi</h2>
                <img src="images/saraymuhallebisi.jpg" alt="Saray Muhallebisi" class="food-image">
                <p><strong>Saray Muhallebisi</strong>, Osmanlı İmparatorluğu'ndan günümüze kadar gelen hafif ve lezzetli bir tatlıdır. Osmanlı saray mutfağında sıkça yapılan bu tatlı, sütlü tatlılar arasında en sevilenlerden biridir. İnce pirinç ununun sütle birleşimiyle ortaya çıkan muhallebi, geleneksel Türk mutfağının vazgeçilmezlerindendir.</p>
                
                <h3>Malzemeler:</h3>
                <ul>
                    <li>2 litre süt</li>
                    <li>200g pirinç unu</li>
                    <li>1 su bardağı şeker</li>
                    <li>1 paket vanilin</li>
                    <li>Yarım su bardağı su</li>
                    <li>Fındık veya ceviz (isteğe bağlı)</li>
                </ul>

                <h3>Yapılışı:</h3>
                <ol>
                    <li>Bir tencerede sütü ısıtın ve pirinç ununu ekleyin. Karıştırarak koyulaşmaya başlayana kadar pişirin.</li>
                    <li>Şekeri ilave edin ve karıştırmaya devam edin.</li>
                    <li>Kıvam alan muhallebiyi ocaktan alın. Vanilin ekleyin ve iyice karıştırın.</li>
                    <li>Hazırladığınız muhallebiyi kaselere dökün ve soğumaya bırakın.</li>
                    <li>Soğuyan muhallebiyi üzerine fındık veya ceviz ile süsleyerek soğuk servis edin.</li>
                </ol>
            </article>
        </section>
    </main>

    <footer>
        <p>© 2024 Yöresel Lezzetler. Tüm Hakları Saklıdır.</p>
    </footer>
</body>
</html>
