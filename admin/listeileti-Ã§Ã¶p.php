<?

session_start();

if(!isset($_SESSION["uye"])){

echo "";//"Bu sayfayï¿½ gï¿½rï¿½ntï¿½leme yetkiniz yoktur.";

}else{



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">

</head>
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>

<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>

<script language="JavaScript" src="arkakara.js" type="text/javascript">
</script>

<script type="text/JavaScript">
<!--
function reloadPage(id) {    document.location.href = location.href + '?id=' + id.value; } 
</script>
<script type="text/JavaScript">
<!--
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}
//   -->
//<body onload="JavaScript:timedRefresh(100000);">
</script>




<body>

<?php

function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
//include('../frm013alanlari.php');



//mysql baglantisi
include("con_023.php");
include("con_birim.php");
//echo $_SESSION["uye"];
$kim=$_SESSION["uye"];
$resultx = @mysql_query("select uyekod from uyeler where(uyekim='$kim') order by uyekod asc");
while($xkod=mysql_fetch_array($resultx)) {
$hamkod=$xkod['uyekod'];
$kod=substr($xkod['uyekod'],0,5);
$kodiki=substr($xkod['uyekod'],0,2);

//echo $kod;
$iptal="İptal";

} 
if(substr($hamkod,-3,3)==$bakanlikyetki or $ilyetki or $kurumyetki){
$resultuser = @mysql_query("select * from bizeulasin order by tarih desc");
}
$say=0;

$iletisayisi=mysql_num_rows($resultuser);
if($iletisayisi==0){
$tamam="Tamam";
echo '<div class="alert alert-primary text-danger">Gönderilmiş ileti yoktur.</div>';
echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$tamam.'</a>';

}else{
$iptal="İptal";
echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';

echo'<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">';
echo '<thead class="thead-dark" align="center">';
echo '<tr>';

$tarih='Tarih:';

$adi='Gönderenin Adı Soyadı:';

$telefon="Telefonu:";

$email="E-mail Adresi:";

$ileti="İletisi:";

$vercevap="Verilen Cevap:";

$mailto="mailto:";

$ctarihi="Cevap Tarihi:";
echo '<th>'.trsuz($tarih).'</th>';

echo '<th>'.$adi.'</th>';

echo '<th>'.trsuz($telefon).'</th>';

echo '<th>'.trsuz($email).'</th>';

echo '<th>'.$ileti.'</th>';

echo '<th>'.trsuz($ctarihi).'</th>';

echo '<th>'.trsuz($vercevap).'</th>';

//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16" align="center"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.$sifre.'</font></td>';
echo '<th colspan="3">'.trsuz("Ä°ÅŸlem:").'</th>';

echo '</tr>';  

echo '</thead>';  


while($rowuser=mysql_fetch_array($resultuser)) {$say++;

$viletiid=$rowuser['iltiid'];

$vtarih=$rowuser['tarih'];

$itarihorg=substr($vtarih,0,10);
$iyil=substr($itarihorg,0,4);
$iay=substr($itarihorg,5,2);
$igun=substr($itarihorg,8,2);
$vtarihn=$igun.'.'.$iay.'.'.$iyil;

$vadi=$rowuser['adsoyad'];

$vtelefon=$rowuser['telefon'];

$vemail=$rowuser['emailadresi'];

$vileti=$rowuser['dusunceniz'];

$vctarih=$rowuser['cevaptarihi'];

$tarihorg=substr($vctarih,0,10);
$yil=substr($tarihorg,0,4);
$ay=substr($tarihorg,5,2);
$gun=substr($tarihorg,8,2);
$vctarihn=$gun.'.'.$ay.'.'.$yil;

$vcevap=$rowuser['cevap'];

echo '<tbody>';

echo '<tr>';

echo '<td class="align-middle"><h6>'.$vtarihn.'</h6></td>';

echo '<td class="align-middle"><h6>'.$vadi.'</h6></td>';

echo '<td class="align-middle"><h6>'.$vtelefon.'</h6></td>';

echo '<td class="align-middle"><h6>'.$vemail.'</h6></td>';

echo '<td class="align-middle"><h6>'.$vileti.'</h6></td>';

echo '<td class="align-middle"><h6>'.$vctarihn.'</h6></td>';

echo '<td class="align-middle"><h6>'.$vcevap.'</h6></td>';

if($vcevap!=""){
echo '<td class="align-middle"><img src="images/ok.jpg"></td>';
}else{
echo '<td class="align-middle"><img src="images/soru.jpg"></td>';
}

//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.$pass.'</font></td>';
echo '<td class="align-middle"><h6><a href="onayileti.php?iltiid='.$viletiid.'" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">'.trsuz("Sil").'</a></h6></td>';

?>
<td class="align-middle"><h6><a href="cevapla.php?iltiid=<?php echo $viletiid ; ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ileticevap">Cevapla</a></h6></td>
<?php

echo '</tr>';
echo '</tbody>';

}

echo '</table>';
$iptal="İptal";
echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';

}
}
?>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="iletisilLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="iletisilLabel text-danger"><?php $silonay="Kayıt Silme Onayı"; echo $silonay; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <?php 

//echo $ileti;
$ileticonnect= mysql_query("select * from bizeulasin where(iltiid='$viletiid')");
while($donguileti=mysql_fetch_array($ileticonnect)){
$silinecekid=$donguileti["iltiid"];
$silinecektarih=$donguileti["tarih"];
$itarihorg=substr($silinecektarih,0,10);
$iyil=substr($itarihorg,0,4);
$iay=substr($itarihorg,5,2);
$igun=substr($itarihorg,8,2);
$silinecektarihn=$igun.'.'.$iay.'.'.$iyil;
$silinecekad=$donguileti["adsoyad"];
$silinecekileti=$donguileti["dusunceniz"];
$silinecekctarih=$donguileti["cevaptarihi"];
$tarihorg=substr($silinecekctarih,0,10);
$yil=substr($tarihorg,0,4);
$ay=substr($tarihorg,5,2);
$gun=substr($tarihorg,8,2);
$silinecekctarihn=$gun.'.'.$ay.'.'.$yil;
$silinecekcevap=$donguileti["cevap"];
//echo $silinecekid;

$tarih='Tarih:';

$adi='GÃ¶nderenin AdÄ± SoyadÄ±:';

$telefon="Telefonu:";

$email="E-mail Adresi:";

$iletisi="Ä°letisi:";

$vtarih='Cevap Tarihi:';

$vercevap="Verilen Cevap:";

$mailto="mailto:";

$ctarihi="Cevap Tarihi:";


echo'<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">';
echo '<thead class="thead-dark" align="center">';
echo '<tr>';
echo '<th class="align-middle">'.trsuz($tarih).'</th>';

echo '<th class="align-middle">'.trsuz($adi).'</th>';

echo '<th class="align-middle">'.trsuz($iletisi).'</th>';

echo '<th class="align-middle">'.trsuz($vtarih).'</th>';

echo '<th class="align-middle">'.trsuz($vercevap).'</th>';

echo '</tr>';

echo '</thead>';

echo '<tbody>';

echo '<tr>';

echo '<td class="align-middle">'.$silinecektarihn.'</td>';

echo '<td class="align-middle">'.$silinecekad.'</td>';

echo '<td class="align-middle">'.$silinecekileti.'</td>';

echo '<td class="align-middle">'.$silinecekctarihn.'</td>';

echo '<td class="align-middle">'.$silinecekcevap.'</td>';

//echo '<th bordercolor="black" border="1" bgcolor="yellow" colspan="6" align="center"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.$silinecek.'</font></th>';

//echo '<th bordercolor="black" border="1" bgcolor="yellow" colspan="6" align="center"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.$silinecek.'</font></th>';

echo '</tr>';


echo $_GET["CTarih"];
echo $_GET["Cevap"];

echo '<tr>';

echo '<td colspan="5">';

$silemin="Bu Kaydı Silmek İstediğinize Emin misiniz?";
echo '<span class="text-danger" align="center"><h5 align="center">'.$silemin.'</h5></span>';


echo '</tbody></td></tr></table>';
?>
<a class="btn btn-success btn-sm text-dark mr-5" data-dismiss="modal"><i class="fa fa-reply-all fa-lg"></i> <?php echo $iptal;?></a>
<?php
$evet="Evet";
echo '<a href="#" tabindex="2" title="evet" onclick="iletisilonay();" class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> '.$evet.'</a>';
?>
</div>
<div id="sonuciletisil"></div>
      </div>
      
    </div>
  </div>
</div>
<?php
}
?>
	  
<?php
$mailto="mailto:";
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
$gelenid=$_GET["iltiid"];
//echo $gelenid;
//echo "xxxxxxxxxxxxxxxxxx";
include("con_birim.php");

$resultuser = @mysql_query("select * from bizeulasin where(iltiid='$viletiid')");

while($rowuser=mysql_fetch_array($resultuser)) {

$viletiid=$rowuser['iltiid'];

$vtarih=$rowuser['tarih'];

$vadi=$rowuser['adsoyad'];

$vtelefon=$rowuser['telefon'];

$vemail=$rowuser['emailadresi'];

$vileti=$rowuser['dusunceniz'];

$vctarih=$rowuser['cevaptarihi'];

$vcevap=$rowuser['cevap'];
?>	  
<form action="CevapKayit.php" name="Cevap" id="Cevap" method="GET">

<div class="modal fade" id="ileticevap" tabindex="-1" role="dialog" aria-labelledby="ileticevapLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php $labelulas="için Cevap Yazma"; echo $vadi.' '.$labelulas; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<div class="form-group">
<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">
<thead class="thead-dark" align="center">
<tbody>
<tr>
<th colspan="1"><?php $labelad="Adı Soyadı:"; echo $labelad; ?></th>
 <td colspan="1">
 <input name="Id" type="hidden" id="Id" value="<?php echo $viletiid; ?>" class="form-control form-control-sm w-100 sm">
 <input name="Tarih" type="hidden" id="Tarih" value="<?php echo $vtarih; ?>" class="form-control form-control-sm w-100">
 <input name="AdSoyad" type="text" id="AdSoyad" tabindex="1" disabled="disabled" value="<?php echo $vadi; ?>" class="form-control form-control-sm w-100"></td>
 </tr>
 <tr>
 <th>Telefonu:</th>
 <td><input name="Telefon" type="text" id="Telefon" tabindex="2" disabled="disabled" value="<?php echo $vtelefon; ?>" class="form-control form-control-sm w-100"></td>
 </tr>
 <tr>
 <th>E-mail Adresi:</th>
 <td><input name="EmailAdresi" type="text" id="EmailAdresi" tabindex="3" disabled="disabled" value="<?php echo $vemail; ?>" class="form-control form-control-sm w-100"></td>
 </tr>
 <tr>
 <th><?php $inputdusunce="Gelen İletisi:"; echo $inputdusunce; ?></th>
 <td><textarea name="Dusunceniz" rows="4" id="Dusunceniz" tabindex="4" disabled="disabled" class="form-control w-100"><?php echo $vileti; ?></textarea></td>
 </tr>
 <tr>
 <th>Cevap:</th>
 <td>
 <input name="CTarih" type="hidden" id="CTarih" value="<?php $tarih=date("Y-m-d"); echo $tarih; ?>" class="form-control w-100">
 <textarea name="Cevap" rows="4" id="Cevap" tabindex="1" class="form-control w-100" required><?php echo $vcevap; ?></textarea>
 </td>
 </tr>
 
 </thead>
 </tbody>
 </table>
 


    </form>      
      </div>
      <div class="modal-footer">
	  <a href="<?php echo $mailto.''.$vemail; ?>" onclick="emailileti();" class="btn btn-secondary btn-sm mr-1"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i> Email Gönder</a>
	  <a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm btn-close" data-dismiss="modal"><i class="fa fa-times-circle fa-lg"></i> İptal</a>
      <a href="#" onclick="kayitileti();" class="btn btn-primary btn-sm ml-1"><i class="fa fa-check fa-lg"></i> Cevabı Ekle</a>  
       	  	
      </div>
	  <div id="sonuciletikay"></div>
    </div>
  </div>
</div>	
 <?php
}
?>

<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>
</body>

</html>

