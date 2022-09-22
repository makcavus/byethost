<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Kullanıcı Düzenleme Paneli</title>

 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="duyuru.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
  <script type="text/javascript" src="jquery-latest.pack.js"></script>
  <script type="text/JavaScript">
<style>
p {
	margin:0px 1px 0px 0px;
}
</style>
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115962978-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115962978-1');
</script>
<script type="text/javascript" src="iletikaydet.js">

</script>

  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>

</head>
<body style="background-color:#000000" onload="JavaScript:timedRefresh(10000000);">
<?php
include("connect.php");
//include("tanimveyetkiler.php");
//include('form013/frm013alanlari.php');
include('altlink.php');

$resultuser = @mysql_query("select * from bizeulasin where(cevap is not null and yayinda='1') order by tarih desc");

?>

<div class="container-fluid">
<div><h6 class="text-warning" align="center">SIK SORULAN SORULAR</h6></div>
<div class="panel-group" id="accordion">
<?php
while($rowuser=mysql_fetch_array($resultuser)) {
$viletiid=$rowuser['iltiid'];
$vileti=$rowuser['dusunceniz'];
$vcevap=$rowuser['cevap'];
$vctarih=$rowuser['cevaptarihi'];

$tarihorg=substr($vctarih,0,10);
$yil=substr($tarihorg,0,4);
$ay=substr($tarihorg,5,2);
$gun=substr($tarihorg,8,2);
$vctarihn=$gun.'.'.$ay.'.'.$yil;
?>
<p>
<div class="row bg-warning">
<div class="col-md-12 text-dark" align="left" style="background-color:#CCFFCC"><h6><a class="btn-block text-primary" style="text-decoration:none;" href="#<?php echo $viletiid;?>" data-toggle="collapse" data-parent="#accordion"><strong><?php echo trsuz($vileti);?></strong></a></h6></div>
</div>
<div id="<?php echo $viletiid;?>" class="panel-collapse collapse in">
<div class="row bg-primary">
<div class="col-md-12 ml-auto mt-1 mb-1 bg-light" align="left"><?php echo trsuz($vctarihn).'-'. trsuz($vcevap);?></div>
</div>
</div>
</p>
<?php } ?>

</div>
</div>
<hr>

<table class="table table-success table-sm table-responsive-sm table-bordered table-hover" style="border-color:black;">

  <tr>

    <td width="100%" align="center" style="border-color:black;"><a href="#top" _fcksavedurl="#top" _fcksavedurl="#top"><img src="../images/basadon.png"/></a>

    </td>

  </tr>

  <tr>

    <td style="border-color:black;"><div align="center">

      <?php echo $link1; ?>

      <?php echo $link2; ?>

      <?php echo $link3; ?>

      <?php echo $link4; ?>

      <?php echo $link5; ?>

      <?php echo $link6; ?>

      <?php echo $link7; ?>

      <?php echo $link8; ?>

      <?php echo $link9; ?>

      <?php echo $medya; ?>

      





<!--

      <div id="sifre" class="giris_zemin">

        <form action="BizeUlasinKayit.php" name="BizeUlasin" id="BizeUlasin" method="post">

         <table width="100%" border="0" cellspacing="2" cellpadding="2">

           <tr><td><font size="3px" style="color:blue" face="tahoma">Bize Ula��n</font></td><td align="right"><a href="duyuru.php"  tabindex="6"><img src="images/kapat.png" title="�ptal et"></a></td></tr>

           <tr>

            <td colspan="2"><font class="Yazi">Formu doldurarak d���ncelerinizi bize iltebilirsiniz.</font></td>

          </tr>

          <tr>

           <td><font class="Yazi">Ad Soyad:</font></td>

           <td>

             <input name="Tarih" type="hidden" id="Tarih" size="50" class="Kutucuk" value="<?php $tarih=date("Y-m-d"); echo $tarih; ?>">

             <input name="AdSoyad" type="text" id="AdSoyad" size="50" class="Kutucuk" tabindex="1"></td>

           </tr>

           <tr>

             <td><font class="Yazi">Telefon:</font></td>

             <td><input name="Telefon" type="text" id="Telefon" size="50" class="Kutucuk" tabindex="2"></td>

           </tr>

           <tr>

             <td><font class="Yazi">E-mail Adresi:</font></td>

             <td><input name="EmailAdresi" type="text" id="EmailAdresi" size="50" class="Kutucuk" tabindex="3"></td>

           </tr>

           <tr>

             <td><font class="Yazi">Düşünceleriniz:</font></td>

             <td><textarea name="Dusunceniz" cols="38" rows="4" id="Dusunceniz" class="Kutucuk" tabindex="4"></textarea></td>

           </tr>

           <tr>

             <td>&nbsp;</td>

             <td align="right"><input type="submit" name="Submit" value="Formu G�nder" class="Kutucuk" tabindex="5"></td>

           </tr>

         </table>

       </form>

     </div>

   -->

     <div id="fon" class="arka_fon"></div>

     <?php echo $telif; ?>

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

             <td><input name="emailadresi" type="email" id="emailadresi" class="form-control form-control-sm w-100 sm" tabindex="3" required></td>

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
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>

</body>

</html>