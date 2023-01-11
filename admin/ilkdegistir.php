<?php
include("../con_023.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
//include("../../tanimlaranadizin.php");
$ilgelen=$_GET['ilgir'];
$ilgelen=replace_tr($ilgelen);
$ildeggelen=$_GET['selectil'];
$ildeggelen=replace_tr($ildeggelen);
$kayit_kontrol=mysqli_query($dbh,"SELECT * from il where ilad='$ilgelen'");
$kayit_say=mysqli_num_rows($kayit_kontrol);
if($ilgelen==NULL){
      echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
      echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
      echo '<thead align="center">';
      echo '<tr>';
      echo '<th>Durum</th>';
      echo '</tr>';
      echo '<tr>';
      echo '<th class="bg-light">Yeni İl adını girmediniz.<a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></thead></table>';
      echo '</tr>';
      echo '</thead>';
      echo '</table>';
      echo '</div>';
    }elseif($ilgelen!=NULL and $kayit_say>=1){
      echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
      echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
      echo '<thead align="center">';
      echo '<tr>';
      echo '<th>Durum</th>';
      echo '</tr>';
      echo '<tr>';
      echo '<th class="bg-light">Bu il önceden kaydedilmiş.<a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></thead></table>';
      echo '</tr>';
      echo '</thead>';
      echo '</table>';
      echo '</div>';  
    }else{
$kayit="UPDATE il SET  ilad='$ilgelen' where(ilad='$ildeggelen')";
if(mysqli_query($dbh,$kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Durum</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light">'.$ildeggelen.' '.$oncekiil.' '.$ilgelen.' '.$sonraki.' <a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> Geridön</a></th></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-light">İl Değiştirelemedi...<a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> Geridön</a></th></thead></table>';
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