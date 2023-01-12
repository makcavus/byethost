<?php
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}
include("assets/sablon/anadizin/header.php");
include("assets/sablon/anadizin/sidebar.php");
?>
<link rel="stylesheet" href="assets/css/tablo_form_styles.css"> 
<?php
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
$date = new DateTime();
$bugun=$date->format('d.m.Y');
$oncekihafta=date("d.m.Y",strtotime("-0 day",strtotime($bugun)));
$oncekihafta1=date("d.m.Y",strtotime("-1 day",strtotime($bugun)));
$oncekihafta2=date("d.m.Y",strtotime("-2 day",strtotime($bugun)));
$oncekihafta3=date("d.m.Y",strtotime("-3 day",strtotime($bugun)));
$oncekihafta4=date("d.m.Y",strtotime("-4 day",strtotime($bugun)));
$oncekihafta5=date("d.m.Y",strtotime("-5 day",strtotime($bugun)));
$oncekihafta6=date("d.m.Y",strtotime("-6 day",strtotime($bugun)));
$formsorgusay="select * from gerekli order by birim_idi";
$baslasay=mysqli_query($dbh,$formsorgusay);
$say=mysqli_num_rows($baslasay);
if($say==0){
$say="";
}else{
$say=$say;
}
$formsorgu="select count(dosya_tarihi) as tarih from gerekli where(dosya_tarihi='$oncekihafta' or dosya_tarihi='$oncekihafta1' or dosya_tarihi='$oncekihafta2' or dosya_tarihi='$oncekihafta3' or dosya_tarihi='$oncekihafta4' or dosya_tarihi='$oncekihafta5' or dosya_tarihi='$oncekihafta6')";
$basla=mysqli_query($dbh,$formsorgu);
while($baslatar=mysqli_fetch_array($basla)){
if($baslatar['tarih']==0){
$yeni="";
}else{
$yeni='<i class="fa fa-lg fa-hacker-news" aria-hidden="true"></i>';
} }
 echo '<a href="gerekli_formlar.php?birim_idi=0" class="btn btn-sm btn-success text-left text-warning" style="display:block;">
 <i class="fa fa-folder-open-o fa-sm" aria-hidden="true"></i>
 <strong> '.$tumu.' </strong> <span class="badge badge-info" style="border-radius:20px;">'.$say.'</span> '.$yeni.'</a>'; ?></td>
</tr>
<?php
$birimsorgu="select distinct * from birim order by birim_ad";
$basla=mysqli_query($dbh,$birimsorgu);
while($sonucum=mysqli_fetch_array($basla)){
$birim_idim=$sonucum['birim_id'];
$birim_adim=$sonucum['birim_ad'];
?>
<tr bgcolor="#CCFFCC" onMouseover="this.bgColor='#dcdcdc';" onMouseout="this.bgColor='#CCFFCC';">
<td><?php
$formsorgux="select * from gerekli where(birim_idi='$birim_idim')order by birim_idi";
$baslax=mysqli_query($dbh,$formsorgux);
$sayx=mysqli_num_rows($baslax);
if($sayx==0){
$sayx="";
}else{
$sayx=$sayx;
}
$formsorguy="select count(dosya_tarihi) as tarih from gerekli where(birim_idi='$birim_idim' and dosya_tarihi='$oncekihafta' or birim_idi='$birim_idim' 
and dosya_tarihi='$oncekihafta1' or birim_idi='$birim_idim' and dosya_tarihi='$oncekihafta2' or birim_idi='$birim_idim' and dosya_tarihi='$oncekihafta3' 
or birim_idi='$birim_idim' and dosya_tarihi='$oncekihafta4' or birim_idi='$birim_idim' and dosya_tarihi='$oncekihafta5' or birim_idi='$birim_idim' and dosya_tarihi='$oncekihafta6')";
$sorgu=mysqli_query($dbh,$formsorguy);
while($tarihsay=mysqli_fetch_array($sorgu)){
//echo "x-".$tarihsay['tarih']."-x";
if($tarihsay['tarih']==0){
$sayy="";
}else{
$sayy='<i class="fa fa-lg fa-hacker-news" aria-hidden="true"></i>';
}
 echo '<a href="gerekli_formlar.php?birim_idi='.$birim_idim.'" class="btn btn-success btn-sm text-left text-warning" style="display:block;">
 <i class="fa fa-folder-open-o fa-sm" aria-hidden="true"></i>
 <strong> '.$birim_adim.' </strong> <span class="badge badge-info" style="border-radius:20px;">'.$sayx.'</span>'.$sayy.'</a>'; ?></td>
</tr>
<?php
}}
?>
</tbody>
</table>
</div>
      <div id="sonuciletiyaz"></div>
    </div>
  </div>
</div>  
</div>
<!-- Optional JavaScript -->
<?php
    include("assets/sablon/anadizin/footer.php");
?>
<script type="text/javascript" src="iletikaydet.js">
</script>
  <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="jquery-latest.pack.js"></script>
  <script type="text/javascript" src="iletikaydet.js"></script>