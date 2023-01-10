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
echo $ilgelen;
echo "<br>";
echo $ildeggelen;
echo $kayit_say;
exit;






$kayit="UPDATE il SET  ilad='$ilgelen' where(ilad='$ildeggelen')";
//}
if(mysql_query($kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-light">'.trsuz($ildeggelenx).' '.trsuz($onceki).' '.$ilgelenx.' '.trsuz($sonraki).' <a href="ilekle.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> Geridön</a></th></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<th class="bg-light">İl Değiştirelemedi...<a href="ilekle.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> Geridön</a></th></thead></table>';
echo '</div>';
echo mysql_error();
 }

@mysql_close($dbh);
 ?>
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>

 </body>
</html>