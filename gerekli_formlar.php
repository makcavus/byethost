<?

//include('form013/frm013alanlari.php');
//include("index.php");
$tum_birim_adim='TÜM BİRİMLERE AİT FORM/DÖKÜMANLAR';
$icerigi='İçeriği:';
$dosyaadi='Dosya Adı:';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../bootstrap-4/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap-4/font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="iletikaydet.js">
</script>
  <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<!--
<style type="text/css">
.renk {font:Arial, Helvetica, sans-serif; font:normal; border:#000000;font-size:11pt;font-weight:bold;padding:0 0px;text-align:left;cursor:default;font-family:trebuchet ms;}
.renk1 {background:#CCFFCC; font:Arial, Helvetica, sans-serif; font:normal; border:#000000;font-size:11pt;color: #000066;font-weight:bold;padding:0 0px;text-align:left;cursor:default;font-family:trebuchet ms;}
</style>-->
</head>
<body style="background-color: black">
<?php
	function ext($file)
{
    $ext = pathinfo($file);
    return $ext['extension'];
}
 
//$dosya_adi = 'resim.jpg';
 
//echo ext($dosya_adi);
 
/*
Çıktı:
jpg
*/
include('altlink.php');
include('connect.php');
//$sayfa=$_SERVER['PHP_SELF'];

if($_GET['birim_idi']==0 || !is_numeric($_GET['birim_idi']) || $_GET['birim_idi']<0)

{
?>
<?php
$yaziid=$_GET['birim_idi'];
$birimsorgu="select distinct * from birim";
$basla=mysql_query($birimsorgu);
while($sonucum=mysql_fetch_array($basla)){
$birim_idim=$sonucum['birim_id'];
$birim_adim=$sonucum['birim_ad'];
?>

<table class="table table-sm table-responsive-sm table-bordered" style="background-color: black">
<thead style="background-color: #ccffcc" align="center">
<tr>
<th width="100%" class="text-warning" style="background-color: black;font-weight:bold; border-color:#ccffcc;" align="center" colspan="3"><?php echo $tum_birim_adim; ?></th>
</tr>
<tr>
<th width="12%" class="bg-warning text-dark text-center" style="border-color:black;">Yükleme Tarihi</th>
<th width="44%" class="bg-warning text-dark text-left" style="border-color:black;">&nbsp;&nbsp;<?php echo $icerigi ;?></th>
<th width="44%" class="bg-warning text-dark text-left" style="border-color:black;">&nbsp;&nbsp;<?php echo $dosyaadi ;?></th>

</tr>
</thead>
<tbody>
<?php
$kackayit=15; //Kaç kaydın listeleneceği.
$sayfa_goster = 11; // gösterilecek sayfa sayısı
 
$en_az_orta = ceil($sayfa_goster/2);
$en_fazla_orta = ($toplam_sayfa+1) - $en_az_orta;
 
$sayfa_orta = $sayfa;
if($sayfa_orta < $en_az_orta) $sayfa_orta = $en_az_orta;
if($sayfa_orta > $en_fazla_orta) $sayfa_orta = $en_fazla_orta;
 
$sol_sayfalar = round($sayfa_orta - (($sayfa_goster-1) / 2));
$sag_sayfalar = round((($sayfa_goster-1) / 2) + $sayfa_orta); 
 
if($sol_sayfalar < 1) $sol_sayfalar = 1;
if($sag_sayfalar > $toplam_sayfa) $sag_sayfalar = $toplam_sayfa;

$sorgu = mysql_query('SELECT COUNT(*) AS toplam FROM gerekli');
$sonuc = mysql_fetch_assoc($sorgu);
$toplam_icerik = $sonuc['toplam'];
 
$toplam_sayfa = ceil($toplam_icerik / $kackayit);
 
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
 
if($sayfa < 1) $sayfa = 1; 
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
 
$limit = ($sayfa - 1) * $kackayit;
//echo $yaziid;
$formsorgu="select * from gerekli order by birim_idi,icerik asc LIMIT $limit,$kackayit";
$basla=mysql_query($formsorgu);
while($sonucum=mysql_fetch_array($basla)){
$form_idim=$sonucum['gerekli_id'];
$form_adim=$sonucum['birim_idi'];
$form_icerik=$sonucum['icerik'];
$form_dosyaad=$sonucum['dosya_adi'];
$form_dosyaadyolsuz=substr($sonucum['dosya_adi'],8);
$form_dosyatar=$sonucum['dosya_tarihi'];
$form_resim=$sonucum['resim_adi'];
$date = new DateTime();
$bugun=$date->format('d.m.Y');
$oncekihafta=date("d.m.Y",strtotime("-0 day",strtotime($bugun)));
$oncekihafta1=date("d.m.Y",strtotime("-1 day",strtotime($bugun)));
$oncekihafta2=date("d.m.Y",strtotime("-2 day",strtotime($bugun)));
$oncekihafta3=date("d.m.Y",strtotime("-3 day",strtotime($bugun)));
$oncekihafta4=date("d.m.Y",strtotime("-4 day",strtotime($bugun)));
$oncekihafta5=date("d.m.Y",strtotime("-5 day",strtotime($bugun)));
$oncekihafta6=date("d.m.Y",strtotime("-6 day",strtotime($bugun)));

if($form_dosyatar!=$oncekihafta and $form_dosyatar!=$oncekihafta1 and $form_dosyatar!=$oncekihafta2 and $form_dosyatar!=$oncekihafta3 and $form_dosyatar!=$oncekihafta4 and $form_dosyatar!=$oncekihafta5 and $form_dosyatar!=$oncekihafta6){
$yeni="";
}else{
$yeni='<i class="fa fa-lg fa-hacker-news" aria-hidden="true"></i>';
} 
if(ext($form_dosyaadyolsuz)=="xls" or ext($form_dosyaadyolsuz)=="xlsx"){
	$icon='<i class="fa fa-file-excel-o" aria-hidden="true"></i>';
}else if(ext($form_dosyaadyolsuz)=="doc" or ext($form_dosyaadyolsuz)=="docx"){
	$icon='<i class="fa fa-file-word-o" aria-hidden="true"></i>';
}else if(ext($form_dosyaadyolsuz)=="jpeg" or ext($form_dosyaadyolsuz)=="png"){
	$icon='<i class="fa fa-file-image-o" aria-hidden="true"></i>';
}
else if(ext($form_dosyaadyolsuz)=="ppt" or ext($form_dosyaadyolsuz)=="pptx"){
	$icon='<i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>';
}else if(ext($form_dosyaadyolsuz)=="zip" or ext($form_dosyaadyolsuz)=="rar"){
	$icon='<i class="fa fa-file-archive-o" aria-hidden="true"></i>';
}else if(ext($form_dosyaadyolsuz)=="pdf"){
	$icon='<i class="fa fa-file-pdf-o" aria-hidden="true"></i>';
}else if(ext($form_dosyaadyolsuz)=="mp3" or ext($form_dosyaadyolsuz)=="mp4" or ext($form_dosyaadyolsuz)=="avi" or ext($form_dosyaadyolsuz)=="mpg"){
	$icon='<i class="fa fa-file-video-o" aria-hidden="true"></i>';
}else{
	$icon='<i class="fa fa-file-text-o" aria-hidden="true"></i>';
}


//echo $form_icerik;

?>
<tr bgcolor="#CCFFCC" onMouseover="this.bgColor='#dcdcdc';" onMouseout="this.bgColor='#CCFFCC';">
<td width="12%" style="border-color:black;" class="text-center"><?php echo '<a href="form013/admin/'.$form_dosyaad.'" style="display:block; text-decoration:none;"><font color="red" style="font-weight:bold"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;'.$form_dosyatar.'</font></a>'; ?></td>
<td width="44%" style="border-color:black;"><?php echo '<a href="form013/admin/'.$form_dosyaad.'" style="display:block; text-decoration:none;"><font color="black" style="font-weight:bold">&nbsp;&nbsp;'.$form_icerik.'</font> '.$yeni.'</a>'; ?></td>
<td width="44%" style="border-color:black;"><?php echo '<a href="form013/admin/'.$form_dosyaad.'" style="display:block; text-decoration:none;"><font color="blue" style="font-weight:bold">'.$icon.'&nbsp;&nbsp;'.$form_dosyaadyolsuz.'</font></a>'; ?></td>

</tr>
<?php
}

?>
</tbody>
</table>
<table class="table table-sm table-responsive-sm table-bordered" style="background-color: black">
<thead style="background-color: #ccffcc" align="center">
<th>
<?php
if($toplam_sayfa>1){
echo '<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center mt-3">';
  
  if($sayfa != 1 and $toplam_sayfa>$sayfa_goster)
    echo '<li class="page-item"><a class="page-link" href="?sayfa=1">İlk</a></li>';
	if($sayfa != 1 and $toplam_sayfa>$sayfa_goster)
	 echo '<li class="page-item"><a class="page-link" href="?sayfa='.($sayfa-1).'">Önceki</a></li>';
for($s = 1; $s <= $toplam_sayfa; $s++) {
   if($sayfa == $s) { // eğer bulunduğumuz sayfa ise link yapma.
      echo '<li class="page-item disabled"><a class="page-link bg-warning" href="#">' . $s . '</a></li>'; 
   } else {
      echo '<li class="page-item"><a class="page-link bg-light" href="?sayfa=' . $s . '">' . $s . '</a></li> ';
   }
}
if($sayfa != $toplam_sayfa and $toplam_sayfa>$sayfa_goster)
echo '<li class="page-item"><a class="page-link" href="?sayfa='.($sayfa+1).'">Sonraki</a></li>';
if($sayfa != $toplam_sayfa and $toplam_sayfa>$sayfa_goster)
echo '<li class="page-item"><a class="page-link" href="?sayfa='.$toplam_sayfa.'">Son</a></li>';
	}
	echo '</ul>';
	echo '</nav>';	
?>
</th>
</thead>
</table>
<?php
}

header("birimler.php");

}else{

$yaziid=$_GET['birim_idi'];
$birimsorgu="select distinct * from birim  where(birim_id='$yaziid')";
$basla=mysql_query($birimsorgu);
while($sonucum=mysql_fetch_array($basla)){
$birim_idim=$sonucum['birim_id'];
$birim_adim=$sonucum['birim_ad'];
?>

<table class="table table-sm table-responsive-sm table-bordered" style="background-color: black">
<thead style="background-color: #ccffcc" align="center">
<tr>
<th width="100%" class="text-warning" style="background-color: black;font-weight:bold; border-color:#ccffcc;" align="center" colspan="3"><?php echo $birim_adim; ?></th>
</tr>
<tr>
<th width="12%" class="bg-warning text-dark text-center" style="border-color:black;">Yükleme Tarihi</th>
<th width="44%" class="bg-warning text-dark text-left" style="border-color:black;">&nbsp;&nbsp;<?php echo $icerigi ;?></th>
<th width="44%" class="bg-warning text-dark text-left" style="border-color:black;">&nbsp;&nbsp;<?php echo $dosyaadi ;?></th>

</tr>
</thead>
<tbody>
<?php
$kackayit=15; //Kaç kaydın listeleneceği.
$sayfa_goster = 11; // gösterilecek sayfa sayısı
 
$en_az_orta = ceil($sayfa_goster/2);
$en_fazla_orta = ($toplam_sayfa+1) - $en_az_orta;
 
$sayfa_orta = $sayfa;
if($sayfa_orta < $en_az_orta) $sayfa_orta = $en_az_orta;
if($sayfa_orta > $en_fazla_orta) $sayfa_orta = $en_fazla_orta;
 
$sol_sayfalar = round($sayfa_orta - (($sayfa_goster-1) / 2));
$sag_sayfalar = round((($sayfa_goster-1) / 2) + $sayfa_orta); 
 
if($sol_sayfalar < 1) $sol_sayfalar = 1;
if($sag_sayfalar > $toplam_sayfa) $sag_sayfalar = $toplam_sayfa;

$sorgu = mysql_query("SELECT COUNT(*) AS toplam FROM gerekli where(birim_idi='$yaziid')");
$sonuc = mysql_fetch_assoc($sorgu);
$toplam_icerik = $sonuc['toplam'];
 
$toplam_sayfa = ceil($toplam_icerik / $kackayit);
 
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
 
if($sayfa < 1) $sayfa = 1; 
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
 
$limit = ($sayfa - 1) * $kackayit;
//echo $yaziid;
$formsorgu="select * from gerekli where(birim_idi='$yaziid') order by icerik asc LIMIT $limit,$kackayit";
$basla=mysql_query($formsorgu);
while($sonucum=mysql_fetch_array($basla)){
$form_idim=$sonucum['gerekli_id'];
$form_adim=$sonucum['birim_idi'];
$form_icerik=$sonucum['icerik'];
$form_dosyaad=$sonucum['dosya_adi'];
$form_dosyaadyolsuz=substr($sonucum['dosya_adi'],8);
$form_dosyatar=$sonucum['dosya_tarihi'];
$form_resim=$sonucum['resim_adi'];
$date = new DateTime();
$bugun=$date->format('d.m.Y');
$oncekihafta=date("d.m.Y",strtotime("-0 day",strtotime($bugun)));
$oncekihafta1=date("d.m.Y",strtotime("-1 day",strtotime($bugun)));
$oncekihafta2=date("d.m.Y",strtotime("-2 day",strtotime($bugun)));
$oncekihafta3=date("d.m.Y",strtotime("-3 day",strtotime($bugun)));
$oncekihafta4=date("d.m.Y",strtotime("-4 day",strtotime($bugun)));
$oncekihafta5=date("d.m.Y",strtotime("-5 day",strtotime($bugun)));
$oncekihafta6=date("d.m.Y",strtotime("-6 day",strtotime($bugun)));

if($form_dosyatar!=$oncekihafta and $form_dosyatar!=$oncekihafta1 and $form_dosyatar!=$oncekihafta2 and $form_dosyatar!=$oncekihafta3 and $form_dosyatar!=$oncekihafta4 and $form_dosyatar!=$oncekihafta5 and $form_dosyatar!=$oncekihafta6){
$yeni="";
}else{
$yeni='<i class="fa fa-lg fa-hacker-news" aria-hidden="true"></i>';
} 
if(ext($form_dosyaadyolsuz)=="xls" or ext($form_dosyaadyolsuz)=="xlsx"){
	$icon='<i class="fa fa-file-excel-o" aria-hidden="true"></i>';
}else if(ext($form_dosyaadyolsuz)=="doc" or ext($form_dosyaadyolsuz)=="docx"){
	$icon='<i class="fa fa-file-word-o" aria-hidden="true"></i>';
}else if(ext($form_dosyaadyolsuz)=="jpeg" or ext($form_dosyaadyolsuz)=="png"){
	$icon='<i class="fa fa-file-image-o" aria-hidden="true"></i>';
}
else if(ext($form_dosyaadyolsuz)=="ppt" or ext($form_dosyaadyolsuz)=="pptx"){
	$icon='<i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>';
}else if(ext($form_dosyaadyolsuz)=="zip" or ext($form_dosyaadyolsuz)=="rar"){
	$icon='<i class="fa fa-file-archive-o" aria-hidden="true"></i>';
}else if(ext($form_dosyaadyolsuz)=="pdf"){
	$icon='<i class="fa fa-file-pdf-o" aria-hidden="true"></i>';
}else if(ext($form_dosyaadyolsuz)=="mp3" or ext($form_dosyaadyolsuz)=="mp4" or ext($form_dosyaadyolsuz)=="avi" or ext($form_dosyaadyolsuz)=="mpg"){
	$icon='<i class="fa fa-file-video-o" aria-hidden="true"></i>';
}else{
	$icon='<i class="fa fa-file-text-o" aria-hidden="true"></i>';
}
//echo $form_icerik;

?>
<tr bgcolor="#CCFFCC" onMouseover="this.bgColor='#dcdcdc';" onMouseout="this.bgColor='#CCFFCC';">
<td width="12%" style="border-color:black;" class="text-center"><?php echo '<a href="form013/admin/'.$form_dosyaad.'" style="display:block; text-decoration:none;"><font color="red" style="font-weight:bold"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;'.$form_dosyatar.'</font></a>'; ?></td>
<td width="44%" style="border-color:black;"><?php echo '<a href="form013/admin/'.$form_dosyaad.'" style="display:block; text-decoration:none;"><font color="black" style="font-weight:bold">&nbsp;&nbsp;'.$form_icerik.'</font> '.$yeni.'</a>'; ?></td>
<td width="12%" style="border-color:black;"><?php echo '<a href="form013/admin/'.$form_dosyaad.'" style="display:block; text-decoration:none;"><font color="blue" style="font-weight:bold">'.$icon.'&nbsp;&nbsp;'.$form_dosyaadyolsuz.'</font></a>'; ?></td>

</tr>
<?php
}
}
?>
	</tbody>
</table>
<table class="table table-sm table-responsive-sm table-bordered" style="background-color: black">
<thead style="background-color: #ccffcc" align="center">
<th>
<?php
if($toplam_sayfa>1){
echo '<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center mt-3">';
  if($sayfa != 1 and $toplam_sayfa>$sayfa_goster)
    echo '<li class="page-item"><a class="page-link" href="?birim_idi='.$yaziid.'&sayfa=1">İlk</a></li>';
	if($sayfa != 1 and $toplam_sayfa>$sayfa_goster)
	 echo '<li class="page-item"><a class="page-link" href="?birim_idi='.$yaziid.'&sayfa='.($sayfa-1).'">Önceki</a></li>';
for($s = 1; $s <= $toplam_sayfa; $s++) {
   if($sayfa == $s) { // eğer bulunduğumuz sayfa ise link yapma.
      echo '<li class="page-item disabled"><a class="page-link bg-warning" href="#">' . $s . '</a></li>'; 
   } else {
      echo '<li class="page-item"><a class="page-link bg-light" href="?birim_idi='.$yaziid.'&sayfa=' . $s . '">' . $s . '</a></li> ';
   }
}
if($sayfa != $toplam_sayfa and $toplam_sayfa>$sayfa_goster)
echo '<li class="page-item"><a class="page-link" href="?birim_idi='.$yaziid.'&sayfa='.($sayfa+1).'">Sonraki</a></li>';
if($sayfa != $toplam_sayfa and $toplam_sayfa>$sayfa_goster)
echo '<li class="page-item"><a class="page-link" href="?birim_idi='.$yaziid.'&sayfa='.$toplam_sayfa.'">Son</a></li>';
	}
	echo '</ul>';
	echo '</nav>';
?>
</th>
</thead>
</table>
<?php
}
?>
<table class="table table-sm table-responsive-sm table-hover table-striped" style="background-color:#CCFFCC">
<tbody>
<tr>
 <td width="100%" align="center" style="border-color:black;"><a href="#top" _fcksavedurl="#top" _fcksavedurl="#top"><img src="../images/basadon.png"/></a>
    </td>
</tr>
<tr>
<td style="border-color:black;"><div align="center">
<?php echo iconv("utf-8","iso-8859-9",$link1); ?>
<?php echo iconv("utf-8","iso-8859-9",$link2); ?>
<?php echo iconv("utf-8","iso-8859-9",$link3); ?>
<?php echo iconv("utf-8","iso-8859-9",$link4); ?>
<?php echo iconv("utf-8","iso-8859-9",$link5); ?>
<?php echo iconv("utf-8","iso-8859-9",$link6); ?>
<?php echo iconv("utf-8","iso-8859-9",$link7); ?>
<?php echo iconv("utf-8","iso-8859-9",$link8); ?>
<?php echo iconv("utf-8","iso-8859-9",$link9); ?>
<?php echo iconv("utf-8","iso-8859-9",$link10); ?>
<?php echo iconv("utf-8","iso-8859-9",$medya); ?>
<div id="fon" class="arka_fon"></div>
     <?php echo iconv("utf-8","iso-8859-9",$telif); ?>
   </div>
 </td>
 </tr>
</table>
<div class="modal fade" id="iletiyaz" tabindex="-1" role="dialog" aria-labelledby="iletiyazLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php $labelulas="Formu doldurarak düşüncelerinizi bize iltebilirsiniz."; echo $labelulas; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<div class="form-group">
 <form class="form" name="bizeulasin" id="bizeulasin" method="GET" action="javascript:void(0)" onKeyUp="highlight(event)" onClick="highlight(event)">

<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">
<thead class="thead-dark" align="center">
<tbody>
<tr>
           <td><font class="Yazi">Ad Soyad:</font></td>
           <td>
             <input name="tarih" type="hidden" id="tarih" class="form-control form-control-sm" value="<?php $tarih=date("Y-m-d"); echo $tarih; ?>">
             <input name="adsoyad" type="text" id="adsoyad" class="form-control form-control-sm w-100 sm" tabindex="1" required></td>
           </tr>
           <tr>
             <td><font class="Yazi">Telefon:</font></td>
             <td><input name="telefon" type="text" id="telefon" class="form-control form-control-sm w-100 sm" tabindex="2"></td>
           </tr>
           <tr>
             <td><font class="Yazi">E-mail Adresi:</font></td>
             <td><input name="emailadresi" type="text" id="emailadresi" class="form-control form-control-sm w-100 sm" tabindex="3" required></td>
           </tr>
           <tr>
             <td><font class="Yazi"><?php $labeldusunce="Düşünceleriniz:"; echo $labeldusunce; ?></font></td>
             <td><textarea name="dusunceniz" rows="5" id="dusunceniz" class="form-control w-100" tabindex="4" required></textarea></td>
           </tr>
           
 
 </thead>
 </tbody>
 </table>
 </form>
      </div>
      <div class="modal-footer">
      <a href="#" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm btn-close" data-dismiss="modal"><i class="fa fa-times-circle fa-lg"></i><?php $labeliptal=" İptal"; echo $labeliptal; ?></a>
      <a href="#" onClick="iletiyiekle();" class="btn btn-primary btn-sm ml-3"><i class="fa fa-check fa-lg"></i><?php $labelgonder=" Gönder"; echo $labelgonder; ?></a>  
      
           
      
      </div>
      <div id="sonuciletiyaz"></div>
    </div>
  </div>
</div>  
</div>
<!-- Optional JavaScript -->
					<!-- jQuery first, then Popper.js, then Bootstrap JS -->
					<script src="../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
					<script src="../bootstrap-4/popper.js"></script>
					<script src="../bootstrap-4/js/bootstrap.min.js"></script>
</body>

</html>
