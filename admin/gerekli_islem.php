<?php
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   }
//include('../frm013alanlari.php');
//include("../index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}else{
include("../connect.php");
//$baglanti=mysqli_connect("localhost","root","malika") or die ("Ba�lant� Hatas�");// Veritaban� ba�lant�s�n� sat�r�.
$sorgu=mysqli_query($dbh,"select * from gerekli order by birim_idi,icerik asc");//veritaban�n� se�iyor ve liste genel sorgumuzu olu�tuyoruz.
while($liste=mysqli_fetch_array($sorgu)) //Kay�tlar�n listelenmesi
{
$Id=$liste['gerekli_id'];
$birim=$liste['birim_idi'];
$icerik=$liste['icerik'];
$dosya=$liste['dosya_adi'];
$tarih=$liste['dosya_tarihi'];
$resim=$liste['resim_adi'];
if ($Id==$_GET['gerekli_id']) // Kayd�n ID de�eri ile d�zelt linkinden ajax ile gelen id de�erini kar��la�t�r�yoruz.
//E�er �art sa�lan�rsa verilen input text ile g�r�nt�lecek
{
if($_GET){
/*$birim=$_POST['selectbirim'];
$icerik=$_POST['icerik'];
$dosya=$_POST['dosya'];
$tarih=$_POST['tarih'];
$resim=$_POST['resim'];*/
//$dosya = $dosya;
//$resim=$resim;
//$icerik=str_replace($gelen_deger, $donusen_deger, $icerik);
}else{
echo "veri gelmedi";
}
if ($_GET['komut']=="sil") // g�ncelle komutunu geldi ise veri g�ncellenecek.
{
$dosya=$liste['dosya_adi'];
if(file_exists($dosya))
{
    unlink($dosya);
    echo $dosya ,"silindi";
}else{
    echo "bu isimde bir dosya yok:".$dosya;
}
$resim=$liste['resim_adi'];
if(file_exists($resim))
{
    unlink($resim);
    echo $resim ,"silindi";
}else{
    echo "bu isimde bir dosya yok:".$resim;
}
//Burada formdan ajax ile gelen veriler de�i�kenlere atan�yor.
//$tarih=$_GET['tarih'];
//$konu=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['konu']));
//$icerik=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['icerik']));
mysqli_query($dbh,"delete from gerekli where gerekli_id='$Id'"); //  Kayd�n id de�erine g�re formda ajax ile gelen veriler veritaban�ndakiler ile de�i�tiriliyorr.
?>
<script type="text/javascript">
islem('','');
</script>
<?php
}
if ($_GET['komut']=="duzelt") // g�ncelle komutunu geldi ise veri g�ncellenecek.
{
//Burada formdan ajax ile gelen veriler de�i�kenlere atan�yor.
$birim=$_POST['birim'];
$icerik=$_POST['icerik'];
$dosya=$_POST['dosya'];
$tarih=$_POST['tarih'];
$resim=$_POST['resim'];
mysqli_query($dbh,"Update gerekli set birim_idi='$birim',icerik='$icerik',dosya_adi='$dosya',dosya_tarihi='$tarih',resim_adi='$resim' where gerekli_id='$Id'"); //  Kayd�n id de�erine g�re formda ajax ile gelen veriler veritaban�ndakiler ile de�i�tiriliyorr.
?>
<!--G�ncelleme i�leminden sonra listenin eksi halini almas� i�in fonsiyonumuz bo� de�erlerle �al��t�rl�yor.-->
<script type="text/javascript">
islem('','');
</script>
<?php
}
else //G�ncelle komut gelmedi ise veriler form halinde g�r�nt�lencek
{
//$icerik=iconv("iso-8859-9","utf-8",$icerik);
$Id=$liste['gerekli_id'];
$birim=$liste['birim_idi'];
$icerik=$liste['icerik'];
$dosya=$liste['dosya_adi'];
$tarih=$liste['dosya_tarihi'];
$resim=$liste['resim_adi'];
?>
<form class="form">
<table class="table table-sm table-hover table-striped table-responsive-sm table-bordered" align="center">
    <tbody>
     <tr>
  <td width="20%" align="left"><select name="birim" class="form-control form-control-sm" tabindex="1">
  <?php
  $birimesas=$liste['birim_idi'];
$sorgubirimx=mysqli_query($dbh,"select * from birim where birim_id='$birimesas' order by birim_ad desc");//veritaban�n� se�iyor ve liste genel sorgumuzu olu�tuyoruz.
while($listebirimx=mysqli_fetch_array($sorgubirimx)) {
$birimidx=$listebirimx['birim_id'];
$birimadx=$listebirimx['birim_ad'];
echo $birimidx;
echo $birimadx;
?>
	<option value="<?=$listebirimx['birim_id']?>"><?=$listebirimx['birim_ad']; }?></option>
<?php
$sorgubirim=mysqli_query($dbh,"select * from birim order by birim_ad desc");//veritaban�n� se�iyor ve liste genel sorgumuzu olu�tuyoruz.
while($listebirim=mysqli_fetch_array($sorgubirim)) { ?>
<option value="<?=$listebirim['birim_id']?>"><?=$listebirim['birim_ad']?></option>
<?php } ?>
</select></td>
<td width="20%" align="left"><textarea class="form-control form-control-sm" name="icerik" id="icerik" rows="14"><?php echo $icerik?></textarea></td>
<td width="20%" align="left"><textarea class="form-control form-control-sm" name="dosya" id="dosya" rows="14"><?php echo $dosya?></textarea></td>
<td width="10%" align="left"><textarea class="form-control form-control-sm" name="tarih" id="tarih" rows="14"><?php echo $tarih?></textarea></td>
<td width="20%" align="left"><textarea class="form-control form-control-sm" name="resim" id="resim" rows="14"><?php echo $resim?></textarea></td>
<td class="align-middle" width="100px">
<a href="javascript:islem('','')" class="btn btn-sm btn-warning" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> <?php echo "İptal"; ?></a> <!--��lemi iptal etmel i�in fonksiyon bo� de�erler ile �al��t�rl�yor.-->
<br><a href="javascript:islem('<?php echo $liste['gerekli_id']?>','duzelt')" class="btn btn-sm btn-primary mt-5" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> <?php echo "Güncelle"; ?></a> <!-- G�ncelleme i�in komut de�ikeni d�zelt olarak g�nderiliyor.-->
<br><a href="javascript:islem('<?php echo $liste['gerekli_id']?>','sil')" class="btn btn-sm btn-danger mt-5" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> Sil</a> <!-- G�ncelleme i�in komut de�ikeni d�zelt olarak g�nderiliyor.-->
</div></td>
</tr>
</tbody>
</table>
</form>
<?php
}
}
else //ID de�eri bo� gelmi� ise liste normal olarak g�r�nt�leniyor.
{
$sorgum=mysqli_query($dbh,"select gerekli_id,birim_idi,icerik,dosya_adi,dosya_tarihi,resim_adi from gerekli order by gerekli_id desc");
$sonucum=mysqli_fetch_array($sorgum); 
$dosyam=$sonucum['dosya_adi'];
$cumle=$sonucum['dosya_tarihi'];
$birimsorgu=mysqli_query($dbh,"select distinct * from birim  where(birim_id='$birim')");
while($sonucum=mysqli_fetch_array($birimsorgu)){
$birim_idim=$sonucum['birim_id'];
$birim_adim=$sonucum['birim_ad'];
?>
<table class="table table-sm table-responsive-sm table-bordered table-stripped table-hover" style="background-color: #CCFFCC;">
<tbody>
<tr>
<td class="border border-warning rounded" width="20%" align="left" class="style5" ><?php echo $birim_adim ?></td>
<td class="border border-warning rounded" width="20%" align="left" class="style5" ><?php echo $icerik ?></td>
<td class="border border-warning rounded" width="20%" align="left" class="style5" ><?php echo $dosya  ?></td>
<td class="border border-warning rounded" width="10%" align="center" class="style5" ><?php echo $tarih ?></td>
<td class="border border-warning rounded" width="20%" align="left" class="style5" ><?php echo $resim ?></td>
<td class="border border-warning rounded" width="10%">
<div align="center">
<a href="javascript:islem('<?php echo $Id?>','')" class="btn btn-sm btn-success" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> <?php echo "Düzenle"; ?></a> <!--islem fonksiyonunu veritan�ndan e�itlenen id de�ikeni ile �a��r�yoruz.-->
</div>
</td>
</tr>
</tbody>
</table>
<?php
}
}
}
}
?>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>



