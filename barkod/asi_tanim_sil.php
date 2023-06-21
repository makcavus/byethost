<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>
	<script>
function ysYonlendir(ID, adres, saniye) {
  if (saniye == 0) {
    window.location.href = adres;
    return;
  }
  document.getElementById(ID).innerHTML = saniye + " saniye sonra yönlendiriliyorsunuz.";
  saniye--;
  setTimeout(function() {
    ysYonlendir(ID, adres, saniye);
  }, 1000);
}
</script>
<?php
include("../con_barkod.php");
$id=$_GET['id']; 
echo $id;
exit;
$resultvyil = "delete from asi_tanim where(id='$id')" ;
if(@mysqli_query($dbh_barkod,$resultvyil)){
echo '<div class="alert-info"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" onclick="asitanimekleme();">Kayıt Silindi. <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
}else{
echo '<div class="alert-info"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" onclick="asitanimekleme();">Kayıt Silinemedi. <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
}
@mysqli_close($dbh_barkod);
?>
<!-- Optional JavaScript -->
