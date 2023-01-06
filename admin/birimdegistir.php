<?php
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}
?>
<script language="JavaScript" src="kontrol.js" type="text/javascript">
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
<div id="sonuc"><form name="form6" action="javascript:void(0)" method="get">
<?php
include("../connect.php");
include("../form013/frm013alanlari.php");
$birimgelen=$_GET['birimgir']; // get metodu ile formdan gelen ge�er al�n�yor
$resultvyil = @mysqli_query($dbh,"select * from birim where(birim_ad='$birimgelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
$ilnom=$sonucum['birim_id'];
$birimadim=$sonucum['birim_ad'];
//echo $iladim;
}
?>
<div class="row mt-1">
<div class="col-md-4 bg-info text-dark" align="center">
<a href=# onClick="kontrolbirim();" class="btn btn-danger btn-sm mt-1 mb-1"><i class="fa fa-times-circle fa-lg"></i> <?php echo "İptal";?></a>
</div>
<div class="col-md-4 bg-warning text-dark" align="center" style="padding-top:5px;">
<strong><?php echo $birimkaydeg; ?></strong>
</div>
<div class="col-md-4 bg-info text-dark" align="center">
<a href=# onClick="birimdegistir();" class="btn btn-success btn-sm mt-1 mb-1"><i class="fa fa-pencil-square-o fa-lg"></i> <?php echo "Değiştir";?></a>
</div>
</div>
<div class="row">
<div class="col-md-12 bg-warning text-dark" align="center">
<table class="table table-striped table-primary table-sm table-responsive-lg">
<thead align="center">
<tr>
<th><?php echo "Değiştirilecek Şube/Birim Adı :";?>  <?php echo $birimadim;?></th>
</tr>
<tr>
<th class="bg-success">
<input type="hidden" name="selectbirim" id="selectbirim" class="form-control form-control-sm" value="<?php echo $birimadim; ?>" placeholder="Yeni Birimi Giriniz...">
<input id="birimgir" name="birimgir"  class="form-control form-control-sm w-50"  type="text" placeholder="Yeni Birimi Giriniz...">
</th>
</tr>
</thead>
</table>
</div>
</div>
</form></div>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
