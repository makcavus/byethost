<?php
error_reporting(0);
@session_start();
include("../assets/sablon/form013/header.php");
include("../assets/sablon/form013/sidebar.php");
include("frm013alanlari.php");
?>
 <?php
$user=$_SESSION['uye'];
if(!isset($_SESSION["uye"])){

}else{
echo '<table class="table table-responsive-sm table-sm w-50 h-25" align="center"><div align="center"></div>';
echo '<thead>';
echo '<tr>';
}
echo '<th class="bg-warning text-primary text-center" colspan="2"><h4 class="font-weight-bold">'.$sdbaslik.'</h4></th>';
   echo '<br>';
   echo '<br>';
   echo '<br>';  
echo '</tr>';
echo '<tr>';
 if(!isset($_SESSION["uye"])){
  
echo '<font color="black">'.$yetkiyok.'</font>';//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}else{  
echo '<th class="bg-success text-center" colspan="2"><h5>Hoşgeldiniz Sayın  <h5 class="text-warning">'.$_SESSION['uye'].'</h5></h5></th>';
echo '</tr>';
?>
<form class="form" id="sifregerekli" method="post" action="sifredegistir.php">
<input type="hidden" name="id">
</tr>
<tr>
<th class="bg-info text-dark text-right">Şifreniz:
<th class="bg-info text-dark"><input class="form-control form-control-sm w-50" type="password" name="eskisifre"></th>
</tr>
<tr>
<th class="bg-primary text-dark text-right">Yeni Şifre:</th>
<th class="bg-primary text-dark"><input class="form-control form-control-sm w-50" type="password" name="yeni"></th>
</tr>
<tr>
<th class="bg-primary text-dark text-right">Yeni Şifre Tekrar:</th>
<th class="bg-primary text-dark"><input class="form-control form-control-sm w-50" type="password" name="yeni_tekrar"></th>
</tr>
<tr>
<th class="bg-warning text-center" colspan="2">
  
<input class="btn btn-light btn-sm mr-2" type="submit" name="xxx" value="Vazgeç" style="color:#000000;font-weight:bold; width:71px" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'">
<input class="btn btn-success btn-sm" type="submit" value="Şifreyi Değiştir" style="color:#000000;font-weight:bold;background:#66FF00; width:119px" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'">

</th>
</form>
</tr>
<tr>
<?php
} 
function sha1cevir($SifreSTR){ 
	$SifreSTR=sha1($SifreSTR);
	return $SifreSTR;
}
session_start(); //oturum başlatılıyor
$vazgecildi=$_POST['xxx'];
if($vazgecildi){
echo "<script>location.href='frm023kayit.php';</script>"; // admin.php sayfasına yönlendiriliyorsunuz
}
	include('../con_023.php');
$eski=strip_tags(mysqli_real_escape_string($dbh,$_POST['eskisifre']));
$sifregelen=$_SESSION['uyesif'];
$eskisha=sha1cevir($eski);
$eskisha1=sha1cevir($eskisha);
$eskisha2=sha1cevir($eskisha1);
$yenisi = strip_tags(mysqli_real_escape_string($dbh,$_POST['yeni'])); //üye adını kötü huylu kişilerden korumak için alınmış bir önlemdir(-->,",' bu tür saldırıları engellemek için)
$tyenisi = strip_tags(mysqli_real_escape_string($dbh,$_POST['yeni_tekrar']));// şifreyi kötü huylu kişilerden korumak için alınmış bir önlemdir(<,>,",' bu tür saldırıları engellemek için) 
$yenisha=sha1cevir($yenisi);
$yenisha1=sha1cevir($yenisha);
$yenisha2=sha1cevir($yenisha1);
$uyekul=$_SESSION['uye'];
if(isset($_SESSION["uye"]) and $eski=="" || $yenisi == "" || $tyenisi == "") {
echo '<th class="bg-dark text-warning text-center" colspan="2">'.$doldur.'</th>';  // eğer üye adı ve şifre boş işe boş alanları doldurunuz
} elseif(isset($_SESSION["uye"]) and $sifregelen!=$eskisha2) {
echo '<th class="bg-dark text-warning text-center" colspan="2">'.$sifreyanlis.'</th>';
}elseif(isset($_SESSION["uye"]) and $yenisi!=$tyenisi) { 
echo '<th class="bg-dark text-warning text-center" colspan="2">'.$aynidegil.'</th>';
} elseif(isset($_SESSION["uye"]) and $yenisi==$eski) {
echo '<th class="bg-dark text-warning text-center" colspan="2">'.$aynisifre.'</th>';
}else{
$guncelle=mysqli_query($dbh,"update uyeler set uyesifre = '$yenisha2' where uyekim = '$uyekul'");
//echo $yenisha;
//echo $uyekul;
echo '<th class="cizgi text-center" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#000000" colspan="2"><h4>'.$kulsayfayon.'</h4></th>';
echo "<script>location.href='frm023kayit.php';</script>"; // admin.php sayfasına yönlendiriliyorsunuz

}

?>
</tr>
</table>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
			<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';

  window.addEventListener('load', function() {
    var form = document.getElementById('sifregerekli');
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  }, false);
})();
</script>
