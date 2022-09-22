<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">

<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>	
</head>

<body>
<?
include("../../connect.php");
include("../frm013alanlari.php");
include("../../fonksiyonlar.php");
//include("../../tanimlaranadizin.php");
	
$birimgelen=iconv("utf-8","iso-8859-9",$_GET['birimgir']); // get metodu ile formdan gelen ge�er al�n�yor
//$birimgelen=toUpperCase($birimgelenx);
//echo $birimgelen;
//echo $ilno;
//echo $ilgelen;
//echo $ilgelenx;
$resultbirim = @mysql_query("select * from birim where(birim_ad='$birimgelen')") ;
while($sonucum=mysql_fetch_array($resultbirim)){
$birimnom=$sonucum['birim_id'];
$birimadim=$sonucum['birim_ad'];

//echo $birimnom;
//echo $birimadim;
}

$resultgerekli = @mysql_query("select * from gerekli where(birim_idi='$birimnom')") ;
while($sonucum=mysql_fetch_array($resultgerekli)){
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

if(@mysql_query($resultgereklisil)){
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
if(@mysql_query($resultvyil)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.trsuz($silindi).' 
<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.trsuz($geridon).'</a></th></tr></thead></table></div>';

}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.trsuz($silinemedi).'</th></tr></thead></table></div>';

}
@mysql_close($dbh);
?>
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>

 </body>
</html>