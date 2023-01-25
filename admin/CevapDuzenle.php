<script>
function goBack() {
    window.history.back();
	}
</script>
<?php
include("../connect.php");
//include("../../con_023.php");
//include("tanimveyetkiler.php");
include('../form013/frm013alanlari.php');
$siteadresi=$_SERVER['SERVER_NAME'];
$cevap=$_GET['Cevap'];
if($cevap!=""){	
$SQLInsert="update bizeulasin SET cevaptarihi='".$_GET["CTarih"]."', cevap='$cevap', yayinda='".$_GET["yayin"]."' where(iltiid='".$_GET["Id"]."')";
}
if(mysqli_query($dbh,$SQLInsert)){
	 //echo mysqli_error();
 echo '<br><div class="alert-info"><a href="cevapla.php?iltiid='.$_GET["Id"].'" class="form-control btn btn-success btn-sm"> Cevabınız Değiştirildi. Teşekkür Ederiz...
 <i class="fa fa-reply-all fa-lg"></i> Geri</a></div>';
 echo '<meta http-equiv=refresh content="5; url=http://'.$siteadresi.'/byethost/admin/admin.php" />
 <a href="http://'.$siteadresi.'/byethost/admin/admin.php" _fcksavedurl="http://'.$siteadresi.'/byethost/admin/admin.php"></a>';
 }else{
 echo '<br><div class="alert-info">Cevabınız Değiştirilemedi.Tekrar deneyiniz.<a href="cevapla.php?iltiid='.$_GET["Id"].'" class="form-control btn btn-warning btn-sm">
 <i class="fa fa-reply-all fa-lg"></i> Geri</a></div>';
 echo '<meta http-equiv=refresh content="5; url=http://'.$siteadresi.'/byethost/admin/admin.php" />
 <a href="http://'.$siteadresi.'/byethost/admin/admin.php" _fcksavedurl="http://'.$siteadresi.'/byethost/admin/admin.php"></a>';
 }
 @mysqli_close($dbh);

 include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>