<?php
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}
else{
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
<script language="JavaScript" src="kontroluye.js" type="text/javascript">
</script>	
<script type="text/javascript" src="jquery-latest.min.js"></script> 
    <script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script> 
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
<div id="drdiv"><form name="form8" action="javascript:void(0)" method="get">
<?php
include("../con_023.php");
include("../form013/tanimveyetkiler.php");
include('../form013/frm013alanlari.php');
$ilseckrgelen=$_GET['uyekodum'];
//$ilceseckrgelen=$_GET['doktoradi'];
//$kurumgelen=$_GET['kuladi'];
//$asmgelen=$_GET['kulsifre'];
$resultkurum = @mysqli_query($dbh,"select * from uyeler where(uyekod='$ilseckrgelen')");
while($sonucum3=mysqli_fetch_array($resultkurum)){
$kurumnom=$sonucum3['uyeno'];
$ilnom=$sonucum3['uyead'];
$ilcenom=$sonucum3['uyekim'];
$kurumadi=$sonucum3['uyesifre'];
$asmadi=$sonucum3['uyekod'];
}
?>
<div class="row mt-1">
<div class="col-md-4 bg-warning text-dark" align="center">
<a href=# onClick="kontroluye();" class="btn btn-danger btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> İptal</a>
</div>
<div class="col-md-4 bg-info text-dark mb-1" align="center" style="padding-top:5px;">
<strong><?php $ilcekaydeg="Kullanıcı Kayıt Değiştirme Ekranı"; echo $ilcekaydeg; ?></strong>
</div>
<div class="col-md-4 bg-warning text-dark" align="center">
<a href=# onClick="uyedegistir();" class="btn btn-success btn-sm mb-1"><i class="fa fa-pencil-square-o fa-lg"></i> Değiştir</a>
</div>
</div>
<table class="table table-striped table-primary table-sm table-responsive-lg">
<thead align="center">
<tr>
<th>
<div class="form-row">
<input type="hidden" name="krselectilno" id="krselectilno" value="<?php echo $asmadi ;?>">
    <div class="col-6 text-dark" align="center">	
	<input type="text" class="form-control form-control-sm w-100" name="kurumgirdeg" id="kurumgirdeg" value="<?php echo $ilcenom ; ?>" readonly>
    </div>
    <div class="col-6 text-dark" align="center">
      <input type="text" name="asmgir" id="asmgir" class="form-control form-control-sm w-100" value="<?php echo $ilnom ; ?>" required>
	  <div class="invalid-feedback">Lütfen yeni kullanıcı adı belirleyiniz</div>
    </div>
	<div class="col-0 text-dark" align="center">
      <input type="hidden" name="tbbgir" id="tbbgir" class="form-control form-control-sm w-100" value="<?php echo $kurumadi ; ?>" required>
     <div class="invalid-feedback">Lütfen yeni kullanıcı şifresi oluşturun</div>
	 </div>	  
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