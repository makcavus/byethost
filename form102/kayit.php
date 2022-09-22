<?php
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}
?>
<link rel="stylesheet" href="assets/css/form102style.css">
</style>
<script type="text/javaScript" src="kaydet.js"></script>
<script type="text/javascript" src="jquery-latest.min.js"></script> 
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script>
<script type="text/javascript" src="assets/js/mask_hightlight.js"></script>
<?php
include('../con_023.php');
include('../con_102.php');
include('frm102alanlari.php');
include("tanimveyetkiler.php");
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
if(substr($ocgelen,-3,3)==$bakanlikyetki){
	//echo "doğru....";
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and right(socad,3)='$bakanlikyetki')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];

//@mysqli_close($conn);
$ahkod=$satir['socad'];
if(substr($ocgelen,-3,3)==$kurumyetki){
$ahno='Sorumlu Tabibi';
}elseif(substr($ocgelen,-3,3)==$ilyetki){
$ahno='Birim Sorumlusu';
}elseif(substr($ocgelen,-3,3)==$bakanlikyetki){
$ahno='Bakanlık Yetkilisi';
}else{
$ahno='Nolu Aile Hekimi';
}
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
}
}elseif(substr($ocgelen,-3,3)==$ilyetki){
	//echo "doğru....";
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and right(socad,3)='$ilyetki')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];

//@mysqli_close($conn);
$ahkod=$satir['socad'];
if(substr($ocgelen,-3,3)==$kurumyetki){
$ahno='Sorumlu Tabibi';
}elseif(substr($ocgelen,-3,3)==$ilyetki){
$ahno='Birim Sorumlusu';
}else{
$ahno='Nolu Aile Hekimi';
}
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];

//echo $kurumyetki;
//echo $ilyetki;
}
}elseif(substr($ocgelen,-3,3)==$kurumyetki){
	//echo "doğru....";
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and right(socad,3)='$kurumyetki')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
//@mysqli_close($conn);
$ahkod=$satir['socad'];
if(substr($ocgelen,-3,3)==$kurumyetki){
$ahno='Sorumlu Tabibi';
}elseif(substr($ocgelen,-3,3)==$ilyetki){
$ahno='Birim Sorumlusu';
}else{
$ahno='Nolu Aile Hekimi';
}
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
//echo $kurumyetki;
//echo $ilyetki;
}
	}else{
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
  $asmninadine=$satir['asmadi'];
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
$ahkod=$satir['socad'];
if(substr($ocgelen,-3,3)==$kurumyetki){
$ahno='Sorumlu Tabibi';
}elseif(substr($ocgelen,-3,3)==$ilyetki){
$ahno='Birim Sorumlusu';
}else{
$ahno='Nolu Aile Hekimi';
}
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
//echo $kurumyetki;
//echo $ilyetki;
}
}
$iladine=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucumne=mysqli_fetch_array($iladine)){
$ilinadine=$ilsonucumne['ilad'];
}
$ilceadine=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucumne=mysqli_fetch_array($ilceadine)){
$ilceninadine=$ilcesonucumne['ilcead'];
}
?>
<div id="sonuckay"><form class="form" name="girdiekle" action="javascript:void(0)" method="get" onKeyUp="highlight(event)" onClick="highlight(event)">
          <?php
        include('assets/form102_sablonlar/form102kayit_sablonu.php');
        include('assets/form102_sablonlar/gizli_input_kayit.php');
        ?>
   
</form>

<!-- Optional JavaScript -->
