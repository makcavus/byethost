
<?php
$yeniyil=$_GET['yeniyil'];
include('../con_etf.php');
include('piramitalanlari.php');
$yeniyil=$_GET['yeniyil'];
//echo $yeniyil;
$resultvyil= @mysqli_query($dbh_etf,"select * from yil where(YIL='$yeniyil')");
$say=mysqli_num_rows($resultvyil);
//echo $say;
if($say<1){
$kayit="INSERT INTO yil(YIL) VALUES('$yeniyil')";
	if(mysqli_query($dbh_etf,$kayit)){
		echo '<div class="alert-light"><button type="button" class="btn btn-primary btn-sm mt-3 mb-2" data-dismiss="modal" onclick="yilkontrol();">Kayıt Eklendi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
		}else{
		echo '<div class="alert-light"><button type="button" class="btn btn-danger btn-sm mt-3 mb-2" data-dismiss="modal" onclick="yilkontrol();">Kayıt Eklenemedi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
		}
}else{
	echo '<div class="alert-light"><button type="button" class="btn btn-danger btn-sm mt-3 mb-2" data-dismiss="modal" onclick="yilkontrol();">Kayıt Eklenemedi... Bu kayıt Mevcut <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
		}

	@mysqli_close($dbh_etf);
	 ?>