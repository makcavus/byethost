<link href="arkakara.css" rel="stylesheet" type="text/css"/>
<script language="JavaScript" src="arkakara.js" type="text/javascript">
</script>
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/JavaScript">
function reloadPage(id) {    document.location.href = location.href + '?id=' + id.value; } 
</script>
<script type="text/JavaScript">
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}
</script>
<?php
$url = $_SERVER["SCRIPT_NAME"];
$dosya_adi = basename($url);
if($dosya_adi=="index.php"){
$link1='<a href="http://www.sb.gov.tr" target="_blank" class="AltLink">Sağlık Bakanlığı</a> |';
$link2='<a href="http://www.thsk.gov.tr" class="AltLink">Halk Sağlığı Gen.Müd.</a> |';
$link3='<a href="http://www.antalyasm.gov.tr" class="AltLink">Antalya Sağlık Müdürlüğü</a> |';
$link4='<a href="http://serik.antalyasm.gov.tr" class="AltLink">Serik İlçe Sağlık Müdürlüğü</a> |';
$link5='<a href="http://sbu2.saglik.gov.tr/personelIslemleri/" class="AltLink">Personel Bilgi Sistemi</a> |';
$link6='<a href="adressecim.php" class="AltLink">Rehber</a> |';
$link7='<a href="formmenu.php" class="AltLink">Çalışma Formları</a> |';
$link8='<a href="birimler.php" class="AltLink">Gerekli Dökümanlar</a> |';
$link9='<a href="javascript:goster();" data-toggle="modal" data-target="#iletiyaz">Bize Ulaşın</a> | ';
$link10='<a href="sss.php" class="AltLink">Sık Sorulanlar</a> |';
//$medya='<a href="https://www.youtube.com/c/RadyoAkdeniz95/live" title="Radyo Akdeniz" target="_blank">Radyo Akdeniz Canlı</a>';
}else if($dosya_adi=="adressecim.php"){
$link1='<a href="http://www.sb.gov.tr" target="_blank" class="AltLink">Sağlık Bakanlığı</a> |';
$link2='<a href="http://www.thsk.gov.tr" class="AltLink">Halk Sağlığı Gen.Müd.</a> |';
$link3='<a href="http://www.antalyasm.gov.tr" class="AltLink">Antalya Sağlık Müdürlüğü</a> |';
$link4='<a href="http://serik.antalyasm.gov.tr" class="AltLink">Serik İlçe Sağlık Müdürlüğü</a> |';
$link5='<a href="http://sbu2.saglik.gov.tr/personelIslemleri/" class="AltLink">Personel Bilgi Sistemi</a> |';
//$link6='<a href="adressecim.php" class="AltLink">Rehber</a> |';
$link6='<a href="formmenu.php" class="AltLink">Çalışma Formları</a> |';
$link7='<a href="birimler.php" class="AltLink">Gerekli Dökümanlar</a> |';
$link8='<a href="javascript:goster();" data-toggle="modal" data-target="#iletiyaz">Bize Ulaşın</a> | ';
$link9='<a href="sss.php" class="AltLink">Sık Sorulanlar</a> |';
$link10='';
//$medya='<a href="https://www.youtube.com/c/RadyoAkdeniz95/live" title="Radyo Akdeniz" target="_blank">Radyo Akdeniz Canlı</a>';

}else if($dosya_adi=="formmenu.php"){
$link1='<a href="http://www.sb.gov.tr" target="_blank" class="AltLink">Sağlık Bakanlığı</a> |';
$link2='<a href="http://www.thsk.gov.tr" class="AltLink">Halk Sağlığı Gen.Müd.</a> |';
$link3='<a href="http://www.antalyasm.gov.tr" class="AltLink">Antalya Sağlık Müdürlüğü</a> |';
$link4='<a href="http://www.serik.antalyasm.gov.tr" class="AltLink">Serik İlçe Sağlık Müdürlüğü</a> |';
$link5='<a href="http://sbu2.saglik.gov.tr/personelIslemleri/" class="AltLink">Personel Bilgi Sistemi</a> |';
$link6='<a href="adressecim.php" class="AltLink">Rehber</a> |';
//$link7='<a href="formmenu.php" class="AltLink">Çalışma Formları</a> |';
$link7='<a href="birimler.php" class="AltLink">Gerekli Dökümanlar</a> |';
$link8='<a href="javascript:goster();" data-toggle="modal" data-target="#iletiyaz">Bize Ulaşın</a> | ';
$link9='<a href="sss.php" class="AltLink">Sık Sorulanlar</a> |';
$link10='';
//$medya='<a href="https://www.youtube.com/c/RadyoAkdeniz95/live" title="Radyo Akdeniz" target="_blank">Radyo Akdeniz Canlı</a>';

}else if($dosya_adi=="birimler.php"){
$link1='<a href="http://www.sb.gov.tr" target="_blank" class="AltLink">Sağlık Bakanlığı</a> |';
$link2='<a href="http://www.thsk.gov.tr" class="AltLink">Halk Sağlığı Gen.Müd.</a> |';
$link3='<a href="http://www.antalyasm.gov.tr" class="AltLink">Antalya Sağlık Müdürlüğü</a> |';
$link4='<a href="http://www.serik.antalyasm.gov.tr" class="AltLink">Serik İlçe Sağlık Müdürlüğü</a> |';
$link5='<a href="http://sbu2.saglik.gov.tr/personelIslemleri/" class="AltLink">Personel Bilgi Sistemi</a> |';
$link6='<a href="adressecim.php" class="AltLink">Rehber</a> |';
$link7='<a href="formmenu.php" class="AltLink">Çalışma Formları</a> |';
//$link8='<a href="birimler.php" class="AltLink">Gerekli Dökümanlar</a> |';
$link8='<a href="javascript:goster();" data-toggle="modal" data-target="#iletiyaz">Bize Ulaşın</a> | ';
$link9='<a href="sss.php" class="AltLink">Sık Sorulanlar</a> |';
$link10='';
//$medya='<a href="https://www.youtube.com/c/RadyoAkdeniz95/live" title="Radyo Akdeniz" target="_blank">Radyo Akdeniz Canlı</a>';

}else if($dosya_adi=="gerekli_formlar.php"){
$link1='<a href="http://www.sb.gov.tr" target="_blank" class="AltLink">Sağlık Bakanlığı</a> |';
$link2='<a href="http://www.thsk.gov.tr" class="AltLink">Halk Sağlığı Gen.Müd.</a> |';
$link3='<a href="http://www.antalyasm.gov.tr" class="AltLink">Antalya Sağlık Müdürlüğü</a> |';
$link4='<a href="http://www.serik.antalyasm.gov.tr" class="AltLink">Serik İlçe Sağlık Müdürlüğü</a> |';
$link5='<a href="http://sbu2.saglik.gov.tr/personelIslemleri/" class="AltLink">Personel Bilgi Sistemi</a> |';
$link6='<a href="adressecim.php" class="AltLink">Rehber</a> |';
$link7='<a href="formmenu.php" class="AltLink">Çalışma Formları</a> |';
$link8='<a href="birimler.php" class="AltLink">Gerekli Dökümanlar</a> |';
$link9='<a href="javascript:goster();" data-toggle="modal" data-target="#iletiyaz">Bize Ulaşın</a> | ';
$link10='<a href="sss.php" class="AltLink">Sık Sorulanlar</a> |';
//$medya='<a href="https://www.youtube.com/c/RadyoAkdeniz95/live" title="Radyo Akdeniz" target="_blank">Radyo Akdeniz Canlı</a>';
}else if($dosya_adi=="sss.php"){
$link1='<a href="http://www.sb.gov.tr" target="_blank" class="AltLink">Sağlık Bakanlığı</a> |';
$link2='<a href="http://www.thsk.gov.tr" class="AltLink">Halk Sağlığı Gen.Müd.</a> |';
$link3='<a href="http://www.antalyasm.gov.tr" class="AltLink">Antalya Sağlık Müdürlüğü</a> |';
$link4='<a href="http://www.serik.antalyasm.gov.tr" class="AltLink">Serik İlçe Sağlık Müdürlüğü</a> |';
$link5='<a href="http://sbu2.saglik.gov.tr/personelIslemleri/" class="AltLink">Personel Bilgi Sistemi</a> |';
$link6='<a href="adressecim.php" class="AltLink">Rehber</a> |';
$link7='<a href="formmenu.php" class="AltLink">Çalışma Formları</a> |';
$link8='<a href="birimler.php" class="AltLink">Gerekli Dökümanlar</a> |';
$link9='<a href="javascript:goster();" data-toggle="modal" data-target="#iletiyaz">Bize Ulaşın</a> | ';
$link10='';
//$link10='<a href="sss.php" class="AltLink">Sık Sorulanlar</a> |';
//$medya='<a href="https://www.youtube.com/c/RadyoAkdeniz95/live" title="Radyo Akdeniz" target="_blank">Radyo Akdeniz Canlı</a>';
}else if($dosya_adi=="yazilar.php"){
	$link1='<a href="http://www.sb.gov.tr" target="_blank" class="AltLink">Sağlık Bakanlığı</a> |';
	$link2='<a href="http://www.thsk.gov.tr" class="AltLink">Halk Sağlığı Gen.Müd.</a> |';
	$link3='<a href="http://www.antalyasm.gov.tr" class="AltLink">Antalya Sağlık Müdürlüğü</a> |';
	$link4='<a href="http://www.serik.antalyasm.gov.tr" class="AltLink">Serik İlçe Sağlık Müdürlüğü</a> |';
	$link5='<a href="http://sbu2.saglik.gov.tr/personelIslemleri/" class="AltLink">Personel Bilgi Sistemi</a> |';
	$link6='<a href="adressecim.php" class="AltLink">Rehber</a> |';
	$link7='<a href="formmenu.php" class="AltLink">Çalışma Formları</a> |';
	$link8='<a href="birimler.php" class="AltLink">Gerekli Dökümanlar</a> |';
	$link9='<a href="javascript:goster();" data-toggle="modal" data-target="#iletiyaz">Bize Ulaşın</a> | ';
	$link10='';
	//$link10='<a href="sss.php" class="AltLink">Sık Sorulanlar</a> |';
	//$medya='<a href="https://www.youtube.com/c/RadyoAkdeniz95/live" title="Radyo Akdeniz" target="_blank">Radyo Akdeniz Canlı</a>';
}else{
//echo "bu ba�kabir dosya";
}
$medya='<a href="https://www.youtube.com/c/RadyoAkdeniz95/live" title="Radyo Akdeniz" target="_blank">Radyo Akdeniz Canlı</a><br>';
$telif='<font class="SiteYazi">&copy; 2011 Kaya Web Tasarım</font>';
?>
