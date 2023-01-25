<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Serik İlçe Sağlık Müdürlüğü</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="duyuru.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-4/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/styles.css">
<link rel="stylesheet" href="assets/css/navbar_style.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115962978-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-115962978-1');
</script>
<style>
  body{margin:0 0px;cursor:default;background-color:#000000;}
</style>
</head>
<body>
<?php
include('ilkon.php');
?>
<script type="text/javascript" src="iletikaydet.js">
</script>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript">
var aktif = 1; var timer; var adet;
var ttaktif = 1; var timer; var ttadet;
$(document).ready(function(){
$("#manset").show();
$("#manset div").hide();
$("#manset div:first").show();
adet = $("#manset div").length-1;
sayfalar();
renk(1);
timer = setInterval(degistir,20000);
$("#hint").show();
$("#hint div").hide();
$("#hint div:first").hide();
ttadet = $("#hint div").length;
ttsayfalar();
ttrenk(1);
timer = setInterval(ttdegistir,15000);
});
function degistir()
{
$("#manset div:nth-child("+aktif+")").slideUp();
aktif = (aktif + 1) % adet;
if(aktif == 0) aktif = adet;
$("#manset div:nth-child("+aktif+")").slideDown();
renk(aktif);
}
function tikla(deger)
{
renk(deger);
$("#manset div:nth-child("+aktif+")").slideUp();
aktif = deger;
$("#manset div:nth-child("+aktif+")").slideDown();
clearInterval(timer);
timer = setInterval(degistir,20000);
}
function renk(deger)
{
$("#sayfa_no span").css("background-color","#CCFFCC")
$("#sayfa_no span:nth-child("+deger+")").css("background-color","yellow");
}
function ttdegistir()
{
$("#hint div:nth-child("+ttaktif+")").slideUp(0);
ttaktif = (ttaktif + 1) % ttadet;
if(ttaktif == 0) ttaktif = ttadet;
$("#hint div:nth-child("+aktif+")").slideDown(0);
ttrenk(ttaktif);
}
function tttikla(ttdeger)
{
ttrenk(ttdeger);
$("#hint div:nth-child("+ttaktif+")").slideUp(0);
      ttaktif = ttdeger;
      $("#hint div:nth-child("+ttaktif+")").slideDown(0);
      clearInterval(timer);
      timer = setInterval(degistir,8000);
    }
    function ttrenk(ttdeger)
    {
      $("#hint_no span").css("background-color","black")
      $("#hint_no span:nth-child("+ttdeger+")").css("background-color","black");
    }
    function gizle()
    {
      $("#hint div").hide();
      clearInterval(timer);
      timer = setInterval(degistir,8000);
    }
    function sayfalar()
    {
      var sayfa_no = "";
      for(var i = 1; i < adet ; i++)
      {
        sayfa_no += "<span class='btn btn-sm btn-success bg-succes text-primary' style='border-radius: 50px;' onClick=tikla("+i+") onMouseOver=tttikla("+i+") onMouseOut=gizle()>"+i+"</span>"
      }
      $("#sayfa_no").html(sayfa_no);
    }
  </script>
  <div id="manset">
  <div>
    <table width="100%" border="1" class="table-success">
     <th class="resimbaslikenboy" colspan="1"><?php echo '<span class="manset_resim">'.$konum1r.'</span>' ?></th>
     <th class="duyurubaslikenboy"><?php echo '<span class="manset_serit">'.$konum1k.'</span>' ?></th>
     <tr>
     <th class="resimkisimenboy"><img class="ximg" src="admin/<?php echo $resim1; ?>"/></th>
     <th class="duyurukisimenboy"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo1.'</font></span>' ?></th>
    </tr>
  </table>
</div>
<div>
  <table width="100%" border="1" class="table-success">
    <th class="resimbaslikenboy" colspan="1"><?php echo '<span class="manset_resim">'.$konum2r.'</span>' ?></th>
    <th class="duyurubaslikenboy"><?php echo '<span class="manset_serit">'.$konum2k.'</span>' ?></th>
    <tr>
      <th class="resimkisimenboy"><img class="ximg" src="admin/<?php echo $resim2; ?>"/></th>
      <th class="duyurukisimenboy"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo2.'</font></span>' ?></th>
    </tr>
  </table>
</div>
<div>
  <table width="100%" border="1" class="table-success">
    <th class="resimbaslikenboy" colspan="1"><?php echo '<span class="manset_resim">'.$konum3r.'</span>' ?></th>
    <th class="duyurubaslikenboy"><?php echo '<span class="manset_serit">'.$konum3k.'</span>' ?></th>
    <tr>
      <th class="resimkisimenboy"><img class="ximg" src="admin/<?php echo $resim3; ?>"/></th>
      <th class="duyurukisimenboy"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo3.'</font></span>' ?></th>
    </tr>
  </table>
</div>
<div>
  <table width="100%" border="1" class="table-success">
   <th class="resimbaslikenboy" colspan="1"><?php echo '<span class="manset_resim">'.$konum4r.'</span>' ?></th>
   <th class="duyurubaslikenboy"><?php echo '<span class="manset_serit">'.$konum4k.'</span>' ?></th>
   <tr>
    <th class="resimkisimenboy"><img class="ximg" src="admin/<?php echo $resim4; ?>"/></th>
    <th class="duyurukisimenboy"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo4.'</font></span>' ?></th>
  </tr>
</table>
</div>
<div>
  <table width="100%" border="1" class="table-success">
   <th class="resimbaslikenboy" colspan="1"><?php echo '<span class="manset_resim">'.$konum5r.'</span>' ?></th>
   <th class="duyurubaslikenboy"><?php echo '<span class="manset_serit">'.$konum5k.'</span>' ?></th>
   <tr>
    <th class="resimkisimenboy"><img class="ximg" src="admin/<?php echo $resim5; ?>"/></th>
    <th class="duyurukisimenboy"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo5.'</font></span>' ?></th>
  </tr>
</table>
</div>
<div>
  <table width="100%" border="1" class="table-success">
   <th class="resimbaslikenboy" colspan="1"><?php echo '<span class="manset_resim">'.$konum6r.'</span>' ?></th>
   <th class="duyurubaslikenboy"><?php echo '<span class="manset_serit">'.$konum6k.'</span>' ?></th>
   <tr>
    <th class="resimkisimenboy"><img class="ximg" src="admin/<?php echo $resim6; ?>"/></th>
    <th class="duyurukisimenboy"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo6.'</font></span>' ?></th>
  </tr>
</table>
</div>
<div>
  <table width="100%" border="1" class="table-success">
   <th class="resimbaslikenboy" colspan="1"><?php echo '<span class="manset_resim">'.$konum7r.'</span>' ?></th>
   <th class="duyurubaslikenboy"><?php echo '<span class="manset_serit">'.$konum7k.'</span>' ?></th>
   <tr>
    <th class="resimkisimenboy"><img class="ximg" src="admin/<?php echo $resim7; ?>"/></th>
    <th class="duyurukisimenboy"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo7.'</font></span>' ?></th>
  </tr>
</table>
</div>
<div>
  <table width="100%" border="1" class="table-success">
   <th class="resimbaslikenboy" colspan="1"><?php echo '<span class="manset_resim">'.$konum8r.'</span>' ?></th>
   <th class="duyurubaslikenboy"><?php echo '<span class="manset_serit">'.$konum8k.'</span>' ?></th>
   <tr>
    <th class="resimkisimenboy"><img class="ximg" src="admin/<?php echo $resim8; ?>"/></th>
    <th class="duyurukisimenboy"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo8.'</font></span>' ?></th>
  </tr>
</table>
</div>
<div>
  <table width="100%" border="1" class="table-success">
   <th class="resimbaslikenboy" colspan="1"><?php echo '<span class="manset_resim">'.$konum9r.'</span>' ?></th>
   <th class="duyurubaslikenboy"><?php echo '<span class="manset_serit">'.$konum9k.'</span>' ?></th>
  <tr>
    <th class="resimkisimenboy"><img class="ximg" src="admin/<?php echo $resim9; ?>"/></th>
    <th class="duyurukisimenboy"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo9.'</font></span>' ?></th>
  </tr>
</table>
</div>
<div>
  <table width="100%" border="1" class="table-success">
   <th class="resimbaslikenboy" colspan="1"><?php echo '<span class="manset_resim">'.$konum10r.'</span>' ?></th>
   <th class="duyurubaslikenboy"><?php echo '<span class="manset_serit">'.$konum10k.'</span>' ?></th>
   <tr>
    <th class="resimkisimenboy"><img class="ximg" src="admin/<?php echo $resim10; ?>"/></th>
    <th class="duyurukisimenboy"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo10.'</font></span>' ?></th>
  </tr>
</table>
</div>
</div>
<table border="1" bordercolor="orange" width="100%"><th class="resimbaslikenboy" align="center"><div class="sayi"><span id="sayfa_no"></span></div></th><th align="center"><div id="hint">
  <div><table border="0"><th width="70%" height="10%"><?php echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum1s.'</span>' ?></th></table></div>
    <div><table border="0"><th width="70%" height="10%"><?php echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum2s.'</span>' ?></th></table></div>
      <div><table border="0"><th width="70%" height="10%"><?php echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum3s.'</span>' ?></th></table></div>
        <div><table border="0"><th width="70%" height="10%"><?php echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum4s.'</span>' ?></th></table></div>
         <div><table border="0"><th width="70%" height="10%"><?php echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum5s.'</span>' ?></th></table></div>
           <div><table border="0"><th width="70%" height="10%"><?php echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum6s.'</span>' ?></th></table></div>
             <div><table border="0"><th width="70%" height="10%"><?php echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum7s.'</span>' ?></th></table></div>
               <div><table border="0"><th width="70%" height="10%"><?php echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum8s.'</span>' ?></th></table></div>
                 <div><table border="0"><th width="70%" height="10%"><?php echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum9s.'</span>' ?></th></table></div>
                   <div><table border="0"><th width="70%" height="10%"><?php echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum10s.'</span>' ?></th></table></div></div></th></table>
                    <?php 
                    include('connect.php');
                    $ek="Ekli Dosya:";
                    $sorgum="select yaziid,date_format(tarih, '%d.%m.%Y')  AS tarih1,konu,icerik,bilgi,dosya from duyuru order by yaziid desc";
                    $basla=mysqli_query($dbh,$sorgum);
                    $ksay=mysqli_num_rows($basla);
                    echo '<div class="renk">';
                    echo'<table class="table table-success table-sm table-responsive-sm table-bordered table-hover" style="border-color:black;">';
                    for($i=0; $i<$ksay; $i++)
                    {
                      $sonucum=mysqli_fetch_array($basla); 
                      $cumle=$sonucum['icerik'];
                      $yaziid=$sonucum['yaziid'];  
                      $bilgisi= $sonucum['bilgi'];
                      ?>
                      <?php
    if($i%1==0){ //yan yana ka� resim istiyorsan 2 yarine o rakami yaz  
      ?>
      <tr bgColor="#CCFFCC" onMouseover="this.bgColor='#dcdcdc';" onMouseout="this.bgColor='#CCFFCC';">
      <?php
      }
      $cumle=str_replace("\n","<br />",$cumle);  
      if($sonucum['dosya']!=NULL){
$link='</font><a href="admin/'.$sonucum['dosya'].'" style="text-decoration:none;"><font color="blue" style="font-weight:bold"><i class="text-danger fa fa-download" fa-lg aria-hidden="true"></i> '.$bilgisi.'</div></font></a>';
}else{
  $link="...";
}
if(strlen($cumle)>300)
{
  $bol=metin_bol($cumle,0,300,$yaziid);
  $alo=$bol.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link ;
}else{
  $alo=$cumle.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link ;
}
?>
<th width="6%" align="center" style="border-color:black;"><?php echo '<span class="text-danger" style="font-weight:bold"><a href="yazilar.php?yaziid='.$yaziid.'"  style="color:red;display:block; text-decoration:none;" align="center">'.$sonucum['tarih1'].'</a></span>' ; ?></th>
<th width="66%" align="left" style="border-color: black;"><?php echo '<span><a href="yazilar.php?yaziid='.$yaziid.'"  style="display:block; text-decoration:none;">&nbsp; &nbsp;<font color="blue">'.$sonucum['konu'].'</font></a></span>' ; ?></th>
<th width="28%" align="left" style="border-color: black;"><?php echo '<span>&nbsp; &nbsp;<font color="red" style="font-weight:bold">'.$link.'</span>' ; ?></th>
  <?php
if($i%1==1) //burayida yan yana ka� resim istiyorsan onun  1 eksigine esitle yani 3 sira i�in $i%3==2 gibi
{
  echo '</tr>';
}
}
echo '</table>'; 
echo '</div>';
?>
</tr>
</table>
          </div>
  </div>
</div>  
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
<script src="bootstrap-4/popper.js"></script>
<script src="bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>