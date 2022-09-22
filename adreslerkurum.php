<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<SCRIPT LANGUAGE="JavaScript">
function expandingWindow(website,yukseklik,genislik) {
// Dikine a��lma hizi (Y�ksek de�er=h�zl�)
var heightspeed = 2;
// Geni�lemesine a��lma hizi (Y�ksek de�er=h�zl�)
var widthspeed = 7;
// Soldan Ka� Piksel solda g�r�necek
var leftdist = 0;
// Yukar�dan Ka� Piksel a�a��da g�r�necek
var topdist = 0; 
if (document.all) {
var winwidth = genislik;
var winheight = yukseklik;
var sizer = window.open("","_blank","left=" + leftdist + ",top=" + topdist + ",width=1,height=1,scrollbars=yes, location=yes, status=yes, toolbar=yes,menubar=yes");
for (sizeheight = 1; sizeheight < winheight; sizeheight += heightspeed) {
sizer.resizeTo("1", sizeheight);
}
for (sizewidth = 1; sizewidth < winwidth; sizewidth += widthspeed) {
sizer.resizeTo(sizewidth, sizeheight);
}
sizer.location = website;
}
else
window.location = website;
}
//  End -->
</script>
<script  language="JavaScript">
function penac(theURL,winName,features) {
  	window.open(theURL,winName,features);
}
// -->
 </script>
<?php
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
include('connect.php');
//include('form013/frm013alanlari.php');
$ilidi= $_GET['selectil'];
if($ilidi==NULL){
	$ilceidi=0;
}else{
	$ilceidi=$_GET['selectilce'];
}
$kurumidi=0;
if($ilidi>0 and $ilceidi==0){
	$ilidi= $_GET['selectil'];
	$ilceidi=0;
	$kurumidi=0;
}else
if($ilidi==NULL or $ilceidi<1){
	$ilidi=0;
	$ilceidi=0;	
    $kurumidi=0;
}else{
	$ilidi= $_GET['selectil'];
	$ilceidi=$_GET['selectilce'];
	$kurumidi=$_GET['selectoc'];
}
?>
<input type="hidden" id="ilceidi" value="<?php echo $ilceidi; ?>">
<?php
if($ilidi==0 and $ilceidi==0 and $kurumidi==0){
/*$kriter="select * from adres order by adrid";
$sorgu=mysqli_query($dbh,$kriter);
$sonuc=mysqli_num_rows($sorgu);*/
?>
	<div class="jumbotron bg-warning text-center"><strong>Önce ili ve ilçeyi Seçiniz</strong></div>
	<?php

}else if($ilidi>0 and $ilceidi==0 and $kurumidi==0){
/*$kriter="select * from adres where(ilid='$ilidi') order by adrid";
$sorgu=mysqli_query($dbh,$kriter);
$sonuc=mysqli_num_rows($sorgu);*/
?>
	<div class="jumbotron bg-warning text-center"><strong>Önce ilçeyi Seçiniz</strong></div>
	<?php
}else if($ilidi>0 and $ilceidi>0 and $kurumidi==0){
/*$kriter="select * from adres where(ilid='$ilidi') order by adrid";
$sorgu=mysqli_query($dbh,$kriter);
$sonuc=mysqli_num_rows($sorgu);*/
?>
	<div class="jumbotron bg-warning text-center"><strong>Kurum/Kuruluş Seçiniz</strong></div>
	<?php
}else{
$kriter="select * from adres where(ilid='$ilidi' and ilceid='$ilceidi' and adrid='$kurumidi') order by adrid";
$sorgu=mysqli_query($dbh,$kriter);
$sonuc=mysqli_num_rows($sorgu);
include("assets/sablon/anadizin/adres_tablo_sorgu.php");
}
@mysqli_close($dbh);

?>
<!-- Optional JavaScript -->
     			<script>
				var ilceidi=$("#ilceidi").val();
				//alert(ilceidi);
				if(ilceidi==0){
					const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 4000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'warning',
  title: 'Önce il ve ilçeyi seçmelisiniz !!!'
})
				}
			</script>
