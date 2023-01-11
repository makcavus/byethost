<?php
include("../con_023.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
//include("../../tanimlaranadizin.php");
$ilsecgelen=$_GET['selectilno'];
$ilcedeggelen=$_GET['ilcegirgelen'];
$ilcegelen=$_GET['ilcegir'];
$ilcegelen=replace_tr($ilcegelen);
$onceki="ilçesi";
$sonraki="olarak değiştirildi...";
$geridon="Geri Dön";
$kayit_kontrol=mysqli_query($dbh,"SELECT * from ilce where ilcead='$ilcegelen'");
$kayit_say=mysqli_num_rows($kayit_kontrol);
if($ilcegelen==NULL){
  echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
  echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
  echo '<thead align="center">';
  echo '<tr>';
  echo '<th>Durum</th>';
  echo '</tr>';
  echo '<tr>';
  echo '<th class="bg-light">Yeni İlçe adını girmediniz.<a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></thead></table>';
  echo '</tr>';
  echo '</thead>';
  echo '</table>';
  echo '</div>';
}elseif($ilcegelen!=NULL and $kayit_say>=1){
  echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
  echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
  echo '<thead align="center">';
  echo '<tr>';
  echo '<th>Durum</th>';
  echo '</tr>';
  echo '<tr>';
  echo '<th class="bg-light">Bu ilçe önceden kaydedilmiş.<a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></thead></table>';
  echo '</tr>';
  echo '</thead>';
  echo '</table>';
  echo '</div>';  
}else{
$kayit="UPDATE ilce SET  ilcead='$ilcegelen' where(ilinad='$ilsecgelen' and ilcead='$ilcedeggelen')";
//}
if(mysqli_query($dbh,$kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Durum</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light">'.$ilcedeggelen.' '.$onceki.' '.$ilcegelen.' '.$sonraki.' <a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></thead></table></div>';
echo '</tr>';
  echo '</thead>';
  echo '</table>';
  echo '</div>';  
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Durum</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light">İlçe Adı Değiştirilemedi...<a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>'.trsuz($geridon).'</a></th></thead></table>';
echo '</tr>';
  echo '</thead>';
  echo '</table>';
  echo '</div>';  
echo mysqli_error();
 }
}
@mysqli_close($dbh);
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
