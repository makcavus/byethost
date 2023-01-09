<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>	
<?php
include("../connect.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
//include("../../tanimlaranadizin.php");
$birimgelen=$_GET['birimgir']; // get metodu ile formdan gelen ge�er al�n�yor
//$birimgelen=toUpperCase($birimgelenx);
//echo $birimgelen;
//echo $ilno;
//echo $ilgelen;
//echo $ilgelenx;
$resultbirim = @mysqli_query($dbh,"select * from birim where(birim_ad='$birimgelen')") ;
while($sonucum=mysqli_fetch_array($resultbirim)){
$birimnom=$sonucum['birim_id'];
$birimadim=$sonucum['birim_ad'];

//echo $birimnom;
//echo $birimadim;
}

$resultgerekli = @mysqli_query($dbh,"select * from gerekli where(birim_idi='$birimnom')") ;
while($sonucum=mysqli_fetch_array($resultgerekli)){
$gereklinom=$sonucum['birim_idi'];
$dosya=$sonucum['dosya_adi'];
$resim=$sonucum['resim_adi'];
/*
echo $gereklinom;
echo $dosya;
echo $resim;
*/
//echo $ilgelen;
//echo $ilgelenx;
//exit;
$dosya=$sonucum['dosya_adi'];

if(file_exists($dosya))
{
    unlink($dosya);
    //echo $dosya ,"silindi";
}else{
    //echo "bu isimde bir dosya yok:".$dosya;
}


$resim=$sonucum['resim_adi'];

if(file_exists($resim))
{
    unlink($resim);
    //echo $resim ,"silindi";
}else{
    //echo "bu isimde bir dosya yok:".$resim;
}

//echo $gereklinom;
$resultgereklisil = "delete from gerekli where(birim_idi='$gereklinom')" ;

if(@mysqli_query($dbh,$resultgereklisil)){
/*echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silindi.' 
<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></tr></thead></table></div>';
*/
}else{
/*
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silinemedi.'</th></tr></thead></table></div>';
*/
}

}
//exit;
$resultvyil = "delete from birim where(birim_ad='$birimgelen')" ;
if(@mysqli_query($dbh,$resultvyil)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silindi.' 
<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></tr></thead></table></div>';

}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silinemedi.'</th></tr></thead></table></div>';

}
@mysqli_close($dbh);
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
