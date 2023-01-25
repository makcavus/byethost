<script>
function goBack() {
    window.history.back();
	}
</script>
<?php
include("../connect.php");
include('../form013/frm013alanlari.php');
$siteadresi=$_SERVER['SERVER_NAME'];
//$email=$_GET["EmailAdresi"];
$SQLInsert="delete from bizeulasin where(iltiid='".$_GET["ileti"]."')";
if(mysqli_query($dbh,$SQLInsert)){
echo '<br><div class="alert-info"><a href="#" class="form-control btn btn-success btn-sm"> Kayıt Silindi. Geri yönlendirileceksiniz.
<i class="fa fa-reply-all fa-lg"></i> Geri</a></div>';
echo '<meta http-equiv=refresh content="2; url=http://'.$siteadresi.'/byethost/admin/admin.php" />
<a href="http://'.$siteadresi.'/byethost/admin/admin.php" _fcksavedurl="http://'.$siteadresi.'/byethost/admin/admin.php"></a>';
}else{
	//echo mysql_error();
echo '<br><div class="alert-info">Kayıt Silinemedi !!! Geri yönlendirileceksiniz.
 <a href="#" class="form-control btn btn-warning btn-sm"><i class="fa fa-reply-all fa-lg"></i></a></div>';
echo '<meta http-equiv=refresh content="2; url=http://'.$siteadresi.'/byethost/admin/admin.php" />
<a href="http://'.$siteadresi.'/byethost/admin/admin.php" _fcksavedurl="http://'.$siteadresi.'/byethost/admin/admin.php"></a>';
}
@mysqli_close($dbh);
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>