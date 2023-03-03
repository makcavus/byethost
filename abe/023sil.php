<?php
include("../con_abe.php");
include('abealanlari.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$resultvyil = "delete from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')" ;
if(@mysqli_query($dbhabe,$resultvyil)){
	echo '<div class="alert-info"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" onclick="kontrol();">Kayıt Silindi. <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
	}else{
	echo '<div class="alert-info"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" onclick="kontrol();">Kayıt Silinemedi. <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
	}
	@mysqli_close($dbhabe);
	?>
	<!-- Optional JavaScript -->