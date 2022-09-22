<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
<!--
<link href="../../Style.css" rel="stylesheet" type="text/css"/>
<link href="arkakara.css" rel="stylesheet" type="text/css"/> -->
<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>

<script language="JavaScript" src="arkakara.js" type="text/javascript">
</script>

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
//   -->
//<body onload="JavaScript:timedRefresh(100000);">
</script>
</head>

<body style="background:#000000">
<?php
$mailto="mailto:";
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
$gelenid=$_GET["iltiid"];
//echo $gelenid;
//echo "xxxxxxxxxxxxxxxxxx";
include("../../connect.php");
//include("tanimveyetkiler.php");
include('../frm013alanlari.php');

$resultuser = @mysql_query("select * from bizeulasin where(iltiid='$gelenid')");

while($rowuser=mysql_fetch_array($resultuser)) {

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
        <h5 class="card-title bg-success" align="left"><?php $labelulas="için Cevap Yazma"; echo trsuz($vadi).' '.$labelulas; ?><a href="ilekle.php" style="text-decoration:none" tabindex="6"  class="close close-lg" aria-label="Close">
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
 <input name="AdSoyad" type="text" id="AdSoyad" tabindex="1" disabled="disabled" value="<?php echo trsuz($vadi); ?>" class="form-control form-control-sm w-100" required></td>
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
 <td><textarea name="Dusunceniz" rows="7" id="Dusunceniz" tabindex="4" disabled="disabled" class="form-control w-100"><?php echo trsuz($vileti); ?></textarea></td>
 </tr>
 <tr>
 <th>Cevap:</th>
 <td>
 <input name="CTarih" type="hidden" id="CTarih" value="<?php $tarih=date("Y-m-d"); echo $tarih; ?>" class="form-control w-100">
 <textarea name="Cevap" rows="7" id="Cevap" tabindex="1" class="form-control w-100"><?php echo trsuz($vcevap); ?></textarea>
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
	  <a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm btn-close" data-dismiss="modal"><i class="fa fa-reply-all fa-lg"></i> İptal</a>
      <a href="#" onclick="duzenleileti();" class="btn btn-primary btn-sm ml-1"><i class="fa fa-check fa-lg"></i> Cevapla</a>  
	  <div id="sonuciletiduz"></div>
	  </div>
	  </div>
    </div>
</div>
</div>
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>
