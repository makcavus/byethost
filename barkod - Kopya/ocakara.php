<?php
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
$countryId=intval($_GET['selectil']);
$stateId=intval($_GET['selectilce']);
include("../con_023.php");
include("../form013/tanimveyetkiler.php");
if(substr($hamkod,-3,3)==$bakanlikyetki){
$query="SELECT ocid,ilinad,ilce,asmadi FROM ocak WHERE ilinad='$countryId' AND ilce='$stateId' group by asmadi order by asmadi asc";
}else if(substr($hamkod,-3,3)==$ilyetki){
$query="SELECT ocid,ilinad,ilce,asmadi FROM ocak WHERE ilinad='$countryId' AND ilce='$stateId' and left(socad,2)='$kodiki' group by asmadi order by asmadi asc";
}else if(substr($hamkod,-3,3)==$kurumyetki){
$query="SELECT ocid,ilinad,ilce,asmadi FROM ocak WHERE ilinad='$countryId' AND ilce='$stateId' and left(socad,5)='$kod' group by asmadi order by asmadi asc";
}else if(substr($hamkod,-9,9)==$kulyetki){
$query="SELECT ocid,ilinad,ilce,asmadi FROM ocak WHERE ilinad='$countryId' AND ilce='$stateId' and left(socad,5)='$kod' group by asmadi order by asmadi asc";
}
$result=mysqli_query($dbh,$query);
?>
<select class="form-control form-control-sm" id="selectoc" name="selectoc">
<option><?php echo $kulyetki;?></option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option><?=$row['asmadi']?></option>
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