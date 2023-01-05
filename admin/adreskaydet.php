<script type="text/javascript" src="jquery.js"></script><!--JQUEY K�t�phanemizi dahil ediyoruz.-->
<script type="text/javascript">
function noCache(uri){
return uri.concat( 
/\?/.test(uri) ?
"&"
:
"?",
"noCache=",
(new Date).getTime(),
".",
Math.random()*1234567
);
};
function islem(id,komut) // islem  fonksiyomuzda id ve komut isimli iki de�i�ken kullanaca��z.id de�i�keni ile verileri id de�erini ta��mak i�in, komut de�i�kenini ise g�ncelleme i�in kullan�ca��z.
{
$.ajax({ 
type: 'POST',//verinin g�nderilme y�ntemini belirliyoruz.
url :noCache('adresislem.php?adrid='+id+'&komut='+komut),//islem yap�lacak dosyay� belirtiyoruz.fonksiyonumuzdan gelen de�i�kenleri islem.php sayfas�na get methodu ile g�nderiyoruz.
data: $('form').serialize(),//g�nderilecek veri olarak formdan elamlar�n�n de�erleri al�yoruz.
success: function(cevap) // i�lem.php sayfas�ndan gelen sonu�lar� id �zniteli�i liste olan bir div'de g�r�nt�lyouz.
{
$('div#liste').html(cevap);
}
});}
</script>
<a id="basadon"></a>
<?php
	include("../assets/sablon/form013/header.php");
  include("../assets/sablon/form013/sidebar.php");
$tipi=$_POST["selecttip"];
$ili=$_POST["selectil"];
$ilcesi=$_POST["selectilce"];
$konu=$_POST["konu"];
$icerik=$_POST["icerik"];
$dosya=$_POST["dosya"];
$bilgi=$_POST["bilgi"];
$email=$_POST["email"];
$web=$_POST["web"];
$harita=$_POST["harita"];
$vtkonu=$konu;
$vticerik=$icerik;
include("../connect.php");
if($tipi>0 and $ili>0 and $ilcesi>0 and $konu<>NULL){
$SQLInsert=mysqli_query($dbh, "insert into adres (tipi,ilid,ilceid,adi,adres,telefon,fax,email,web,harita) values('$tipi','$ili','$ilcesi','$vtkonu','$vticerik','$dosya','$bilgi','$email','$web','$harita')");
}else{
//echo mysqli_error($SQLInsert);
echo '<table class="table table-sm table-responsive-lg table-stripped table-bordered table-hover">';
echo '<div class="alert alert-info text-dark">'."Eksik Bilgi Girdiniz.".'</div>';
echo '</table>';
}
if(@$SQLInsert){
//echo mysqli_error($SQLInsert);
echo '<table class="table table-sm table-responsive-lg table-stripped table-bordered table-hover">';
echo '<div class="alert alert-info text-dark">'."Adres Kaydı Yapıldı.".'</div>';
echo '</table>';
}else{
echo '<table class="table table-sm table-responsive-lg table-stripped table-bordered table-hover">';
echo '<div class="alert alert-info text-dark">'."Adres Kaydı Yapılamadı.Tekrar deneyiniz.Silme veya Düzeltme Yapılabilir.".'</div>';
echo '</table>';
}
@mysqli_close($dbh);
?>
<body onload="islem('','')">
<table class="table table-sm table-responsive-sm table-stripped table-bordered table-hover" style="background-color: orange;">
<thead>
<tr>
<td class="border border-success rounded" width="150px"><?php echo "Kurumun Adı"; ?></td>
<td class="border border-success rounded" width="300px">Kurumun Adresi</td>
<td class="border border-success rounded" width="120px">Kurum Telefonu</td>
<td class="border border-success rounded" width="120px"><?php echo "Kurum Faksı";?></td>
<td class="border border-success rounded" width="150px"><?php echo "Kurum E-Postası";?></td>
<td class="border border-success rounded" width="150px">Kurum Web Adresi</td>
<!--<td><?php echo "Haritada Göster";?></td>-->
<td class="border border-success rounded" width="100px"><?php echo "İşlemler";?></td>
</tr>
</thead>
</table>
<div id="liste" align="left"></div> 

<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>



 