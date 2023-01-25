<?php
session_start();
include("../assets/sablon/form013/header.php");
include("../assets/sablon/form013/sidebar.php");
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}else{
?>
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>
<script language="JavaScript" src="arkakara.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/JavaScript">
<!--
function reloadPage(id) {    document.location.href = location.href + '?id=' + id.value; } 
</script>
<script type="text/JavaScript">
<!--
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}
</script>
<body style="background:#000000">
<?php
$mailto="mailto:";
$gelenid=$_GET["iltiid"];
include("../connect.php");
//include("tanimveyetkiler.php");
include('../form013/frm013alanlari.php');
$resultuser = @mysqli_query($dbh,"select * from bizeulasin where(iltiid='$gelenid')");
while($rowuser=mysqli_fetch_array($resultuser)) {
$viletiid=$rowuser['iltiid'];
$vtarih=$rowuser['tarih'];
$vadi=$rowuser['adsoyad'];
$vtelefon=$rowuser['telefon'];
$vemail=$rowuser['emailadresi'];
$vileti=$rowuser['dusunceniz'];
$vctarih=$rowuser['cevaptarihi'];
$vcevap=$rowuser['cevap'];
$vyayinda=$rowuser['yayinda'];
?>
 <div class="row" style="background:#000000">
  <div class="col-md-8 offset-md-2 mt-3" style="background:#000000">
    <div class="card">
      <div class="card-body">
	  <div class="card-header bg-success" align="left">
        <h5 class="card-title bg-success" align="left"><?php $vadi=="" ? $vadi="..." : $vadi; $labelulas="için Cevap Yazma"; echo $vadi.' '.$labelulas; ?>
		<a href="admin.php" style="text-decoration:none" tabindex="6"  class="close close-lg" aria-label="Close">
          <span aria-hidden="true"><h4>&times;</h4></span>
        </a></h5>
		</div>
        <div class="card-text">		
<form action="CevapKayit.php" name="Cevap" id="Cevap" method="GET">
 <div class="form-group">
<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">
<thead class="thead-dark" align="center">
<tbody>
<tr>
<th colspan="1">Adı Soyadı:</th>
 <td colspan="1">
 <input name="Id" type="hidden" id="Id" value="<?php echo $viletiid; ?>" class="form-control form-control-sm w-100 sm">
 <input name="Tarih" type="hidden" id="Tarih" value="<?php echo $vtarih; ?>" class="form-control form-control-sm w-100">
 <input name="AdSoyad" type="text" id="AdSoyad" tabindex="1" disabled="disabled" value="<?php echo $vadi; ?>" class="form-control form-control-sm w-100" required></td>
 </tr>
 <tr>
 <th>Telefonu:</th>
 <td><input name="Telefon" type="text" id="Telefon" tabindex="2" disabled="disabled" value="<?php echo $vtelefon; ?>" class="form-control form-control-sm w-100"></td>
 </tr>
 <tr>
 <th>E-mail Adresi:</th>
 <td><input name="EmailAdresi" type="email" id="EmailAdresi" tabindex="3" disabled="disabled" value="<?php echo $vemail; ?>" class="form-control form-control-sm w-100"></td>
 </tr>
 <tr>
 <th>Gelen İletisi:</th>
 <td><textarea name="Dusunceniz" rows="7" id="Dusunceniz" tabindex="4" disabled="disabled" class="form-control w-100"><?php echo $vileti; ?></textarea></td>
 </tr>
 <tr>
 <th>Cevap:</th>
 <td>
 <input name="CTarih" type="hidden" id="CTarih" value="<?php $tarih=date("Y-m-d"); echo $tarih; ?>" class="form-control w-100">
 <textarea name="Cevap" rows="7" id="Cevap" tabindex="1" class="form-control w-100"><?php echo $vcevap; ?></textarea>
 </td>
 </tr>
 <tr>
 <th>Yayınlansın mı ?</th>
 <td>
 <?php
 if($vyayinda==0){?>
 <select class="w-100 form-control form-control-sm" name="yayin" id="yayin">
	 <option value="0">Hayır</option>
	 <option value="1">Evet</option>
	 </select>
<?php		
 }else{?>
 <select class="w-100 form-control form-control-sm" name="yayin" id="yayin">
	<option value="1">Evet</option>
	 <option value="0">Hayır</option> 
	 </select>
<?php	 
 }
 ?>
 </td>
	</tr>
 </thead>
 </tbody>
 </table>
 </div>
		  </form>

</div>
<?php
}
?>       
		<div class="card-footer" align="center">
	  <a href="<?php echo $mailto.''.$vemail; ?>" class="btn btn-secondary btn-sm mr-1"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i> Email Gönder</a>
	  <a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm btn-close" data-dismiss="modal"><i class="fa fa-reply-all fa-lg"></i> İptal</a>
      <a href="#" onclick="duzenleileti();" class="btn btn-primary btn-sm ml-1"><i class="fa fa-check fa-lg"></i> Cevapla</a>  
	  <div id="sonuciletiduz"></div>
	  </div>
	  </div>
    </div>
</div>
</div>
<?php
}
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>