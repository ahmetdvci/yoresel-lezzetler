<?php
session_start();
session_unset(); // Tüm oturum değişkenlerini kaldır
session_destroy(); // Oturumu sonlandır
header("Location: index.php"); // Ana sayfaya yönlendir
exit;
?>
