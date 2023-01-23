<?php
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
    // timeout periyodu, sn olarak
    $inactive = 1300;
    if(isset($_SESSION['timeout']) ) {
        $session_life = time() - $_SESSION['timeout'];
        if($session_life > $inactive)
        {
            unset($_SESSION['uye']); // oturumda olan değişkenimiz siliniyor
            session_destroy(); header("Location: cikis.php"); }
    }
    $_SESSION['timeout'] = time();
    header("Cache-Control: no-cache,no-store");
?>
<script language="JavaScript" src="kaydet.js" type="text/javascript">
</script>	
<script type="text/javascript" src="../jquery-latest.min.js"></script> 
    <script type="text/javascript" src="../jquery.maskedinput-1.2.1.pack.js"></script> 
    <script type="text/javascript"> 
        $(function() { 
            $("#masktest").mask("99.99.9999"); 
 $("#masktest1").mask("99.99.9999");
            // Contents of textboxes will be selected when receiving focus. 
            $("input[type=text]") 
                .focus(function() { 
                    $(this).select(); 
                }); 
        }); 
    </script> 
<?php
include("../con_023.php");
include("../form013/tanimveyetkiler.php");
include('../form013/frm013alanlari.php');
$uyekodu=$_GET['uyekodum'];
$resultkod = @mysqli_query($dbh,"select * from ocak where(socad='$uyekodu')");
while($rowkod=mysqli_fetch_array($resultkod)) {
$dradim=$rowkod['dradi'];
}
?>
<div id="drdiv"><form name="girdiekle" action="javascript:void(0)" method="get">
  <div class="row mt-1">
<div class="col-md-4 bg-warning text-dark" align="center">
<a href=# onClick="kontroluye();" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> İptal</a>
</div>
<div class="col-md-4 bg-info text-dark mb-1" align="center" style="padding-top:5px;">
<strong><?php $ilcekaydeg="Yeni Kullanıcı Ekleme Ekranı"; echo $ilcekaydeg; ?></strong>
</div>
<div class="col-md-4 bg-warning text-dark" align="center">
<a href=# onClick="uyeekle();" class="btn btn-primary btn-sm nb-1"><i class="fa fa-floppy-o fa-lg"></i> Kaydet</a>
</div>
</div>
<table class="table table-striped table-primary table-sm table-responsive-lg">
<thead align="center">
<tr>
<th>
<div class="form-row">
<input type="hidden" name="kulkay" id="kulkay" value="<?php echo $uyekodu; ?>">
    <div class="col-4 text-dark" align="center">
	<input type="text" class="form-control form-control-sm w-100" name="doktoradi" id="doktoradi" value="<?php echo $dradim; ?>">
    </div>
    <div class="col-4 text-dark" align="center">
      <input type="text" name="kuladi" id="kuladi" class="form-control form-control-sm w-100" placeholder="Kullanıcı Adı Belirleyin" required>
	  <div class="invalid-feedback">Lütfen bir kullanıcı adı belirleyiniz</div>
    </div>
	<div class="col-4 text-dark" align="center">
      <input type="text" name="kulsifre" id="kulsifre" class="form-control form-control-sm w-100" placeholder="Kullanıcı Şifresi Belirleyin" required>
     <div class="invalid-feedback">Lütfen bir kullanıcı şifresi oluşturun</div>
	 </div>
	 
	 <div id="uyealan"></div>
   </div>
   </div>
</th>
   </tr>
   </thead>
   </table>
</form></div>
<?php
@mysqli_close($dbh) ;
include("../assets/sablon/form013/footer.php");
}
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>