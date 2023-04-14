<?php
include("../con_etf.php");
include('piramitalanlari.php');
$yilsil=$_GET['yeniyil'];
$resultvyil= @mysqli_query($dbh_etf,"select * from yil where(YIL='$yilsil')");
while($yilsonucum=mysqli_fetch_array($resultvyil)){
$yiladi=$yilsonucum['YIL'];
}
$say=mysqli_num_rows($resultvyil);
//echo $say;
if($say>0){
$resultvyil = "delete from yil where(YIL='$yilsil')" ;
if(@mysqli_query($dbh_etf,$resultvyil)){
	echo '<div class="alert-light"><button type="button" class="btn btn-primary btn-sm mt-3 mb-2" data-dismiss="modal" onclick="yilkontrol();">Kayıt Silindi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
}else{
echo '<div class="alert-light"><button type="button" class="btn btn-danger btn-sm mt-3 mb-2" data-dismiss="modal" onclick="yilkontrol();">Kayıt Silinemedi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
}
}else{
echo '<div class="alert-light"><button type="button" class="btn btn-danger btn-sm mt-3 mb-2" data-dismiss="modal" onclick="yilkontrol();">Kayıt Silinemedi... Bu kayıt Mevcut Değil <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
}
@mysqli_close($dbh_etf);
?>
