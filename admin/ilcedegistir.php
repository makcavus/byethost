<?php
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayý görüntüleme yetkiniz yoktur.";
}
?>
<script language="JavaScript" src="kontrolilce.js" type="text/javascript">
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
<div id="sonuc1"><form name="form6" action="javascript:void(0)" method="get">
<?php
include("../con_023.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
include("../tanimlaranadizin.php");
$ilsecgelen=$_GET['selectilno']; // get metodu ile formdan gelen geðer alýnýyor
$ilcegelen=$_GET['ilcegir']; // get metodu ile formdan gelen geðer alýnýyor
$resultilce = @mysqli_query($dbh,"select * from ilce where(ilinad='$ilsecgelen' and ilcead='$ilcegelen')");
while($sonucum2=mysqli_fetch_array($resultilce)){
$ilcenom=$sonucum2['ilceid'];
$ilnom=$sonucum2['ilinad'];
$ilceadi=$sonucum2['ilcead'];
}
?>
<div class="row mt-1">
<div class="col-md-4 bg-info text-dark" align="center">
<a href=# onClick="kontrolilce();" class="btn btn-danger btn-sm mt-1 mb-1"><i class="fa fa-times-circle fa-lg"></i> <?php echo $iptal;?></a>
</div>
<div class="col-md-4 bg-warning text-dark" align="center" style="padding-top:5px;">
<strong><?php $ilcekaydeg="İlçe Kayıt Değiştirme Ekranı"; echo $ilcekaydeg; ?></strong>
</div>
<div class="col-md-4 bg-info text-dark" align="center">
<a href=# onClick="ilcedegistir();" class="btn btn-success btn-sm mt-1 mb-1"><i class="fa fa-pencil-square-o fa-lg"></i> <?php echo $degistir;?></a>
</div>
</div>
<div class="row">
<div class="col-md-12 bg-warning text-dark" align="center">
<table class="table table-striped table-primary table-sm table-responsive-lg">
<thead align="center">
<tr>
<th><?php $degilceadi="Değiştirilecek İlçe Adı :"; echo $degilceadi.' '.$ilceadi;?></th>
</tr>
<tr>
<th class="bg-success">
<input type="hidden" name="selectilno" id="selectilno" class="form-control form-control-sm" value="<?php echo $ilnom; ?>">
<input type="hidden" name="ilcegirgelen" id="ilcegirgelen" class="form-control form-control-sm" value="<?php echo $ilceadi; ?>">
<input id="ilcegir" name="ilcegir"  class="form-control form-control-sm w-50"  type="text" placeholder="<?php $yeniilce="Yeni İlçeyi Giriniz..."; echo $yeniilce;?>">
</th>
</tr>
</thead>
</table>
</div>
</div>
</form></div>
<?php
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
