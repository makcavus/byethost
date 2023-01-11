<?php
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}
?>
<script language="JavaScript" src="kontrolil.js" type="text/javascript">
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
<div id="sonuc"><form name="form5" action="javascript:void(0)" method="get">
<?php
include("../con_023.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
include("../tanimlaranadizin.php");
$ilgelen=$_GET['ilgir'];
$resultvyil = @mysqli_query($dbh,"select * from il where(ilad='$ilgelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
$ilnom=$sonucum['ilid'];
$iladim=$sonucum['ilad'];
//echo $iladim;
}
?>
<div class="row mt-1">
<div class="col-md-4 bg-info text-dark" align="center">
<a href=# onClick="kontrolil();" class="btn btn-danger btn-sm mt-1 mb-1"><i class="fa fa-times-circle fa-lg"></i> İptal</a>
</div>
<div class="col-md-4 bg-warning text-dark" align="center" style="padding-top:5px;">
<strong><?php echo $ilkaydeg; ?></strong>
</div>
<div class="col-md-4 bg-info text-dark" align="center">
<a href=# onClick="ildegistir();" class="btn btn-success btn-sm mt-1 mb-1"><i class="fa fa-pencil-square-o fa-lg"></i> Değiştir</a>
</div>
</div>
<div class="row">
<div class="col-md-12 bg-warning text-dark" align="center">
<table class="table table-striped table-primary table-sm table-responsive-lg">
<thead align="center">
<tr>
<th>Değiştirilecek İl Adı :  <?php echo $iladim;?></th>
</tr>
<tr>
<th class="bg-success">
<input type="hidden" name="selectil" id="selectil" class="form-control form-control-sm" value="<?php echo $iladim; ?>" placeholder="Yeni İli Giriniz...">
<input id="ilgir" name="ilgir"  class="form-control form-control-sm w-50"  type="text" placeholder="Yeni İli Giriniz...">
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
