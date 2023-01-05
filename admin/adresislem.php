<?php
//include('../frm013alanlari.php');
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}else{
include("../connect.php");
$sorgu=mysqli_query($dbh,"select * from adres order by tipi,adi asc");//veritaban�n� se�iyor ve liste genel sorgumuzu olu�tuyoruz.
while($liste=mysqli_fetch_array($sorgu)) //Kay�tlar�n listelenmesi
{
$Id=$liste['adrid'];
$tipi=$liste['tipi'];
$ilid=$liste['ilid'];
$ilceid=$liste['ilceid'];
$adi=$liste['adi'];
$adres=$liste['adres'];
$telefon=$liste['telefon'];
$fax=$liste['fax'];
$email=$liste['email'];
$web=$liste['web'];
$harita=$liste['harita'];
if ($Id==$_GET['adrid']) // Kayd�n ID de�eri ile d�zelt linkinden ajax ile gelen id de�erini kar��la�t�r�yoruz.
{
if ($_GET['komut']=="sil") // g�ncelle komutunu geldi ise veri g�ncellenecek.
{
echo '<div class="alert alert-info text-center">'."Kayıt Silindi.".'</div>';

mysqli_query($dbh,"delete from adres where adrid='$Id'"); //  Kayd�n id de�erine g�re formda ajax ile gelen veriler veritaban�ndakiler ile de�i�tiriliyorr.
?>
<script type="text/javascript">
islem('','');
</script>
<?php
}
if ($_GET['komut']=="duzelt") // g�ncelle komutunu geldi ise veri g�ncellenecek.
{
$tipi=$_POST['tipi'];
$ilid=$_POST['ilid'];
$ilceid=$_POST['ilceid'];
$adi=$_POST['adi'];
$adres=$_POST['adres'];
$telefon=$_POST['telefon'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$web=$_POST['web'];
$harita=$_POST['harita'];
$adi=$adi;
$adres=$adres;
echo '<div class="alert alert-info text-center">'."Kayıt Değiştirildi.".'</div>';
mysqli_query($dbh,"Update adres set tipi='$tipi',ilid='$ilid',ilceid='$ilceid',adi='$adi',adres='$adres',telefon='$telefon',fax='$fax',email='$email'
,web='$web',harita='harita' where adrid='$Id'"); //  Kayd�n id de�erine g�re formda ajax ile gelen veriler veritaban�ndakiler ile de�i�tiriliyorr.
?>
<script type="text/javascript">
islem('','');
</script>
<?php
}
else //G�ncelle komut gelmedi ise veriler form halinde g�r�nt�lencek
{
$adi=$adi;
$adres=$adres;
?>
<form class="form">
<table class="table table-sm table-hover table-striped table-responsive-sm table-bordered" align="center">
    <tbody>
     <tr>
<td width="0px" align="left"><input type="hidden" class="style5" value='<?php echo $liste['tipi']?>' name="tipi" id="tipi" size="0"></td>
<td width="0px" align="left"><input type="hidden" class="style5" value='<?php echo $liste['ilid']?>' name="ilid" id="ilid" size="0"></td>
<td width="0px" align="left"><input type="hidden" class="style5" value='<?php echo $liste['ilceid']?>' name="ilceid" id="ilceid" size="0"></td>
<td width="200px" class="align-middle"><textarea class="form-control form-control-sm" name="adi" rows="14"><?php echo $adi?></textarea></td>
<td width="300px" class="align-middle"><textarea class="form-control form-control-sm" name="adres" rows="14"><?php echo $adres?></textarea></td>
<td width="150px" class="align-middle"><textarea class="form-control form-control-sm" name="telefon" rows="14" cols="50%"><?php echo $telefon?></textarea></td>
<td width="150px" width="120px" class="align-middle"><textarea class="form-control form-control-sm" name="fax" rows="14"><?php echo $fax?></textarea></td>
<td width="180px" class="align-middle"><textarea class="form-control form-control-sm" name="email" rows="14"><?php echo $email?></textarea></td>
<td width="180px" class="align-middle"><textarea class="form-control form-control-sm" name="web" rows="14"><?php echo $web?></textarea></td>
<td width="300px" class="align-middle"><textarea class="form-control form-control-sm" name="harita" rows="14"><?php echo $harita?></textarea></td>
<td class="align-middle" width="100px">
<a href="javascript:islem('','')" class="btn btn-sm btn-warning" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> <?php echo "İptal"; ?></a> <!--��lemi iptal etmel i�in fonksiyon bo� de�erler ile �al��t�rl�yor.-->
<br><a href="javascript:islem('<?php echo $liste['adrid']?>','duzelt')" class="btn btn-sm btn-primary mt-5" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> <?php echo "Güncelle"; ?></a> <!-- G�ncelleme i�in komut de�ikeni d�zelt olarak g�nderiliyor.-->
<br><a href="javascript:islem('<?php echo $liste['adrid']?>','sil')" class="btn btn-sm btn-danger mt-5" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> Sil</a> <!-- G�ncelleme i�in komut de�ikeni d�zelt olarak g�nderiliyor.-->
</div></td>
</tr>
</table>
</form>
<?php
}
}
else //ID de�eri bo� gelmi� ise liste normal olarak g�r�nt�leniyor.
{
//$cumle=$liste['tarih1'];
$adi=$adi;
$adres=$adres;
?>
<table class="table table-sm table-responsive-lg table-stripped table-bordered table-hover" style="background-color: #CCFFCC;">
<tbody>
<tr>
<td class="border border-warning rounded" width="150px"><?php echo $adi?></td>
<td class="border border-warning rounded" width="300px"><?php echo $adres?></td>
<td class="border border-warning rounded" width="120px"><?php echo $telefon?></td>
<td class="border border-warning rounded" width="120px"><?php echo $fax?></td>
<td class="border border-warning rounded" width="150px"><?php echo $email?></td>
<td class="border border-warning rounded" width="150px"><?php echo $web?></td>
<!--<td width="200px"><?php echo $harita?></td>-->
<td class="border border-warning rounded" width="100px">
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
?>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>



