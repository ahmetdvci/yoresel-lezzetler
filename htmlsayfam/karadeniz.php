<?php
session_start();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karadeniz Bölgesi Tarifleri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Karadeniz Bölgesi</h1>
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

            <article>
                <h2>Kara Lahana Sarması</h2>
                <img src="images/karalahana.jpg" alt="Kara Lahana Sarması" class="food-image">
                <p><strong>Kara Lahana Sarması</strong>, Karadeniz mutfağının en sevilen yemeklerinden biridir. Karadeniz'in zengin tarım ürünleri arasında yer alan kara lahana, özellikle kış aylarında sıklıkla tüketilir. Kara Lahana Sarması, lahana yapraklarının içine özel bir iç harcı sarılarak yapılan bu yemek, zeytinyağı ve baharatlarla tatlandırılır ve hem doyurucu hem de lezzetli bir alternatiftir. Ayrıca, Karadeniz'de genellikle et yemeklerinin yanında veya tek başına ana yemek olarak servis edilir.</p>
                
                <h3>Malzemeler:</h3>
                <ul>
                    <li>1 adet kara lahana</li>
                    <li>1 su bardağı pirinç</li>
                    <li>250g kıyma</li>
                    <li>1 adet soğan</li>
                    <li>Zeytinyağı</li>
                    <li>Yarım çay bardağı su</li>
                    <li>Tuz, karabiber ve pul biber</li>
                </ul>

                <h3>Yapılışı:</h3>
                <ol>
                    <li>Lahana yapraklarını kaynar suda 5-10 dakika haşlayın ve soğumaya bırakın.</li>
                    <li>Bir tavada soğanı ince ince doğrayıp, zeytinyağında kavurun.</li>
                    <li>Kıyma ve pirinci ekleyip, karıştırarak pişirmeye devam edin.</li>
                    <li>Baharatları ve suyu ekleyip karıştırın, iç harcınız hazır.</li>
                    <li>Haşlanmış lahana yapraklarına iç harcı koyup, sararak tencereye dizin.</li>
                    <li>Üzerine biraz su ve zeytinyağı ekleyip, kısık ateşte pişirin.</li>
                </ol>
            </article>
            
            <article>
                <h2>Kuymak</h2>
                <img src="images/kuymak.jpg" alt="Kuymak" class="food-image">
                <p><strong>Kuymak</strong>, Trabzon'a özgü bir kahvaltı lezzetidir. Karadeniz Bölgesi'nin simgelerinden biri olan kuymak, mısır unu, tereyağı ve kaşar peyniri ile yapılan sıvı kıvamlı bir yemek olup, sıcak servis edilir. Özellikle kahvaltılarda tercih edilen bu lezzet, yöre halkı tarafından çok sevilir ve geleneksel olarak sıklıkla tüketilir. Farklı versiyonları olsa da kuymak, her zaman karadeniz mutfağının vazgeçilmezlerinden biri olmuştur.</p>

                <h3>Malzemeler:</h3>
                <ul>
                    <li>2 su bardağı mısır unu</li>
                    <li>1,5 su bardağı su</li>
                    <li>Yarım paket tereyağı</li>
                    <li>200g kaşar peyniri</li>
                    <li>Yarım çay bardağı süt</li>
                    <li>Tuz</li>
                </ul>

                <h3>Yapılışı:</h3>
                <ol>
                    <li>Tereyağını bir tavada eritin.</li>
                    <li>Mısır ununu ekleyin ve karıştırarak birkaç dakika kavurun.</li>
                    <li>Su ve sütü ekleyin, karıştırarak mısır unu tamamen sıvı karışıma yedirin.</li>
                    <li>Kaşar peynirini ekleyin ve karıştırarak peynirin erimesini sağlayın.</li>
                    <li>Tuzunu ekleyin, karıştırarak kısık ateşte pişirmeye devam edin.</li>
                    <li>Kuymak sıvı hale geldiğinde ocaktan alın ve sıcak servis yapın.</li>
                </ol>
            </article>
        </section>
    </main>

    <footer>
        <p>© 2024 Yöresel Lezzetler. Tüm Hakları Saklıdır.</p>
    </footer>
</body>
</html>
