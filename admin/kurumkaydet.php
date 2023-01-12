<?php
function ucwords_tr($deger)
{
$deger = mb_split(" ",trim($deger));
$deger_tr = ""; 
for($x=0; $x < count($deger); $x++)
    {
    $deger_bas = substr($deger[$x],0,1);
    $deger_son = substr($deger[$x],1);
    $deger_bas = replace_tr($deger_bas); 
    $deger_tr .= $deger_bas.$deger_son." ";
    } 
$deger_tr = trim($deger_tr); 
return $deger_tr;
} 
include("../con_023.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
include("../tanimlaranadizin.php");
include("../form013/tanimveyetkiler.php");
$ilseckrgelen=$_GET['selectil'];
$ilceseckrgelen=$_GET['selectilce'];
$kurumgelen=$_GET['kurumgir']; // get metodu ile formdan gelen ge�er al�n�yor
$kurumgelen=ucwords_tr($kurumgelen);
$asmgelen=$_GET['asmgir']; // get metodu ile formdan gelen ge�er al�n�yor
$asmgelen=ucwords_tr($asmgelen);
$drgelen=$_GET['drgir']; // get metodu ile formdan gelen ge�er al�n�yor
$drgelen=ucwords_tr($drgelen);
$asegelen=$_GET['asegir']; // get metodu ile formdan gelen ge�er al�n�yor
$asegelen=ucwords_tr($asegelen);
$aseungelen=$_GET['aseungir']; // get metodu ile formdan gelen ge�er al�n�yor
$aseungelen=ucwords_tr($aseungelen);
$kurumsec="select * from ocak where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$kurumgelen')";
$socsorgu2=mysqli_query($dbh,$kurumsec);
$say2=mysqli_num_rows($socsorgu2);
if($say2<1 AND $kurumgelen !=""){
$kayit="INSERT INTO ocak(ilinad,ilce,socad,asmadi,dradi,aseadi,aseunvan) VALUES ('$ilseckrgelen','$ilceseckrgelen','$kurumgelen','$asmgelen','$drgelen','$asegelen','$aseungelen')";
if(mysqli_query($dbh,$kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Durum</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light">'.$kurumgelen.' '.$kurumok.' <a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 '.$geridon.'</a></th></tr></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-info">Kurum Kaydedilemedi... <a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 '.$geridon.'</a></th></thead></table></div>';
}
}
while($sonucum2=mysqli_fetch_array($socsorgu2)){
$kurumno=$sonucum1['ocid'];
$ilinadi=$sonucum1['ilinad'];
$ilceadi=$sonucum1['ilce'];
$kurumadi=$sonucum1['socad'];
$asmninadi=$sonucum1['asmadi'];
$tbbadi=$sonucum1['dradi'];
$aseninadi=$sonucum1['aseadi'];
$aseunv=$sonucum1['aseunvan'];
}
@mysqli_close($dbh);
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>