
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
include("../form013/tanimveyetkiler.php");
$ilseckrgelen=$_GET['krselectilno'];
$ilceseckrgelen=$_GET['krilcegirgelen'];

$kurumgelen=$_GET['kurumgir'];
$kurumgelen=ucwords_tr($kurumgelen);
$degkurumgelen=$_GET['kurumgirgelen'];
$degkurumgelen=replace_tr($degkurumgelen);
$asmgelen=$_GET['asmgir']; // get metodu ile formdan gelen ge�er al�n�yor
$asmgelen=ucwords_tr($asmgelen);
$drgelen=$_GET['tbbgir']; // get metodu ile formdan gelen ge�er al�n�yor
$drgelen=ucwords_tr($drgelen);
$asegelen=$_GET['asegir']; // get metodu ile formdan gelen ge�er al�n�yor
$asegelen=ucwords_tr($asegelen);
$aseungelen=$_GET['aseungir']; // get metodu ile formdan gelen ge�er al�n�yor
$aseungelen=ucwords_tr($aseungelen);
$kayit_kontrol=mysqli_query($dbh,"SELECT * from ocak  where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$degkurumgelen')");
$kayit_say=mysqli_num_rows($kayit_kontrol);
if($kurumgelen==NULL or $drgelen==NULL or $asmgelen==NULL){
  echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
  echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
  echo '<thead align="center">';
  echo '<tr>';
  echo '<th>Durum</th>';
  echo '</tr>';
  echo '<tr>';
  echo '<th class="bg-light">Değiştirilen kurum bilgilerinde doldurulması gereken alanlar var.<a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></thead></table>';
  echo '</tr>';
  echo '</thead>';
  echo '</table>';
  echo '</div>';
}else{
$kayit="UPDATE ocak SET  socad='$kurumgelen',asmadi='$asmgelen',dradi='$drgelen',aseadi='$asegelen',aseunvan='$aseungelen' where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$degkurumgelen')";
//}
if(mysqli_query($dbh,$kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-light">'.$degkurumgelen.' '.$oncekikurum.' nda değişiklikler yapıldı.'/*.$oncekikurum.' '.$kurumgelen.' olarak '.$kurumsonraki.'*/ .'<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<th class="bg-light">'."Kurum Değiştirelemedi...".'<a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></thead></table>';
echo '</div>';
echo mysqli_error();
 }
}
@mysqli_close($dbh);
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>