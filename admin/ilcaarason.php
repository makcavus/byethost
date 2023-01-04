<?php
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}else{
// timeout periyodu, sn olarak
$inactive = 1300;
if(isset($_SESSION['timeout']) ) {
$session_life = time() - $_SESSION['timeout'];
if($session_life > $inactive)
{ 
unset($_SESSION['uye']); // oturumda olan de�i�kenimiz siliniyor
session_destroy(); header("Location: cikis.php"); }
}
$_SESSION['timeout'] = time();
 $country=intval($_GET['selectil']);
include("../con_023.php");
include("../form013/tanimveyetkiler.php");
$solilce=substr($_SESSION["uyekodu"],0,5);
$resultocakilce = @mysqli_query($dbh,"select * from ocak where left(socad,5)='$solilce' order by socad asc");
while($rowilcekod=mysqli_fetch_array($resultocakilce)) {
$ilcekodu=$rowilcekod['ilce'];
}
if(substr($hamkod,-3,3)==$bakanlikyetki){
$query="SELECT ilceid,ilinad,ilcead FROM ilce WHERE ilinad='$country' order by ilcead asc";
}else if(substr($hamkod,-3,3)==$ilyetki){
$query="SELECT ilceid,ilinad,ilcead FROM ilce WHERE ilinad='$country' order by ilcead asc";
}else if(substr($hamkod,-3,3)==$kurumyetki){
$query="SELECT ilceid,ilinad,ilcead FROM ilce WHERE(ilceid='$ilcekodu' and ilinad='$country') order by ilcead asc";
}else if(substr($hamkod,-9,9)==$kulyetki){
$query="SELECT ilceid,ilinad,ilcead FROM ilce WHERE(ilceid='$ilcekodu' and ilinad='$country') order by ilcead asc";
}
$result=mysqli_query($dbh,$query);
?>
<select class="form-control form-control-sm mt-1 mb-1 w-50" name="selectilce">
<option><?php echo "İlçe Seçiniz"; ?></option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option value=<?=$row['ilceid']?>><?=$row['ilcead']?></option>
<?php } ?>
</select>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
<?php
}
?>