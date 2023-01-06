<?php
include("../connect.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
//include("../../tanimlaranadizin.php");
$birimgelen=$_GET['birimgir'];
$birimdeggelen=$_GET['selectbirim'];
//echo "--".$birimgelen."--";
//echo "--".$birimdeggelen."--";
if($birimdeggelen!=NULL){
$kayit="UPDATE birim SET  birim_ad='$birimgelen' where(birim_ad='$birimdeggelen')";
}else{
  exit;
}
if(mysqli_query($dbh,$kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-light">'.$birimdeggelen.' '.$oncekibirim.' '.$birimgelen.' '.$sonraki.' <a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<th class="bg-light">'.$birimdegismedi.'<a href="admin.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>'.$geridon.'</a></th></thead></table>';
echo '</div>';
echo mysqli_error();
 }
@mysqli_close($dbh);
?>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
