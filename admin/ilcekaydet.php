<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kay�t De�i�tirildi</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css"></head>

</head>

<body>
<?
$ilceok="İlçesi Kaydedildi...";
$ilceno="İlçe Kaydedilemedi...";
include("../../con_023.php");
include("../frm013alanlari.php");
include("../../fonksiyonlar.php");
include("../../tanimlaranadizin.php");
/*
function toUpperCase( $input ){	
return strtoupper( strtr( $input,'����i��', '���I���') );
}
function ucwords_tr($deger)
         {
         $deger = split(" ",trim($deger));
         $deger_tr = ""; 

         for($x=0; $x < count($deger); $x++)
             {
             $deger_bas = substr($deger[$x],0,1);
             $deger_son = substr($deger[$x],1);
             $deger_bas = toUpperCase($deger_bas); 

             $deger_tr .= $deger_bas.$deger_son." ";
             } 

         $deger_tr = trim($deger_tr); 

         return $deger_tr;
         } 

function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
*/
$ilsecgelen=$_GET['selectilno']; // get metodu ile formdan gelen ge�er al�n�yor
$ilcegelen=$_GET['ilcegir']; // get metodu ile formdan gelen ge�er al�n�yor
$ilcegelen=replace_tr($ilcegelen);
$ilcegelenvt=iconv("utf-8","iso-8859-9",$ilcegelen);


//echo $ilsecgelenx;
//echo $ilsecgeleny;

//echo $ilgelenz;
//echo $ilsecgelen;
//echo $ilcegelen;
//echo $kilgelen;
//echo $kilcegelen;
//echo $kurumgelen;
//echo $asmgelen;
//echo $drgelen;
//echo $asegelen;
//echo $aseungelen;






$ilcesec="select * from ilce where(ilinad='$ilsecgelen' and ilcead='$ilcegelenvt')";
$socsorgu1=mysql_query($ilcesec);
$say1=mysql_num_rows($socsorgu1);
//echo $say1;
if($say1<1 AND $ilcegelen !=""){
$kayit="INSERT INTO ilce(ilinad,ilcead) VALUES ('$ilsecgelen','$ilcegelenvt')";
if(mysql_query($kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Durum</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light">'.$ilcegelen.' '.trsuz($ilceok).' <a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 '.$geridon.'</a></th></tr></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-info">'.$ilceno.'<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 '.$geridon.'</a></th></thead></table></div>';
}
}
while($sonucum1=mysql_fetch_array($socsorgu1)){
$ilceno=$sonucum1['ilceid'];
$ilinadi=$sonucum1['ilinad'];
$ilceadi=$sonucum1['ilcead'];

 // ekrana md5 kodu yazd�r�l�yor
//print("<b>Girilen �l : </b> ".$ilno."<br>".$iladi);				
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