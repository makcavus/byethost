<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Döküman-Form Yükleme İşlemleri</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
<!-- onload="islem('','') sayfa y�klendi�inde fonksiyonumuzu bo� de�erlerle otamatik olarak �al��t�r�yoruz.-->
<!--
<style type="text/css">

.style1 {font-family: Arial, Helvetica, sans-serif}

.style3 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }

.style4 {color: #000000}

.style5 {

font-family: Arial, Helvetica, sans-serif;

color: #000000;

font-weight: bold;

}

</style>
-->

<script type="text/javascript" src="jquery.js"></script><!--JQUEY K�t�phanemizi dahil ediyoruz.-->

<script type="text/javascript">

function noCache(

uri 

){

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

type: 'GET',//verinin g�nderilme y�ntemini belirliyoruz.

url :noCache('gerekli_islem.php?gerekli_id='+id+'&komut='+komut),//islem yap�lacak dosyay� belirtiyoruz.fonksiyonumuzdan gelen de�i�kenleri islem.php sayfas�na POST methodu ile g�nderiyoruz.

data: $('form').serialize(),//g�nderilecek veri olarak formdan elamlar�n�n de�erleri al�yoruz.

success: function(cevap) // i�lem.php sayfas�ndan gelen sonu�lar� id �zniteli�i liste olan bir div'de g�r�nt�lyouz.

{

$('div#liste').html(cevap);

}

});}

</script>


</head>

<?php
function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   } 
//include('../form013alanlari.php');
function replace_tr($text) {
   $text = trim($text);
   $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
   $replace = array('C','c','G','g','i','I','O','o','S','s','U','u','-');
   $new_text = str_replace($search,$replace,$text);
   return $new_text;
} 
//Mutlu Son Veritaban�na Kay�t ;-) 
/*
// php|jsp|asp|htm|html|shtml|cgi
function upload ($dizin)
{
$uzanti=end(explode(".",strtolower($_FILES["file"]["name"])));
//echo $uzanti;
if (   ($uzanti== "jsp")
||  ($uzanti== "php")
||  ($uzanti== "pl")
||  ($uzanti== "htm")
||  ($uzanti== "html")
||  ($uzanti== "shtml")
||  ($uzanti== "cgi")
||  ($uzanti== "php3")
|| ($_FILES["file"]["name"]==".htaccess")
)
{echo "bu dosya t�r�n�n y�klenmesine izin verilmiyor";
}
else
{
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
}
else
{$file_ismi=turkcele($_FILES["file"]["name"]);
echo "<br />Dosya ad�: " . $file_ismi . "<br />";
echo "Yeri: ".$dizin."/".$file_ismi. "<br />";
//    echo "Tip: " . $_FILES["file"]["type"] . "<br />";
echo "Boyut: " . ceil(($_FILES["file"]["size"] )/1024) . " Kb<br />";
//    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
if (file_exists("$dizin/" . $_FILES["file"]["name"]))
{
echo $_FILES["file"]["name"] . " Ayn� isimle sunucuya y�klenen ba�ka bir dosya var. ";
}
else
{$file_ismi=turkcele($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"],
"$dizin/" . $file_ismi);
//      echo "Stored in: " . "$dizin/" . $_FILES["file"]["name"];
//   echo "<br >file ismi=$file_ismi<br >";
}
}
}
}
function turkcele($metin)
{
//$bul=$_FILES["resim"] ;
$bulunacak = array('�','�','�','�','�','�','�','�','�','�','�','�',',',' ','(',')','[',']','-');
$degistir  = array('c','C','i','I','g','G','u','o','S','s','O','U','','_','','','','','_');
$sonuc=str_replace($bulunacak, $degistir, $metin);
return $sonuc;
}
if ($_FILES["file"]["name"])
upload("upload2");
?>
<?php
?>
<?
*/
$tarih=$_POST["tarih"];

$konu=$_POST["selectbirim"];

$icerik=$_POST["icerik"];

$dosya=$_POST["dosya"];

$bilgi=$_POST["bilgi"];

$vticerik=iconv("utf-8","iso-8859-9",$icerik);

//$resim=htmlspecialchars($_FILES["resim"]);
//$resim=htmlspecialchars($_FILES["resim"]);
//DOSYA EKLEME
if ($_FILES["dosya"]["error"] > 0)
       {
//echo "Error: " . $_FILES["dosya"]["error"] . "<br />";
       }

else

        {

       // echo "Y�klenen dosya: " . $_FILES["dosya"]["name"] . "<br />";
      //echo "Dosyan�n t�r�: " . $_FILES["dosya"]["type"] . "<br />";
      // echo "Dosyan�n b�y�kl���: " . ($_FILES["dosya"]["size"] / 1024) . " Kb<br />";
      // echo "Ge�ici depo adresi: " . $_FILES["dosya"]["tmp_name"] . "<br />";

        if (file_exists("Gerekli/" . replace_tr($_FILES["dosya"]["name"])))
           {
            echo replace_tr($_FILES["dosya"]["name"]) . " kalıcı olarak depolanamadı. Aynı adı taşıyan başka bir dosya bulunmakta. ";
            }
      else
            {
            move_uploaded_file(replace_tr($_FILES["dosya"]["tmp_name"]), "Gerekli/" . replace_tr($_FILES["dosya"]["name"]));

            echo "Kalıcı depo adresi: " . "Gerekli/" . replace_tr($_FILES["dosya"]["name"]);

			$dosya="Gerekli/" . replace_tr($_FILES["dosya"]["name"]);

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

      // echo "Y�klenen dosya: " . $_FILES["resim"]["name"] . "<br />";
      // echo "Dosyan�n t�r�: " . $_FILES["resim"]["type"] . "<br />";
      // echo "Dosyan�n b�y�kl���: " . ($_FILES["resim"]["size"] / 1024) . " Kb<br />";
      //  echo "Ge�ici depo adresi: " . $_FILES["resim"]["tmp_name"] . "<br />";

      if (file_exists("Gerekli/" . replace_tr($_FILES["resim"]["name"])))

             {

echo '<br>';

             echo replace_tr($_FILES["resim"]["name"]) . " kalıcı olarak depolanamadı. Aynı adı taşıyan baaşka bir dosya bulunmakta. ";

             }

      else

            {

            move_uploaded_file(replace_tr($_FILES["resim"]["tmp_name"]), "Gerekli/" . replace_tr($_FILES["resim"]["name"]));

            echo "Kalıcı depo adresi: " . "Gerekli/" . replace_tr($_FILES["resim"]["name"]);

			$resim="Gerekli/" . replace_tr($_FILES["resim"]["name"]);

			//echo $resim;

           }

        }

//$resim = trim(strip_tags(htmlspecialchars($_GET['resim']))); 
/*
echo $konu;
echo $icerik;
echo $dosya;
echo $tarih;
echo $resim;
//echo $tmp_name;
*/
include("../../connect.php");

//$conn=mysql_connect("localhost","root","malika") or die("Ba�lan�lamad�");;

if($dbh){

if(mysql_select_db("b12_10384566_etf",$dbh)){

$sql = mysql_query("SELECT icerik,dosya_adi FROM gerekli WHERE dosya_adi = '$dosya'");

                $kontrol = mysql_num_rows($sql);

                        if (empty($dosya)){

                            echo '<table class="table table-sm table-responsive-lg table-stripped table-bordered table-hover">';

//echo '<br>';
echo '<div class="alert alert-info text-dark">'."Form/Dökümanın Konusunu Girmediniz.".'</div>';


//echo '</table>';

                       }elseif ($kontrol == TRUE) {

                            echo '<div class="alert alert-info text-dark">'."Bu Form/Döküman Daha Önce Eklenmiş...".'</div>';

                        }else{
/*
//"resim bilgileri" 
$kaynak      =$_FILES['file']['tmp_name'];//Buras� resminiz k�k klas�r�n�n yerini verir 
$isim        =$_FILES['file']['name']; //Resminizin ad�n� verir 
$tip         =$_FILES['file']['type']; // Resminizin tipini verir 
$buyukluk    =$_FILES['file']['size']; //B�y�kl���n� verir 
//�rne�in bir k�� resmi y�klediniz isim = "230bt.Ki�.jpg" olarak ��k�yor. Yani rastgele say� olu�turarak 
//A�a��da resmin de�erlerini ekrana yazd�r�yoruz.. 
$rand =substr(md5(uniqid(rand())),0,5); 
//Burada olu�turdu�umuz rastgele say�y� y�kledi�imiz resimle birle�tiriyoruz. 
//Burada istedi�imiz formattaki resimleri bir diziye at�yor 
$desteklenenformatlar = array ("image/jpeg","image/pjpeg","image/png","image/gif"); 
$kaydedilecekyer = "/resim"; 
//in_array fonksiyonu size bir degerin o dizinin icinde olup olmadigini bulmanizda yardimci olur 
if (in_array ($_FILES['file']['type'], $desteklenenformatlar)) 
{ 
//Burada g�rd���n�z fibi ilk�nce kaydedilecekyeri daha sonra yukar�da yapt���m�z 
//random say�y� yeni resmimizin �n�ne ekliyoruz. 
$resim = $kaydedilecekyer . "/".$rand.$_FILES['file']['name']; 
//Burada ise move_uploaded_file fonksiyonu ile dosyam�z� yukar�da belirtti�imiz yere ta��yoruz 
if (move_uploaded_file ($_FILES['file']['tmp_name'], $resim)) 
        { 
            echo "<font color = '#009900'><b>Dosyaniz basarili bir sekilde yuklendi!</b></font>"."<br/><br/>"; 
            echo "<b>Dosyanizin ismi :</b> "."$isim"."<br/>"; 
            echo "<b>Dosyanizin tipi : </b>"."$tip"."<br/>"; 
            echo "<b>Dosyanizin buyuklugu : </b>"."$buyukluk"."kb'tir"."<br/>"; 
        } 
} */

$SQLInsert="insert into gerekli (birim_idi,icerik,dosya_adi,dosya_tarihi,resim_adi) values('$konu','$vticerik','$dosya','$bilgi','$resim')";

}

}

}

if(mysql_query($SQLInsert)){

echo '<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="white" align="center">';

echo '<div class="alert alert-info text-dark">Form/Döküman Yüklemesi Yapıldı.</div>';

echo '</table>';

}else{

echo '<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="white" align="center">';

echo '<div class="alert alert-info text-dark">Form/Döküman Kaydı Yapılamadı.Tekrar deneyiniz.Silme veya Düzeltme Yapılabilir.</div>';

echo '</table>';

}

@mysql_close($dbh);

/* $conn=mysql_connect("localhost","root","malika");
if($conn){
if(mysql_select_db("etf",$conn)){
$idara="select SOCID from soc where(SOC='".$_GET["soca"]."')";
$idsorgu=mysql_query($idara);
while($Haber=mysql_fetch_array($idsorgu)){
$idi=$Haber["SOCID"];
}
if('".$_GET["yili"]."'<>'NULL'){
$YILDA="INSERT INTO yil (OCID,YIL) VALUES ('$idi','".$_GET["yili"]."')";  
}else{echo "Piramidi yapilacak yili Girmediniz.";
}
if(mysql_query($YILDA)){
//echo "<br><br>Yil Kaydi Yapildi.<br><br>";
}else{
//echo "<br><br>Yil Kaydi Yapilamadi.Tekrar deneyiniz.<br><br>";
}
}
}
@mysql_close($conn);
include("con_023.php");
$conn=mysql_connect("localhost","root","malika");
if($conn){
if(mysql_select_db("etf",$conn)){
$soidara="select * from soc where(SOC='".$_GET["soca"]."')" ;
$soidsorgu=mysql_query($soidara);
while($soHaber=mysql_fetch_array($soidsorgu)){
$socidi=$soHaber["SOCID"];
$socadi=$soHaber["SOC"];
//echo "$socidi";
//echo "$socadi";
$yilidara="select * from yil where(YIL='".$_GET["yili"]."')" ;
$yilidsorgu=mysql_query($yilidara);
while($yilHaber=mysql_fetch_array($yilidsorgu)){
$yilidi=$yilHaber["YIL"];
//echo "$yilidi";
$say="select * from yg where(SOC='$socadi' and YIL='$yilidi')" ;
$ssonuc=mysql_query($say);
$sonuc=mysql_num_rows($ssonuc);
//echo "$sonuc";
}
if('".$_GET["soca"]."'<>'NULL' and '".$_GET["yili"]."'<>'NULL' and $sonuc==0){
$YGR="INSERT INTO yg (SOC,SOCID,YIL,0K,5K,10K,15K,20K,25K,30K,35K,40K,45K,50K,55K,60K,65K,70K,75K,80K,85K,0E,5E,10E,15E,20E,25E,30E,35E,40E,45E,50E,55E,60E,65E,70E,75E,80E,85E) VALUES ('$socadi','$socidi','$yilidi','".$_GET["0k"]."','".$_GET["5k"]."','".$_GET["10k"]."','".$_GET["15k"]."','".$_GET["20k"]."','".$_GET["25k"]."','".$_GET["30k"]."','".$_GET["35k"]."','".$_GET["40k"]."','".$_GET["45k"]."','".$_GET["50k"]."','".$_GET["55k"]."','".$_GET["60k"]."','".$_GET["65k"]."','".$_GET["70k"]."','".$_GET["75k"]."','".$_GET["80k"]."','".$_GET["85k"]."','".$_GET["0e"]."','".$_GET["5e"]."','".$_GET["10e"]."','".$_GET["15e"]."','".$_GET["20e"]."','".$_GET["25e"]."','".$_GET["30e"]."','".$_GET["35e"]."','".$_GET["40e"]."','".$_GET["45e"]."','".$_GET["50e"]."','".$_GET["55e"]."','".$_GET["60e"]."','".$_GET["65e"]."','".$_GET["70e"]."','".$_GET["75e"]."','".$_GET["80e"]."','".$_GET["85e"]."')";  
}else{echo "<span class='style3'>Bu Kay�t daha �nce Girilmi�</span>";
echo "<br><br>";
echo '<form action="yasgrubudegistir.php" method="POST" name="degistir">';
echo '<input type="hidden" name="ilgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$socadi.'" />';
echo '<input type="hidden" name="ilcegelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilidi.'" />';
echo '<input type="submit" name="degistir" class="style3" value="Veri De�i�tir"/>';
echo '</form>';
echo '<form action="yasgrubusil.php" method="POST" name="sil">';
echo '<input type="hidden" name="ilgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$socadi.'" />';
echo '<input type="hidden" name="ilcegelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilidi.'" />';
echo '<input type="hidden" name="idgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$socidi.'" />';
echo '<span class="style3"><input type="submit" name="sil" class="style3" value="Verileri Sil  !"/></span>';
echo '</form>';
}
if(mysql_query($YGR)){
echo "<br><br><span class='style3'>Veriler Kaydedildi.Te�ekk�r ederiz.</span><br><br>";
}else{
echo "<br><br><span class='style3'>Veriler Kaydedilemedi.<br>De�i�tirmek ve Silmek i�in yukar�daki D��meleri kullan�n.<br>Veya Tekrar deneyiniz.</span><br><br>";
 }
 }
 }
 }
 @mysql_close($conn);
$conn=mysql_connect("localhost","root","malika");
if($conn){
if(mysql_select_db("etf",$conn)){
$silsec="select * from soc";
$socsil=mysql_query($silsec);
while($silsonuc=mysql_fetch_array($socsil)){
}
$SILInsert="delete from soc where(SOC='' || SOC='NULL')";
if(mysql_query($SILInsert)){
//echo "<br><br>Bos veriler silindi.<br><br>";
}else{
echo "<br><br>Islem Tamam.<br><br>";
 }
 }
 }*/
 ?>
 <body onload="islem('','')">

<table class="table table-sm table-responsive-sm table-bordered table-stripped table-hover">
<tbody>

<tr>
<td width="20%" align="center">Birimi</td>

<td width="20%" align="center">Döküman/Form Açıklaması</td>

<td width="20%" align="center">Döküman/Formun Yolu ve Adı</td>

<td width="10%" align="center">Döküman/ Formun Tarihi</td>

<td width="20%" align="center">Resim</td>

<td width="10%" align="center">İşlemler</td>
</tr>
<tr>
<td align="center" colspan="6">
<div id="liste" align="center"></div> 
</td>
</tr>
</tbody>
</table>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
<script src="../bootstrap-4/popper.js"></script>
<script src="../bootstrap-4/js/bootstrap.min.js"></script>
</body>

</html>







 