<?php
session_start();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yöresel Lezzetler</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="map.css">
    <style>
        #username {
            color: #111154; 
            font-family: 'Arial', sans-serif; 
            font-weight: bold;
            text-decoration: none;
            padding-right: 20px;
        }

    </style>
</head>
<body>
    <header style="background-color: #66cdaa;"> 
        <div class="logo">
            <h1>Türkiye Yöresel Lezzetleri</h1>
        </div>
        <nav>
            <ul>
                <li><a href="iletisim.php">İletişim</a></li>

                <?php if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true): ?>
                    <li id="user-menu">
                        <a id="username"><?php echo $_SESSION['username']; ?></a> 
                        <span id="logout" onclick="logout()">                        <a href="logout.php">Çıkış Yap</a></span> 
                    </li>
                <?php else: ?>
                    <li id="login-register">
                        <a href="login.php">Giriş</a>
                    </li>
                    <li id="signup-link">
                        <a href="signup.php">Kayıt Ol</a>


                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main>
        <section class="map-section">
            <h1>Yemek Tariflerini Keşfet</h1>
            <p>Türkiye'nin haritası üzerinde bir bölgeye tıklayarak o bölgenin yöresel yemek tariflerine ulaşabilirsiniz. </p>


            <div id="turkiye-haritasi">
                <img src="turkiyem.png" usemap="#turkiye-haritasi-map" alt="Türkiye Haritası">
                <map name="turkiye-haritasi-map">

                    <area class="marmara" alt="Marmara" title="Marmara" href="marmara.php" coords="28,201,58,199,62,191,80,188,89,192,102,189,116,197,118,203,118,211,172,211,182,201,194,189,205,181,212,190,221,194,228,201,235,208,238,212,246,193,271,164,262,189,279,156,286,141,283,120,283,111,254,109,236,103,185,93,159,82,144,53,118,38,81,34,62,43,45,79,33,108,33,121,9,147" shape="poly">
                    <area class="karadeniz" alt="Karadeniz" title="Karadeniz" href="karadeniz.php" coords="341,84,375,69,394,63,440,60,470,63,490,57,498,72,518,84,540,78,545,95,562,107,574,104,590,104,597,117,610,121,641,126,693,129,711,123,746,117,771,117,798,97,807,92,824,88,834,85,851,81,866,81,874,89,869,101,861,109,852,117,850,131,850,145,838,157,826,161,790,161,771,165,745,165,683,171,654,178,642,185,634,192,601,191,555,190,518,172,488,167,473,156,433,137,417,146,390,163,365,167,346,170,317,183,257,182,289,147,281,113" shape="poly">
                    <area class="ege" alt="Ege" title="Ege" href="ege.php" coords="55,203,66,201,58,191,74,189,87,193,100,193,107,203,115,212,130,219,156,223,167,214,181,208,192,198,196,190,204,191,211,195,223,203,233,210,259,230,257,244,279,244,296,243,308,244,306,265,306,281,296,295,290,298,267,315,244,329,217,351,202,366,184,384,178,396,148,406,132,402,106,395,90,391,64,381,57,341,37,316,27,304,19,279,21,267" shape="poly">
                    <area class="akdeniz" alt="Akdeniz" title="Akdeniz" href="akdeniz.php" coords="154,404,179,394,242,330,293,297,305,324,363,377,380,381,399,382,470,361,545,323,580,330,582,340,590,345,577,370,578,402,578,428,578,451,557,463,545,472,530,438,552,414,541,400,517,424,479,410,444,430,431,448,392,454,351,454,331,429,305,415,266,403,253,422,242,440,221,447,200,439,181,431,169,421" shape="poly">
                    <area class="icanadolu" alt="İç Anadolu" title="İç Anadolu" href="icanadolu.php" coords="254,186,237,210,257,230,256,242,307,243,304,278,294,295,304,317,336,351,382,384,403,383,423,375,461,362,513,335,541,323,563,310,604,285,633,264,658,221,663,191,658,177,636,191,553,190,516,172,494,169,434,138,389,164,319,185" shape="poly">
                    <area class="doguanadolu" alt="Doğu Anadolu" title="Doğu Anadolu" href="doguanadolu.php" coords="658,179,666,198,648,248,622,278,565,312,546,326,560,327,580,330,587,344,594,345,642,344,718,344,736,337,751,320,786,314,808,310,836,320,844,327,863,350,864,362,866,374,886,375,919,366,942,360,972,364,994,381,1008,370,1008,356,996,340,978,307,987,279,974,258,970,235,964,222,984,211,987,192,976,179,950,174,942,151,939,128,931,118,908,99,896,93,879,86,868,97,854,120,848,137,848,147,831,159,781,163,761,163,738,166,714,167,689,173,677,172" shape="poly">
                    <area class="guneydoguanadolu" alt="Güneydoğu Anadolu" title="Güneydoğu Anadolu" href="guneydoguanadolu.php" coords="593,342,592,361,580,374,576,386,583,408,603,414,625,422,650,413,675,403,689,412,714,415,753,408,784,396,799,385,817,383,844,383,860,381,869,372,867,355,859,344,848,332,831,320,813,311,797,310,754,316,748,328,728,341,705,342,672,339,636,340,615,341" shape="poly">
                </map>
                <div class="tooltip"></div>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2025 Türkiye Yöresel Lezzetleri. Tüm hakları saklıdır.</p>
    </footer>

    <script>
        function logout() {
            <?php
            session_start();
            session_destroy();
            ?>
            window.location.href = "index.php";
        }
    </script>
</body>
</html>
