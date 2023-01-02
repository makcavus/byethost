<?php
$tum_birim_adim='TÜM BİRİMLERE AİT FORM/DÖKÜMANLAR';
$icerigi='İçeriği:';
$dosyaadi='Dosya Adı:';
include("assets/sablon/anadizin/header.php");
include("assets/sablon/anadizin/sidebar.php");
?>
<link rel="stylesheet" href="assets/css/tablo_form_styles.css"> 
<?php
	function ext($file)
{
    $ext = pathinfo($file);
    return $ext['extension'];
}
 
//$dosya_adi = 'resim.jpg';
 
//echo ext($dosya_adi);
 
/*
��kt�:
jpg
*/
$path="Formlar/";
include('connect.php');
//$sayfa=$_SERVER['PHP_SELF'];

if(@$_GET['birim_idi']==0 || !@is_numeric($_GET['birim_idi']) || @$_GET['birim_idi']<0)

{
?>
<?php
$yaziid=@$_GET['birim_idi'];
$form_varmi="SELECT * from gerekli";
$form_durum=mysqli_query($dbh,$form_varmi);
$form_say=mysqli_num_rows($form_durum);
//echo $form_say;
$birimsorgu="select distinct * from birim";
$basla=mysqli_query($dbh,$birimsorgu);
while($sonucum=mysqli_fetch_array($basla)){
$birim_idim=$sonucum['birim_id'];
$birim_adim=$sonucum['birim_ad'];
if($form_say==0){
?>
<table class="table table-sm table-responsive-sm table-bordered" style="background-color: black">
<thead style="background-color: #ccffcc" align="center">
<tr>
<th width="100%" class="text-warning" style="background-color: black;font-weight:bold; border-color:#ccffcc;" align="center" colspan="3"><?php echo $tum_birim_adim." 'lere ait form bulunamadı."; header("refresh: 5; url=birimler.php");; ?></th>
</tr>
</thead>
</table>
  <?php
}else{
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
$kackayit=15; //Ka� kayd�n listelenece�i.
$sayfa_goster = 11; // g�sterilecek sayfa say�s�
 
$en_az_orta = ceil($sayfa_goster/2);
@$en_fazla_orta = ($toplam_sayfa+1) - $en_az_orta;
 
@$sayfa_orta = $sayfa;
if($sayfa_orta < $en_az_orta) $sayfa_orta = $en_az_orta;
if($sayfa_orta > $en_fazla_orta) $sayfa_orta = $en_fazla_orta;
 
$sol_sayfalar = round($sayfa_orta - (($sayfa_goster-1) / 2));
$sag_sayfalar = round((($sayfa_goster-1) / 2) + $sayfa_orta); 
 
if($sol_sayfalar < 1) $sol_sayfalar = 1;
if($sag_sayfalar > @$toplam_sayfa) $sag_sayfalar = $toplam_sayfa;

$sorgu = mysqli_query($dbh,'SELECT COUNT(*) AS toplam FROM gerekli');
$sonuc = mysqli_fetch_assoc($sorgu);
$toplam_icerik = $sonuc['toplam'];
 
@$toplam_sayfa = ceil($toplam_icerik / $kackayit);
 
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
 
if($sayfa < 1) $sayfa = 1; 
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
 
$limit = ($sayfa - 1) * $kackayit;
//echo $yaziid;
$formsorgu="select * from gerekli order by birim_idi,icerik asc LIMIT $limit,$kackayit";
$basla=mysqli_query($dbh,$formsorgu);
while($sonucum=mysqli_fetch_array($basla)){
$form_idim=$sonucum['gerekli_id'];
$form_adim=$sonucum['birim_idi'];
$form_icerik=$sonucum['icerik'];
$form_dosyaad=$sonucum['dosya_adi'];
$form_dosyaadyolsuz=substr($sonucum['dosya_adi'],8);
$form_dosyatar=$sonucum['dosya_tarihi'];
$form_resim=$sonucum['resim_adi'];
$dosya_yol_ad=$path.$form_dosyaad;

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
<td width="12%" style="border-color:black;" class="text-center"><?php if (file_exists($dosya_yol_ad)) { echo '<a href="Formlar/'.$form_dosyaad.'"
 style="display:block; text-decoration:none;"><font color="red" style="font-weight:bold"><i class="fa fa-download" aria-hidden="true">
 </i>&nbsp;&nbsp;'.$form_dosyatar.'</font></a>';
} else { //echo "Bu dosya silinmiş";
$url = htmlspecialchars($_SERVER['HTTP_REFERER']);  // hangi sayfadan gelindigi degerini verir.
echo "<a href='$url' style='display:block; text-decoration:none;'>Bu dosya silinmiş</a>"; // dugmeye o degeri atiyoruz.
} ?></td>
<td width="44%" style="border-color:black;"><?php if (file_exists($dosya_yol_ad)) { echo '<a href="Formlar/'.$form_dosyaad.'" 
style="display:block; text-decoration:none;"><font color="black" style="font-weight:bold">&nbsp;&nbsp;'.$form_icerik.'</font> '.$yeni.'</a>'; 
} else { //echo "Bu dosya silinmiş";
	$url = htmlspecialchars($_SERVER['HTTP_REFERER']);  // hangi sayfadan gelindigi degerini verir.
	echo "<a href='$url' style='display:block; text-decoration:none;'>&nbsp;&nbsp;$form_icerik</a>"; // dugmeye o degeri atiyoruz.
	} ?></td>
<td width="44%" style="border-color:black;"><?php if (file_exists($dosya_yol_ad)) { echo '<a href="Formlar/'.$form_dosyaad.'"
style="display:block; text-decoration:none;"><font color="blue" style="font-weight:bold">'
.$icon.'&nbsp;&nbsp;'.$form_dosyaadyolsuz.'</font></a>';
} else { //echo "Bu dosya silinmiş";
	$url = htmlspecialchars($_SERVER['HTTP_REFERER']);  // hangi sayfadan gelindigi degerini verir.
	echo "<a href='$url' style='display:block; text-decoration:none;'>&nbsp;&nbsp;$form_dosyaadyolsuz</a>"; // dugmeye o degeri atiyoruz.
	} ?></td>

</tr>
<?php
}
?>
</tbody>
</table>
<?php
}
if($form_say>0){
?>
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
   if($sayfa == $s) { // e�er bulundu�umuz sayfa ise link yapma.
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
}

//header("birimler.php");

}else{

$yaziid=$_GET['birim_idi'];
$form_varmi="SELECT * from gerekli where birim_idi=$yaziid";
$form_durum=mysqli_query($dbh,$form_varmi);
$form_say=mysqli_num_rows($form_durum);
//echo $form_say;
$birimsorgu="select distinct * from birim  where(birim_id='$yaziid')";
$basla=mysqli_query($dbh,$birimsorgu);
while($sonucum=mysqli_fetch_array($basla)){
$birim_idim=$sonucum['birim_id'];
$birim_adim=$sonucum['birim_ad'];
if($form_say==0){
  ?>
<table class="table table-sm table-responsive-sm table-bordered" style="background-color: black">
<thead style="background-color: #ccffcc" align="center">
<tr>
<th width="100%" class="text-warning" style="background-color: black;font-weight:bold; border-color:#ccffcc;" align="center" colspan="3"><?php echo $birim_adim." 'ne ait form bulunamadı."; ?></th>
</tr>
</thead>
</table>
  <?php
}else{
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
$kackayit=15; //Ka� kayd�n listelenece�i.
$sayfa_goster = 11; // g�sterilecek sayfa say�s�
 
$en_az_orta = ceil($sayfa_goster/2);
@$en_fazla_orta = ($toplam_sayfa+1) - $en_az_orta;
 
@$sayfa_orta = $sayfa;
if($sayfa_orta < $en_az_orta) $sayfa_orta = $en_az_orta;
if($sayfa_orta > $en_fazla_orta) $sayfa_orta = $en_fazla_orta;
 
$sol_sayfalar = round($sayfa_orta - (($sayfa_goster-1) / 2));
$sag_sayfalar = round((($sayfa_goster-1) / 2) + $sayfa_orta); 
 
if($sol_sayfalar < 1) $sol_sayfalar = 1;
if($sag_sayfalar > @$toplam_sayfa) $sag_sayfalar = $toplam_sayfa;

$sorgu = mysqli_query($dbh,"SELECT COUNT(*) AS toplam FROM gerekli where(birim_idi='$yaziid')");
$sonuc = mysqli_fetch_assoc($sorgu);
$toplam_icerik = $sonuc['toplam'];
 
$toplam_sayfa = ceil($toplam_icerik / $kackayit);
 
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
 
if($sayfa < 1) $sayfa = 1; 
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
 
$limit = ($sayfa - 1) * $kackayit;
//echo $yaziid;
$formsorgu="select * from gerekli where(birim_idi='$yaziid') order by icerik asc LIMIT $limit,$kackayit";
$basla=mysqli_query($dbh,$formsorgu);
while($sonucum=mysqli_fetch_array($basla)){
$form_idim=$sonucum['gerekli_id'];
$form_adim=$sonucum['birim_idi'];
$form_icerik=$sonucum['icerik'];
$form_dosyaad=$sonucum['dosya_adi'];
$form_dosyaadyolsuz=substr($sonucum['dosya_adi'],8);
$form_dosyatar=$sonucum['dosya_tarihi'];
$form_resim=$sonucum['resim_adi'];
$dosya_yol_ad=$path.$form_dosyaad;
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
<td width="12%" style="border-color:black;" class="text-center"><?php if (file_exists($dosya_yol_ad)) { echo '<a href="Formlar/'.$form_dosyaad.'"
 style="display:block; text-decoration:none;"><font color="red" style="font-weight:bold"><i class="fa fa-download" aria-hidden="true">
 </i>&nbsp;&nbsp;'.$form_dosyatar.'</font></a>';
} else { //echo "Bu dosya silinmiş";
$url = htmlspecialchars($_SERVER['HTTP_REFERER']);  // hangi sayfadan gelindigi degerini verir.
echo "<a href='$url' style='display:block; text-decoration:none;'>Bu dosya silinmiş</a>"; // dugmeye o degeri atiyoruz.
} ?></td>
<td width="44%" style="border-color:black;"><?php if (file_exists($dosya_yol_ad)) { echo '<a href="Formlar/'.$form_dosyaad.'" 
style="display:block; text-decoration:none;"><font color="black" style="font-weight:bold">&nbsp;&nbsp;'.$form_icerik.'</font> '.$yeni.'</a>'; 
} else { //echo "Bu dosya silinmiş";
	$url = htmlspecialchars($_SERVER['HTTP_REFERER']);  // hangi sayfadan gelindigi degerini verir.
	echo "<a href='$url' style='display:block; text-decoration:none;'>&nbsp;&nbsp;$form_icerik</a>"; // dugmeye o degeri atiyoruz.
	} ?></td>
<td width="44%" style="border-color:black;"><?php if (file_exists($dosya_yol_ad)) { echo '<a href="Formlar/'.$form_dosyaad.'"
style="display:block; text-decoration:none;"><font color="blue" style="font-weight:bold">'
.$icon.'&nbsp;&nbsp;'.$form_dosyaadyolsuz.'</font></a>';
} else { //echo "Bu dosya silinmiş";
	$url = htmlspecialchars($_SERVER['HTTP_REFERER']);  // hangi sayfadan gelindigi degerini verir.
	echo "<a href='$url' style='display:block; text-decoration:none;'>&nbsp;&nbsp;$form_dosyaadyolsuz</a>"; // dugmeye o degeri atiyoruz.
	} ?></td>
</tr>
<?php
}
}
?>
	</tbody>
</table>
<?php
if($form_say>0){
?>
<table class="table table-sm table-responsive-sm table-bordered" style="background-color: black">
<thead style="background-color: #ccffcc" align="center">
<th>
<?php
if(@$toplam_sayfa>1){
echo '<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center mt-3">';
  if($sayfa != 1 and $toplam_sayfa>$sayfa_goster)
    echo '<li class="page-item"><a class="page-link" href="?birim_idi='.$yaziid.'&sayfa=1">İlk</a></li>';
	if($sayfa != 1 and $toplam_sayfa>$sayfa_goster)
	 echo '<li class="page-item"><a class="page-link" href="?birim_idi='.$yaziid.'&sayfa='.($sayfa-1).'">Önceki</a></li>';
for($s = 1; $s <= $toplam_sayfa; $s++) {
   if($sayfa == $s) { // e�er bulundu�umuz sayfa ise link yapma.
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
}
}
  include("assets/sablon/anadizin/footer.php");
?>
<!-- Optional JavaScript -->

<script type="text/javascript" src="iletikaydet.js">
</script>
  <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="jquery-latest.pack.js"></script>
  <script type="text/javascript" src="iletikaydet.js"></script>