<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akdeniz Bölgesi Tarifleri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Akdeniz Bölgesi</h1>
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
                <h2>Antalya Piyazı</h2>
                <img src="images/antalyapiyazi.jpg" alt="Antalya Piyazı" class="food-image">
                <p><strong>Antalya Piyazı</strong>, Akdeniz mutfağının eşsiz lezzetlerinden biridir. Genellikle et yemeklerinin yanında, özellikle kebapların yanında tercih edilen bu piyaz, tahin ve nar ekşisi ile çok farklı bir tat sunar. Antalya'nın en meşhur yemeklerinden biri olan piyaz, aynı zamanda yaz aylarında soğuk olarak tüketildiğinde serinletici bir etkisi vardır.</p>
                
                <h3>Malzemeler:</h3>
                <ul>
                    <li>1 su bardağı kuru fasulye</li>
                    <li>1 adet soğan</li>
                    <li>1 yemek kaşığı tahin</li>
                    <li>1 yemek kaşığı nar ekşisi</li>
                    <li>Tuz ve karabiber</li>
                    <li>2 yemek kaşığı zeytinyağı</li>
                    <li>Maydanoz (isteğe bağlı)</li>
                </ul>

                <h3>Yapılışı:</h3>
                <ol>
                    <li>Fasulyeleri bir gece önceden suda bekletin. Ertesi gün haşlayın.</li>
                    <li>Soğanı ince ince doğrayın ve zeytinyağında kavurun.</li>
                    <li>Haşlanmış fasulyeleri soğanla karıştırın.</li>
                    <li>Tahin, nar ekşisi, tuz ve karabiberi ekleyip karıştırın.</li>
                    <li>Maydanoz ile süsleyerek soğuk servis yapın.</li>
                </ol>
            </article>
            <article>
                <h2>Tavada Levrek</h2>
                <img src="images/levrek.jpg" alt="Tavada Levrek" class="food-image">
                <p><strong>Tavada Levrek</strong>, Akdeniz mutfağının meşhur balık yemeklerinden biridir. Taze levrek, Akdeniz'in berrak sularından gelen nefis bir balıktır. Levrek, özellikle yaz aylarında hafif ve lezzetli bir seçenek olarak tercih edilir. Akdeniz Bölgesi'nin zeytinyağlı yemekleriyle uyumlu olan bu tarif, balığın taze ve doğal lezzetini ön plana çıkarır.</p>

                <h3>Malzemeler:</h3>
                <ul>
                    <li>2 adet levrek</li>
                    <li>2 yemek kaşığı tereyağı</li>
                    <li>2 yemek kaşığı zeytinyağı</li>
                    <li>Tuz ve karabiber</li>
                    <li>Limon dilimleri (isteğe bağlı)</li>
                </ul>

                <h3>Yapılışı:</h3>
                <ol>
                    <li>Levrekleri temizleyip, tuz ve karabiber ile tatlandırın.</li>
                    <li>Bir tavada tereyağı ve zeytinyağını ısıtın.</li>
                    <li>Levrekleri tavada, her iki tarafı da altın rengini alana kadar pişirin.</li>
                    <li>Servis tabağına alıp, üzerine limon dilimleri ekleyerek sıcak servis yapın.</li>
                </ol>
            </article>

            <article>
                <h2>Fırın Karnıbahar</h2>
                <img src="images/firinkarnabahar.jpg" alt="Fırın Karnıbahar" class="food-image">
                <p><strong>Fırın Karnıbahar</strong>, Akdeniz mutfağının sebze bazlı sağlıklı lezzetlerinden biridir. Zeytinyağı ve baharatlarla tatlandırılan karnıbahar, fırında pişirildiğinde mükemmel bir lezzet ortaya çıkar. Akdeniz mutfağında sebze yemekleri sıklıkla kullanılır ve bu yemek, hem sağlıklı hem de lezzetlidir. Karnıbaharın besleyici özellikleri de oldukça fazladır.</p>

                <h3>Malzemeler:</h3>
                <ul>
                    <li>1 adet karnıbahar</li>
                    <li>3 yemek kaşığı zeytinyağı</li>
                    <li>Bir tutam tuz</li>
                    <li>Bir tutam karabiber</li>
                    <li>1 tatlı kaşığı kekik</li>
                    <li>1 tatlı kaşığı pul biber (isteğe bağlı)</li>
                </ul>

                <h3>Yapılışı:</h3>
                <ol>
                    <li>Karnıbaharı çiçeklerine ayırın ve yıkayın.</li>
                    <li>Bir fırın tepsisine karnıbaharları yerleştirin.</li>
                    <li>Üzerine zeytinyağını, tuzu, karabiberi, kekik ve pul biberi ekleyin.</li>
                    <li>Önceden ısıtılmış 180 derece fırında yaklaşık 30 dakika pişirin.</li>
                    <li>Pişen karnıbaharları fırından çıkarın ve sıcak servis yapın.</li>
                </ol>
            </article>
        </section>
    </main>

    <footer>
        <p>© 2024 Yöresel Lezzetler. Tüm Hakları Saklıdır.</p>
    </footer>
</body>
</html>
