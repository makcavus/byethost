<script language="JavaScript" src="toplama.js" type="text/javascript"></script>	
<?php
include("../con_etf.php");
include('piramitalanlari.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$resultvyil = "delete from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')" ;
if(@mysqli_query($dbh_etf,$resultvyil)){
	echo '<div class="alert-info"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" onclick="kontrol();">Kayıt Silindi. <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
}else{
echo '<div class="alert-info"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" onclick="kontrol();">Kayıt Silinemedi. <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
}
@mysqli_close($dbh_etf);
?>
<!-- Optional JavaScript -->