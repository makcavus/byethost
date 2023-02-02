<?php
session_start();
unset($_SESSION['uye']); // oturumda olan değişkenimiz siliniyor
session_destroy(); // oturumları siler
echo "<script>location.href='index.php';</script>"; // index.php sayfasına yönlendiriliyorsunuz
?>