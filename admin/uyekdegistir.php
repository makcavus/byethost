<?php
include("../con_023.php");
include("../fonksiyonlar.php");
include("../form013/tanimveyetkiler.php");
include('../form013/frm013alanlari.php');
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

$uyekodu=$_GET['krselectilno'];
$uyead=$_GET['asmgir'];
$uyeadtr=$uyead;
$uyeadtrkrt=replace_tr_krt($uyeadtr);
$drad=$_GET['kurumgirdeg'];
$dradtrkrt=ucwords_tr($drad);
$kulsifre=$_GET['tbbgir'];
$resultuye = @mysqli_query($dbh,"select * from uyeler where(uyead='$uyeadtrkrt')") ;
$say=mysqli_num_rows($resultuye);
//echo $say;
//exit;
while($sonucum=mysqli_fetch_array($resultuye)){
$uyekodnom=$sonucum['uyekod'];
$uyeadim=$sonucum['uyead'];
//echo $uyekodnom;
}
if($say==0){
function sha1cevir($SifreSTR){ 
	$SifreSTR=sha1($SifreSTR);
	return $SifreSTR;
}
$sha1=sha1cevir($kulsifre); // fonksiyon çağırılıor
$sha2=sha1cevir($sha1); // fonksiyon çağırılıor
$sha3=sha1cevir($sha2); // fonksiyon çağırılıor
 // ekrana md5 kodu yazdırılıyor
//print("<b>Sifre : </b> ".$ksigelen." <b> ------> </b>".$sha3);				
$kayit="UPDATE uyeler SET  uyead='$uyeadtrkrt',uyekim='$dradtrkrt' where(uyekod='$uyekodu')";
//}
if(mysqli_query($dbh,$kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-light">'.$uyekodu.' '.$oncekiuye.' '.$kurumsonraki.' <a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm">
<i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<th class="bg-light">Kullanıcı Bilgileri Değiştirelemedi...<a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm">
<i class="fa fa-reply-all fa-lg"></i>'.$geridon.'</a></th></thead></table>';
echo '</div>';
 }
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-info">'.$uyeadim.' '.$kulmevcut.' <button name="submit3" type="button" onclick="kontroluye();" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-success mr-1">
<i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</button></th></thead></table></div>';
}
@mysqli_close($dbh);
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>