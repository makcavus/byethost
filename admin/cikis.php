<?php
session_start();
include("../assets/sablon/form013/header.php");
include("../assets/sablon/form013/sidebar.php");
?>

<div class="height-100 bg-light" id="nav-placeholder">
<?php



unset($_SESSION['uye']); // oturumda olan değişkenimiz siliniyor

session_destroy(); // oturumları siler

echo '<div class="alert-info text-danger text-center mt-2"><strong>Oturum Sonlandırıldı. Tekrar Giriş Yapınız....</strong></font></label><meta http-equiv=refresh content="5; url=index.php"><a href="index.php" _fcksavedurl="index.php"></a></div>'; // index.php sayfasına yönlendiriliyorsunuz

?>
</div>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
