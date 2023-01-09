<?php
include("../connect.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
$tipgelen=$_GET['tipgir'];
$tipgelen=replace_tr($tipgelen);
$tipdeggelen=$_GET['selecttip'];
$tipdeggelen=replace_tr($tipdeggelen);
$kayit_kontrol=mysqli_query($dbh,"SELECT * from kurumtipi where tipi='$tipgelen'");
$kayit_say=mysqli_num_rows($kayit_kontrol);
//echo $kayit_say;
if($tipgelen==NULL){
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
}elseif($tipgelen!=NULL and $kayit_say>=1){
  echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
  echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
  echo '<thead align="center">';
  echo '<tr>';
  echo '<th>Durum</th>';
  echo '</tr>';
  echo '<tr>';
  echo '<th class="bg-light">Bu kurum tipi önceden kaydedilmiş.<a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></thead></table>';
  echo '</tr>';
  echo '</thead>';
  echo '</table>';
  echo '</div>';  
}else{
$kayit="UPDATE kurumtipi SET  tipi='$tipgelen' where(tipi='$tipdeggelen')";
//}
if(mysqli_query($dbh,$kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
'<tr>';
echo '<th>Durum</th>';
echo '</tr>';
'<tr>';
echo '<th class="bg-light">'.$tipdeggelen.' '.$oncekitip.' '.$tipgelen.' '.$sonraki.'<a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></font></label></th></table></div>';
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
echo '<th class="bg-light">'.$tipdegismedi.'</label><a href=# onClick="kontroltip();"><a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>'.$geridon.'</a></font></label></th></table></div>';
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
