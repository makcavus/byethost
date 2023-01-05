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
url :noCache('gerekli_islem.php?gerekli_id='+id+'&komut='+komut),//islem yap�lacak dosyay� belirtiyoruz.fonksiyonumuzdan gelen de�i�kenleri islem.php sayfas�na POST methodu ile g�nderiyoruz.
data: $('form').serialize(),//g�nderilecek veri olarak formdan elamlar�n�n de�erleri al�yoruz.
success: function(cevap) // i�lem.php sayfas�ndan gelen sonu�lar� id �zniteli�i liste olan bir div'de g�r�nt�lyouz.
{
$('div#liste').html(cevap);
}
});}
</script>
<?php
include("../assets/sablon/form013/header.php");
include("../assets/sablon/form013/sidebar.php");
//$tarih=$_POST["tarih"];
$konu=$_POST["selectbirim"];
$icerik=$_POST["icerik"];
//$dosya=$_POST["dosya"];
$bilgi=$_POST["bilgi"];
$vticerik=$icerik;
//$resim=htmlspecialchars($_FILES["resim"]);
//$resim=htmlspecialchars($_FILES["resim"]);
//DOSYA EKLEME
if ($_FILES["dosya"]["error"] > 0)
       {
//echo "Error: " . $_FILES["dosya"]["error"] . "<br />";
       }
else
        {
            if (file_exists("Gerekli/" . $_FILES["dosya"]["name"]))
           {
                echo '<div class="alert alert-info text-info">'.$_FILES["dosya"]["name"] . " kalıcı olarak depolanamadı. Aynı adı taşıyan başka bir dosya bulunmakta. ".'</div>';
            }
      else
            {
            move_uploaded_file($_FILES["dosya"]["tmp_name"], "Gerekli/" . $_FILES["dosya"]["name"]);
            echo '<div class="alert alert-info text-info">'."Kalıcı depo adresi: " . "Gerekli/" . $_FILES["dosya"]["name"].'</div>';
			$dosya="Gerekli/" . $_FILES["dosya"]["name"];
			//echo $dosya;
           }
        }
		//RES�M DOSYASI Y�KLEME
if ($_FILES["resim"]["error"] > 0)
        {
        //echo "Error: " . $_FILES["resim"]["error"] . "<br />";
        }
else
        {
       if (file_exists("Gerekli/" . $_FILES["resim"]["name"]))
             {
//echo '<br>';
echo '<div class="alert alert-info text-info">'.$_FILES["resim"]["name"] . " kalıcı olarak depolanamadı. Aynı adı taşıyan baaşka bir dosya bulunmakta. ".'</div>';
             }
      else
            {
            move_uploaded_file($_FILES["resim"]["tmp_name"], "Gerekli/" . $_FILES["resim"]["name"]);
            echo '<div class="alert alert-info text-info">'."Kalıcı depo adresi: " . "Gerekli/" . $_FILES["resim"]["name"].'</div>';
			$resim="Gerekli/" . $_FILES["resim"]["name"];
			//echo $resim;
           }
        }
include("../connect.php");
//$conn=mysqli_connect("localhost","root","malika") or die("Ba�lan�lamad�");;
if($dbh){
$sql = @mysqli_query($dbh,"SELECT icerik,dosya_adi FROM gerekli WHERE dosya_adi = '$dosya'");
                $kontrol = mysqli_num_rows($sql);
                        if (empty($dosya)){
                            echo '<table class="table table-sm table-responsive-lg table-stripped table-bordered table-hover">';
//echo '<br>';
echo '<div class="alert alert-info text-info">'."Form/Dökümanın Konusunu Girmediniz.".'</div>';
//echo '</table>';
                       }elseif ($kontrol == TRUE) {
                            echo '<div class="alert alert-info text-info">'."Bu Form/Döküman Daha Önce Eklenmiş...".'</div>';
                        }else{
$SQLInsert=@mysqli_query($dbh,"insert into gerekli (birim_idi,icerik,dosya_adi,dosya_tarihi,resim_adi) values('$konu','$vticerik','$dosya','$bilgi','$resim')");
}
}

if(@$SQLInsert){
echo '<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="white" align="center">';
echo '<div class="alert alert-info text-info">Form/Döküman Yüklemesi Yapıldı.</div>';
echo '</table>';
}else{
echo '<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="white" align="center">';
echo '<div class="alert alert-info text-info">Form/Döküman Kaydı Yapılamadı.Tekrar deneyiniz.Silme veya Düzeltme Yapılabilir.</div>';
echo '</table>';
}
@mysqli_close($dbh);
?>
 <body onload="islem('','')">
<table class="table table-sm table-responsive-sm table-bordered table-stripped table-hover" style="background-color: orange;">
<tbody>
<tr>
<td class="border border-success rounded" width="20%" align="center">Birimi</td>
<td class="border border-success rounded" width="20%" align="center">Döküman/Form Açıklaması</td>
<td class="border border-success rounded" width="20%" align="center">Döküman/Formun Yolu ve Adı</td>
<td class="border border-success rounded" width="10%" align="center">Döküman/ Formun Tarihi</td>
<td class="border border-success rounded" width="20%" align="center">Resim</td>
<td class="border border-success rounded" width="10%" align="center">İşlemler</td>
</tr>
</tbody>
</table>
<div id="liste" align="center"></div> 
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>



 







 