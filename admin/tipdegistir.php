<?php
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}
?>
<script language="JavaScript" src="ktipikontrol.js" type="text/javascript">
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
<div id="sonuc"><form name="form7" action="javascript:void(0)" method="get">
<?php
$iptal="İptal";
$degistir="Değiştir";
$sil="Sil";
$kaydet="Kaydet";
include("../connect.php");
include("../fonksiyonlar.php");
$tipdegilismi="Değiştirilecek Kurum Tipi:";
$tipkaydeg="Kurum Tipi Kayıt Değiştirme Ekranı";
include("../form013/frm013alanlari.php");
$tipgelen=$_GET['tipgir'];
$tipgelen=replace_tr($tipgelen);
$resultvyil = @mysqli_query($dbh,"select * from kurumtipi where(tipi='$tipgelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
$tipnom=$sonucum['tipid'];
$tipadim=$sonucum['tipi'];
}
?>
<div class="row mt-1">
<div class="col-md-4 bg-info text-dark" align="center">
<a href=# onClick="kontroltip();" class="btn btn-success btn-sm mt-1 mb-1""><i class="fa fa-times-circle fa-lg"></i> <?php echo $iptal;?></a>
</div>
<div class="col-md-4 bg-warning text-dark" align="center" style="padding-top:5px;">
<strong><?php echo $tipkaydeg; ?></strong>
</div>
<div class="col-md-4 bg-info text-dark" align="center">
<a href=# onClick="tipdegistir();" class="btn btn-success btn-sm mt-1 mb-1"><i class="fa fa-pencil-square-o fa-lg"></i> <?php echo $degistir;?></a>
</div>
</div>
<div class="row">
<div class="col-md-12 bg-warning text-dark" align="center">
<table class="table table-striped table-primary table-sm table-responsive-lg">
<thead align="center">
<tr>
<th><?php echo $tipdegilismi.' '.$tipadim;?></th>
</tr>
<tr>
<th class="bg-success">
<input type="hidden" name="selecttip" id="selecttip" class="form-control form-control-sm" value="<?php echo $tipadim; ?>" placeholder="Yeni Kurum Tipini Giriniz...">
<input id="tipgir" name="tipgir"  class="form-control form-control-sm w-50"  type="text" placeholder="Yeni Kurum Tipini Giriniz...">
</th>
</tr>
</thead>
</table>
</div>
</div>
   </form></div>   
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
