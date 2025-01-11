<?php
session_start();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İç Anadolu Bölgesi Tarifleri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>İç Anadolu Bölgesi</h1>
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
                <h2>Sivas Köftesi</h2>
                <img src="images/sivaskoftesi.jpg" alt="Sivas Köftesi" class="food-image">
                <p><strong>Sivas Köftesi</strong>, İç Anadolu'nun önde gelen lezzetlerinden biridir. Sivas'ta yapılan bu köfte, kıymadan hazırlanan, özel baharatlarla yoğrulup, kızartılarak yapılan nefis bir yemektir. Özellikle etin kalitesi, köftenin lezzetini belirler. Yöresel olarak pilav ve yoğurt eşliğinde servis edilen Sivas Köftesi, geleneksel sofralarda sıkça yer alır.</p>
                
                <h3>Malzemeler:</h3>
                <ul>
                    <li>500g kıyma</li>
                    <li>1 adet soğan</li>
                    <li>1 çay bardağı ekmek içi</li>
                    <li>Tuz, karabiber, kimyon ve pul biber</li>
                    <li>2 yemek kaşığı zeytinyağı</li>
                </ul>

                <h3>Yapılışı:</h3>
                <ol>
                    <li>Kıyma, rendelenmiş soğan, ekmek içi ve baharatları bir kaba alıp yoğurun.</li>
                    <li>Karışım iyice yoğrulduktan sonra şekil verin ve köfteyi yuvarlak ya da uzun şekilde hazırlayın.</li>
                    <li>Bir tavada zeytinyağını kızdırın ve köfteleri her iki tarafı altın rengini alana kadar kızartın.</li>
                    <li>Yanında pilav ve yoğurt ile sıcak servis edin.</li>
                </ol>
            </article>


            <article>
                <h2>Sivas Katmeri</h2>
                <img src="images/sivaskatmeri.jpg" alt="Sivas Katmeri" class="food-image">
                <p><strong>Sivas Katmeri</strong>, İç Anadolu'nun geleneksel tatlılarından biridir. Katmer, ince açılan hamurun arasına tereyağı ve şeker serpilerek yapılan, çıtır çıtır ve lezzetli bir tatlıdır. Sivas'a özgü olarak çayın yanına çok yakışan bu tatlı, hem hafif hem de tatmin edici bir seçenek sunar.</p>

                <h3>Malzemeler:</h3>
                <ul>
                    <li>2 su bardağı un</li>
                    <li>Yarım çay bardağı su</li>
                    <li>1 yemek kaşığı tereyağı</li>
                    <li>Şeker (isteğe göre)</li>
                    <li>İç harcı için: Dövülmüş ceviz (isteğe bağlı)</li>
                </ul>

                <h3>Yapılışı:</h3>
                <ol>
                    <li>Unu ve suyu yoğurun, pürüzsüz bir hamur elde edin.</li>
                    <li>Hamuru 4 bezeye ayırın ve her birini ince bir şekilde açın.</li>
                    <li>Her açılan hamurun arasına tereyağı sürün, sonra hamuru katlayıp tekrar açın.</li>
                    <li>Hamurun üzerine şeker serpip, ceviz ekleyin (isteğe bağlı) ve katları birbirine yapıştırarak katmeri hazırlayın.</li>
                    <li>Yavaşça tavada pişirin, her iki tarafı da altın rengini alana kadar pişirin.</li>
                    <li>Fırın ya da ocak üzerinde pişirdikten sonra sıcak servis yapın.</li>
                </ol>
            </article>
        </section>
    </main>

    <footer>
        <p>© 2024 Yöresel Lezzetler. Tüm Hakları Saklıdır.</p>
    </footer>
</body>
</html>
