<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../bootstrap-4/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap-4/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="duyuru.css">

<script type="text/javascript" src="iletikaydet.js">
</script>
  <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<!--
<style type="text/css">
.renk {font:Arial, Helvetica, sans-serif; font:normal; border:#000000;font-size:11pt;font-weight:bold;padding:0 0px;text-align:left;cursor:default;font-family:trebuchet ms;}

.renk1 {background:#CCFFCC; font:Arial, Helvetica, sans-serif; font:normal; border:#000000;font-size:11pt;color: #000066;font-weight:bold;padding:0 0px;text-align:left;cursor:default;font-family:trebuchet ms;}
</style>-->
</head>

<body style="background-color: black">
<?php
//include('form013/frm013alanlari.php');
//include("index.php");
$birimadlari="ŞUBELER / BİRİMLER";
$tumu="TÜM BİRİMLER";
?>
<div class="container-fluid" style="background-color: #ccffcc">
<table class="table table-sm table-responsive-sm table-bordered" style="background-color:#000000">
<tbody>
<tr>
<td class="text-warning" style="background-color: black;font-weight:bold" align="center"><?php echo $birimadlari; ?></td>
</tr>
<tr bgcolor="#CCFFCC" onMouseover="this.bgColor='#dcdcdc';" onMouseout="this.bgColor='#CCFFCC';">
<td><?php
include('altlink.php');
include('connect.php');

$formsorgusay="select * from gerekli order by birim_idi";
$baslasay=mysql_query($formsorgusay);
$say=mysql_num_rows($baslasay);
if($say==0){
$say="";
}else{
$say=$say;
}
$date = new DateTime();
$bugun=$date->format('d.m.Y');
$oncekihafta=date("d.m.Y",strtotime("-0 day",strtotime($bugun)));
$oncekihafta1=date("d.m.Y",strtotime("-1 day",strtotime($bugun)));
$oncekihafta2=date("d.m.Y",strtotime("-2 day",strtotime($bugun)));
$oncekihafta3=date("d.m.Y",strtotime("-3 day",strtotime($bugun)));
$oncekihafta4=date("d.m.Y",strtotime("-4 day",strtotime($bugun)));
$oncekihafta5=date("d.m.Y",strtotime("-5 day",strtotime($bugun)));
$oncekihafta6=date("d.m.Y",strtotime("-6 day",strtotime($bugun)));
$formsorgu="select count(dosya_tarihi) as tarih from gerekli where(dosya_tarihi='$oncekihafta' or dosya_tarihi='$oncekihafta1' or dosya_tarihi='$oncekihafta2' or dosya_tarihi='$oncekihafta3' or dosya_tarihi='$oncekihafta4' or dosya_tarihi='$oncekihafta5' or dosya_tarihi='$oncekihafta6')";
$basla=mysql_query($formsorgu);
/*$say=mysql_num_rows($basla);
if($say==0){
$say="";
}else{
$say=$say;
}*/
while($baslatar=mysql_fetch_array($basla)){
$dosya_tarihi=$baslatar['dosya_tarihi'];
//echo $dosya_tarihi;

/*$gecen = time() - (7 * 24 * 60 * 60);
//echo $gecen;
$gecenHafta=date('d.m.Y',$gecen);
//echo $gecenHafta;
if($dosya_tarihi>=$gecenHafta){
$yeni='<i class="fa fa-lg fa-hacker-news" aria-hidden="true"></i>';
}else{
$yeni='';
}*/
//echo $say;
if($baslatar['tarih']==0){
$yeni="";
}else{
$yeni='<i class="fa fa-lg fa-hacker-news" aria-hidden="true"></i>';
} }
 echo '<a href="gerekli_formlar.php?birim_idi=0" class="btn btn-sm btn-success text-left text-warning" style="display:block;"><i class="fa fa-folder-open-o fa-sm" aria-hidden="true"></i><strong> '.iconv("iso-8859-9","utf-8",$tumu).' </strong> <span class="badge badge-info" style="border-radius:20px;">'.$say.'</span> '.$yeni.'</a>'; ?></td>
</tr>

<?php

$birimsorgu="select distinct * from birim order by birim_ad";
$basla=mysql_query($birimsorgu);
while($sonucum=mysql_fetch_array($basla)){
$birim_idim=$sonucum['birim_id'];
$birim_adim=$sonucum['birim_ad'];
//echo $birim_idim;

?>
<tr bgcolor="#CCFFCC" onMouseover="this.bgColor='#dcdcdc';" onMouseout="this.bgColor='#CCFFCC';">
<td><?php
$formsorgux="select * from gerekli where(birim_idi='$birim_idim')order by birim_idi";
$baslax=mysql_query($formsorgux);
$sayx=mysql_num_rows($baslax);
if($sayx==0){
$sayx="";
}else{
$sayx=$sayx;
}
//echo $say;
$date = new DateTime();
$bugun=$date->format('d.m.Y');
$oncekihafta=date("d.m.Y",strtotime("-0 day",strtotime($bugun)));
$oncekihafta1=date("d.m.Y",strtotime("-1 day",strtotime($bugun)));
$oncekihafta2=date("d.m.Y",strtotime("-2 day",strtotime($bugun)));
$oncekihafta3=date("d.m.Y",strtotime("-3 day",strtotime($bugun)));
$oncekihafta4=date("d.m.Y",strtotime("-4 day",strtotime($bugun)));
$oncekihafta5=date("d.m.Y",strtotime("-5 day",strtotime($bugun)));
$oncekihafta6=date("d.m.Y",strtotime("-6 day",strtotime($bugun)));
//echo $oncekihafta;
//echo $bugun; // 31.07.2012
//echo $gecenHafta;
$formsorguy="select count(dosya_tarihi) as tarih from gerekli where(birim_idi='$birim_idim' and dosya_tarihi='$oncekihafta' or birim_idi='$birim_idim' and dosya_tarihi='$oncekihafta1' or birim_idi='$birim_idim' and dosya_tarihi='$oncekihafta2' or birim_idi='$birim_idim' and dosya_tarihi='$oncekihafta3' or birim_idi='$birim_idim' and dosya_tarihi='$oncekihafta4' or birim_idi='$birim_idim' and dosya_tarihi='$oncekihafta5' or birim_idi='$birim_idim' and dosya_tarihi='$oncekihafta6')";
$sorgu=mysql_query($formsorguy);
while($tarihsay=mysql_fetch_array($sorgu)){
//echo "x-".$tarihsay['tarih']."-x";
if($tarihsay['tarih']==0){
$sayy="";
}else{
$sayy='<i class="fa fa-lg fa-hacker-news" aria-hidden="true"></i>';
}
 echo '<a href="gerekli_formlar.php?birim_idi='.$birim_idim.'" class="btn btn-success btn-sm text-left text-warning" style="display:block;"><i class="fa fa-folder-open-o fa-sm" aria-hidden="true"></i><strong> '.iconv("iso-8859-9","utf-8",$birim_adim).' </strong> <span class="badge badge-info" style="border-radius:20px;">'.$sayx.'</span>'.$sayy.'</a>'; ?></td>
</tr>
<?php
}}
?>
</tbody>
</table>
</div>

<hr>

<table class="table table-sm table-responsive-sm table-hover table-striped" style="background-color:#CCFFCC">
<tbody>
<tr>
 <td width="100%" align="center" style="border-color:black;"><a href="#top" _fcksavedurl="#top" _fcksavedurl="#top"><img src="../images/basadon.png"/></a>
    </td>
</tr>
<tr>
<td style="border-color:black;"><div align="center">
<?php echo iconv("utf-8","utf-8",$link1); ?>
<?php echo iconv("utf-8","utf-8",$link2); ?>
<?php echo iconv("utf-8","utf-8",$link3); ?>
<?php echo iconv("utf-8","utf-8",$link4); ?>
<?php echo iconv("utf-8","utf-8",$link5); ?>
<?php echo iconv("utf-8","utf-8",$link6); ?>
<?php echo iconv("utf-8","utf-8",$link7); ?>
<?php //echo iconv("utf-8","utf-8",$link8); ?>
<?php echo iconv("utf-8","utf-8",$link9); ?>
<?php echo iconv("utf-8","utf-8",$link10); ?>
<?php echo iconv("utf-8","utf-8",$medya); ?>
<div id="fon" class="arka_fon"></div>
     <?php echo iconv("utf-8","utf-8",$telif); ?>
   </div>
 </td>
 </tr>
</table>
<div class="modal fade" id="iletiyaz" tabindex="-1" role="dialog" aria-labelledby="iletiyazLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php $labelulas="Formu doldurarak düşüncelerinizi bize iltebilirsiniz."; echo $labelulas; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<div class="form-group">
 <form class="form" name="bizeulasin" id="bizeulasin" method="GET" action="javascript:void(0)" onKeyUp="highlight(event)" onClick="highlight(event)">

<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">
<thead class="thead-dark" align="center">
<tbody>
<tr>
           <td><font class="Yazi">Ad Soyad:</font></td>
           <td>
             <input name="tarih" type="hidden" id="tarih" class="form-control form-control-sm" value="<?php $tarih=date("Y-m-d"); echo $tarih; ?>">
             <input name="adsoyad" type="text" id="adsoyad" class="form-control form-control-sm w-100 sm" tabindex="1" required></td>
           </tr>
           <tr>
             <td><font class="Yazi">Telefon:</font></td>
             <td><input name="telefon" type="text" id="telefon" class="form-control form-control-sm w-100 sm" tabindex="2"></td>
           </tr>
           <tr>
             <td><font class="Yazi">E-mail Adresi:</font></td>
             <td><input name="emailadresi" type="text" id="emailadresi" class="form-control form-control-sm w-100 sm" tabindex="3" required></td>
           </tr>
           <tr>
             <td><font class="Yazi"><?php $labeldusunce="Düşünceleriniz:"; echo $labeldusunce; ?></font></td>
             <td><textarea name="dusunceniz" rows="5" id="dusunceniz" class="form-control w-100" tabindex="4" required></textarea></td>
           </tr>
           
 
 </thead>
 </tbody>
 </table>
 </form>
      </div>
      <div class="modal-footer">
      <a href="#" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm btn-close" data-dismiss="modal"><i class="fa fa-times-circle fa-lg"></i><?php $labeliptal=" İptal"; echo $labeliptal; ?></a>
      <a href="#" onClick="iletiyiekle();" class="btn btn-primary btn-sm ml-3"><i class="fa fa-check fa-lg"></i><?php $labelgonder=" Gönder"; echo $labelgonder; ?></a>  
      
           
      
      </div>
      <div id="sonuciletiyaz"></div>
    </div>
  </div>
</div>  
</div>
<!-- Optional JavaScript -->
					<!-- jQuery first, then Popper.js, then Bootstrap JS -->
					<script src="../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
					<script src="../bootstrap-4/popper.js"></script>
<script src="../bootstrap-4/js/bootstrap.min.js"></script>

</body>
</html>
