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

include('connect.php');

$ilidi=$_GET['selectil'];
$ilceidi=0;
if($ilidi==NULL){
	$ilidi=0;
	$ilceidi=0;	
	?><input type="hidden" id="ilceidi" value="0">
<?php
}else{
$ilceidi=$_GET['selectilce'];
}

if($ilidi==0 and $ilceidi==0){
	?>
	<div class="jumbotron bg-warning text-center"><strong>Önce ili Seçiniz</strong></div>
	<?php

/*$kriter="select * from adres order by adrid";
$sorgu=mysqli_query($dbh,$kriter);
$sonuc=mysqli_num_rows($sorgu);*/
?>
<?php
}else if($ilidi>0 and $ilceidi==0){
	?>
	<div class="jumbotron bg-warning text-center"><strong>ilçe Seçiniz</strong></div>
	<?php
/*$kriter="select * from adres where(ilid='$ilidi') order by adrid";
$sorgu=mysqli_query($dbh,$kriter);
$sonuc=mysqli_num_rows($sorgu);*/
?>
<?php
}else{
$kriter="select * from adres where(ilid='$ilidi' and ilceid='$ilceidi') order by adrid";
$sorgu=mysqli_query($dbh,$kriter);
$sonuc=mysqli_num_rows($sorgu);
?>
<div class="col-md-12 text-center">
<form action="excelmysqli/adresilcexls.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">
<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" size="0" value="<?php echo $ilidi ;?>">
<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" size="0" value="<?php echo $ilceidi ;?>">
<input name="SUBMIT" type="SUBMIT"  class="btn btn-success btn-sm mb-1" value="Excele Aktar">
</form>
</div>
<?php
include("assets/sablon/anadizin/adres_tablo_sorgu.php");
}
@mysqli_close($dbh);

?>
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	  <script>
				var ilceidi=$("#ilceidi").val();
				//alert(ilceidi);
				console.log(ilceidi);
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

