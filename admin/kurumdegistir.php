<?php
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}
?>
<script language="JavaScript" src="kontrolkurum.js" type="text/javascript">
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
<div id="sonuc2"><form name="form7" action="javascript:void(0)" method="get">
<?php
include("../con_023.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
include("../tanimlaranadizin.php");
$ilseckrgelen=$_GET['selectil'];
$ilceseckrgelen=$_GET['selectilce'];
$kurumgelen=$_GET['kurumgir']; // get metodu ile formdan gelen ge�er al�n�yor
$kurumgelen=replace_tr($kurumgelen);
$asmgelen=$_GET['asmgir']; // get metodu ile formdan gelen ge�er al�n�yor
$asmgelen=replace_tr($asmgelen);
$drgelen=$_GET['drgir']; // get metodu ile formdan gelen ge�er al�n�yor
$drgelen=replace_tr($drgelen);
$asegelen=$_GET['asegir']; // get metodu ile formdan gelen ge�er al�n�yor
$asegelen=replace_tr($asegelen);
$aseungelen=$_GET['aseungir']; // get metodu ile formdan gelen ge�er al�n�yor
$aseungelen=replace_tr($aseungelen);
$resultkurum = @mysqli_query($dbh,"select * from ocak where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$kurumgelen')");
while($sonucum3=mysqli_fetch_array($resultkurum)){
$kurumnom=$sonucum3['ocid'];
$ilnom=$sonucum3['ilinad'];
$ilcenom=$sonucum3['ilce'];
$kurumadi=$sonucum3['socad'];
$asmadi=$sonucum3['asmadi'];
$tbbadi=$sonucum3['dradi'];
$aseadi=$sonucum3['aseadi'];
$aseunv=$sonucum3['aseunvan'];
}
?>
<div class="row mt-1">
<div class="col-md-4 bg-warning text-dark" align="center">
<a href=# onClick="kontrolkurum();" class="btn btn-danger btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> İptal</a>
</div>
<div class="col-md-4 bg-info text-dark mb-1" align="center" style="padding-top:5px;">
<strong><?php $ilcekaydeg="Kurum Kayıt Değiştirme Ekranı"; echo $ilcekaydeg; ?></strong>
</div>
<div class="col-md-4 bg-warning text-dark" align="center">
<a href=# onClick="kurumdegistir();" class="btn btn-success btn-sm nb-1"><i class="fa fa-pencil-square-o fa-lg"></i> Değiştir</a>
</div>
</div>
<div class="row">
<div class="col-md-12 bg-warning text-dark" align="center">
<table class="table table-striped table-primary table-sm table-responsive-lg">
<thead align="center">
<tr>
<th>Değiştirilecek Kurum Adı :  <?php echo $kurumadi;?></th>
</tr>
<tr>
<th class="bg-success">
<input type="hidden" name="krselectilno" id="krselectilno" class="form-control form-control-sm" value="<?php echo $ilnom; ?>">
<input type="hidden" name="krilcegirgelen" id="krilcegirgelen" class="form-control form-control-sm" value="<?php echo $ilcenom; ?>">
<input type="hidden" name="kurumgirgelen" id="kurumgirgelen" value="<?php echo $kurumadi; ?>">
<input id="kurumgir" name="kurumgir"  class="form-control form-control-sm w-50"  type="text" placeholder="Yeni Kurumu Giriniz..." value="<?php echo $kurumadi ;?>" required>
</th>
</tr>
</thead>
</table>
</div>
</div>
<table class="table table-striped table-primary table-sm table-responsive-lg">
<thead align="center">
<tr>
<div class="row">
<div class="col-md-6 bg-warning text-dark" align="center">
<th>
<input id="tbbgir" name="tbbgir" type="text" class="form-control form-control-sm w-75" placeholder="Hekim Adını Giriniz..." value="<?php echo $tbbadi ; ?>" required>
</th>
</div>
<div class="col-md-6 bg-warning text-dark" align="center">
<th>
<input id="asmgir" name="asmgir" type="text" class="form-control form-control-sm w-75" placeholder="ASM-Ana Birim Adını Giriniz..." value="<?php echo $asmadi ; ?>" required>
</th>
</div>
</div>
</tr>
<tr>
<div class="row">
<div class="col-md-6 bg-warning text-dark" align="center">
<th>
<input id="asegir" name="asegir" type="text" class="form-control form-control-sm w-75" placeholder="ASE-Görevli Adını Giriniz..." value="<?php echo $aseadi ; ?>">
</th>
</div>
<div class="col-md-6 bg-warning text-dark" align="center">
<th>
<input id="aseungir" name="aseungir" type="text" class="form-control form-control-sm w-75" placeholder="ASE-Görevli Ünvanını Adını Giriniz..." value="<?php echo $aseunv ; ?>">
</th>
</div>
</div>
</tr>
</thead>
</table>
</form></div>
<?php
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>