<?php
include("../connect.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
//include("../../tanimlaranadizin.php");
$birimgelen=$_GET['birimgir'];
$birimgelen=replace_tr($birimgelen);
$birimdeggelen=$_GET['selectbirim'];
//echo "--".$birimgelen."--";
//echo "--".$birimdeggelen."--";
$kayit_kontrol=mysqli_query($dbh,"SELECT * from birim where birim_ad='$birimgelen'");
$kayit_say=mysqli_num_rows($kayit_kontrol);
//echo $kayit_say;
if($birimgelen==NULL){
  echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
  echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
  echo '<thead align="center">';
  echo '<tr>';
  echo '<th>Durum</th>';
  echo '</tr>';
  echo '<tr>';
  echo '<th class="bg-light">Yeni Şube-Birim adını girmediniz.<a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></thead></table>';
  echo '</tr>';
  echo '</thead>';
  echo '</table>';
  echo '</div>';
}elseif($birimgelen!=NULL and $kayit_say>=1){
  echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
  echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
  echo '<thead align="center">';
  echo '<tr>';
  echo '<th>Durum</th>';
  echo '</tr>';
  echo '<tr>';
  echo '<th class="bg-light">Bu Şube-Birim adı önceden kaydedilmiş.<a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></thead></table>';
  echo '</tr>';
  echo '</thead>';
  echo '</table>';
  echo '</div>';
  
}else{
$kayit="UPDATE birim SET  birim_ad='$birimgelen' where(birim_ad='$birimdeggelen')";  
if(mysqli_query($dbh,$kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Durum</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light">'.$birimdeggelen.' '.$oncekibirim.' '.$birimgelen.' '.$sonraki.' <a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></thead></table></div>';
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
echo '<th class="bg-light">'.$birimdegismedi.'<a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></thead></table>';
echo '</tr>';
echo '</thead>';
echo '</table>';
echo '</div>';
echo mysqli_error();
 }
}
@mysqli_close($dbh);
?>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
