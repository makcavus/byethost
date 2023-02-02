<?php
function ilkBuyukTR($str){
	$str = mb_strtolower($str);
return str_replace('i̇','i',ltrim(mb_convert_case(str_replace(array('i','I'),array('İ','ı'),$str),MB_CASE_TITLE,'UTF-8')));
}
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}
?>
<link rel="stylesheet" href="assets/css/013Bstyle.css">
<script type="text/javascript" src="kaydet.js"></script>
<script type="text/javascript" src="jquery-latest.min.js"></script> 
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script>
<script type="text/javascript" src="assets/js/mask_hightlight.js"></script>
<?php
include('../con_023.php');
include('../con_102.php');
include('frm013alanlari.php');
include("tanimveyetkiler.php");
$form_klasoru=basename(dirname(__FILE__));
$ilgelen=$_GET['selectil'];
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$iladine=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucumne=mysqli_fetch_array($iladine)){
$ilinadine=$ilsonucumne['ilad'];
}
$ilceadine=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucumne=mysqli_fetch_array($ilceadine)){
$ilceninadine=$ilcesonucumne['ilcead'];
}
if(substr($ocgelen,-3,3)==$bakanlikyetki){
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
//echo $kurumyetki;
//echo $ilyetki;
}
}elseif(substr($ocgelen,-3,3)==$ilyetki){
	//echo "doğru....";
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and right(socad,3)='$ilyetki')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
  $frm102yetkili=@mysqli_query($dbh102,"select form,il_aheadi,il_aheunvani,il_aseadi,il_aseunvani from birim where(form='$form_klasoru')");
  while($frm102yetkilisi=mysqli_fetch_array($frm102yetkili)){
    $asead=$frm102yetkilisi['il_aseadi'];
    $aseunv=$frm102yetkilisi['il_aseunvani'];
    $drad=$frm102yetkilisi['il_aheadi'];
    $ahno="";
            $ahkod=ilkBuyukTR($ilinadine)." ".$frm102yetkilisi['il_aheunvani'];
}
  $asmninadine=$satir['asmadi'];
  /*$drad=$satir['dradi'];
  $asead=$satir['aseadi'];
  $aseunv=$satir['aseunvan'];

//@mysqli_close($conn);
  $unvan=$satir['socad'];
  if(substr($ocgelen,-3,3)==$kurumyetki){
      $unvan='Sorumlu Tabibi';
  }elseif(substr($ocgelen,-3,3)==$ilyetki){
      $unvan=$ilinadine. ' İl Sağlık Müdürü';
  }else{
      $unvan=$ocgelen. ' Nolu Aile Hekimi';
  }
  $drad=$satir['dradi'];
  $asead=$satir['aseadi'];
  $aseunv=$satir['aseunvan'];*/

//echo $kurumyetki;
//echo $ilyetki;
}
}elseif(substr($ocgelen,-3,3)==$ilceyetki){
  //echo "doğru....";
  $sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and right(socad,3)='$ilceyetki')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
  while($satir=mysqli_fetch_array($sonucak))
  {
      $frm102yetkili=@mysqli_query($dbh102,"select form,ilce_aheadi,ilce_aheunvani,ilce_aseadi,ilce_aseunvani from birim where(form='$form_klasoru')");
        while($frm102yetkilisi=mysqli_fetch_array($frm102yetkili)){
            $asead=$frm102yetkilisi['ilce_aseadi'];
            $aseunv=$frm102yetkilisi['ilce_aseunvani'];
            $drad=$frm102yetkilisi['ilce_aheadi'];
            $ahno="";
            $ahkod=ilkBuyukTR($ilceninadine)." ".$frm102yetkilisi['ilce_aheunvani'];
        }
        $asmninadine=$satir['asmadi'];
        //$drad=$satir['dradi'];
        //$asead=$satir['aseadi'];
        //$aseunv=$satir['aseunvan'];
//@mysqli_close($conn);
       /* $unvan=$satir['socad'];
        if(substr($ocgelen,-3,3)==$kurumyetki){
            $unvan=$ilceninadine.' İlçe Sağlık Müdürü';
        }elseif(substr($ocgelen,-3,3)==$ilyetki){
            $unvan=$ilinadine. ' İl Sağlık Müdürü';
        }else{
            $unvan=$ocgelen.' Nolu Aile Hekimi';
        }*/
        $asmninadine=$satir['asmadi'];
        //$drad=$satir['dradi'];
        //$asead=$satir['aseadi'];
        //$aseunv=$satir['aseunvan'];
  }
}elseif(substr($ocgelen,-3,3)==$kurumyetki){
	//echo "doğru....";
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and right(socad,3)='$kurumyetki')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
  $frm102yetkili=@mysqli_query($dbh102,"select form,ilce_aheadi,ilce_aheunvani,ilce_aseadi,ilce_aseunvani from birim where(form='$form_klasoru')");
  while($frm102yetkilisi=mysqli_fetch_array($frm102yetkili)){
      $asead=$frm102yetkilisi['ilce_aseadi'];
      $aseunv=$frm102yetkilisi['ilce_aseunvani'];
      $drad=$frm102yetkilisi['ilce_aheadi'];
      $ahno="";
      $ahkod=ilkBuyukTR($ilceninadine)." ".$frm102yetkilisi['ilce_aheunvani'];
  }
  $asmninadine=$satir['asmadi'];
  //$drad=$satir['dradi'];
  //$asead=$satir['aseadi'];
  //$aseunv=$satir['aseunvan'];
//@mysqli_close($conn);
 /* $unvan=$satir['socad'];
  if(substr($ocgelen,-3,3)==$kurumyetki){
      $unvan=$ilceninadine.' İlçe Sağlık Müdürü';
  }elseif(substr($ocgelen,-3,3)==$ilyetki){
      $unvan=$ilinadine. ' İl Sağlık Müdürü';
  }else{
      $unvan=$ocgelen.' Nolu Aile Hekimi';
  }*/
  $asmninadine=$satir['asmadi'];
  //$drad=$satir['dradi'];
  //$asead=$satir['aseadi'];
  //$aseunv=$satir['aseunvan'];
}
	}else{
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
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
}
?>
<div id="sonuckay"><form name="girdiekle" action="javascript:void(0)" method="get" onKeyUp="highlight(event)" onClick="highlight(event)">
<table class="table table-responsive-sm table-sm">
  <thead>
  <tr>
  <th class="bg-warning text-center" width="30%" colspan="3"><a class="btn btn-sm btn-success" style="width:100px" href=# onclick="kontrol();" title="İptal"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a></th>
      <th class="bg-primary text-center" width="40%" colspan="3"><h6 style="color:#FFFF00;"><strong>Yeni Kayıt Ekleme Ekranı</strong></h6></th>
    <th class="bg-warning text-center" width="30%" colspan="3"><a class="btn btn-sm btn-info" style="width:100px" href="#" tabindex="1" title="Kaydet" onclick="girdiyiekle();"><i class="fa fa-floppy-o" aria-hidden="true"></i> Kaydet</a></th>
    <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>" />
      <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>" />
      <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>" />
      <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>" />
      <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen ;?>" />
      </tr>
	  </thead>
    </table>
        <?php
        include('assets/013B_sablonlar/013Bkayit_sablonu.php');
        include('assets/013B_sablonlar/gizli_input_kayit.php');
        ?>
    <table class="table table-responsive-sm table-sm form013ustaralar" style="background-color:#CCFFFF">
   <thead>
     <tr>
       <th class="border border-primary" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Adı Soyadı</th>
       <th class="border border-primary"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input class="form-control form-control-sm text-center border-0" name="v173"  type="text" value="<?php echo $asead ; ?>" size="40" tabindex="173">
       </div></th>
       <th width="27%" rowspan="4" align="left" class="border border-0 align-middle text-center"><a class="btn btn-sm btn-success" style="width:100px" href=# onclick="kontrol();" title="İptal"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a><br>
       <a class="btn btn-sm btn-info mt-3" style="width:100px" href="#" tabindex="179" title="Kaydet" onclick="girdiyiekle();"><i class="fa fa-floppy-o" aria-hidden="true"></i> Kaydet</a></th>
       <th class="border border-primary" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Adı Soyadı</th>
       <th class="border border-primary" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input class="form-control form-control-sm text-center border-0" name="v176"  type="text" value="<?php echo $drad ; ?>" size="40" tabindex="176">
       </div></th>
     </tr>
     <tr>
       <th class="border border-primary" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Ünvanı</th>
       <th class="border border-primary"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input class="form-control form-control-sm text-center border-0" name="v174"  type="text" value="<?php echo $aseunv ; ?>" size="40" tabindex="174">
       </div></th>
       <th class="border border-primary" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Ünvanı</th>
	   <th class="border border-primary" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input class="form-control form-control-sm text-center border-0" name="v177"  type="text" value="<?php echo $ahkod.' '.$ahno ;?>" size="40" tabindex="177"></div></th>
     </tr>
     <tr>
       <?php
   $a=Date("d/m/Y");
   ?>
       <th class="border border-primary" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Tarih</th>
       <th class="border border-primary"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input id="masktest" class="form-control form-control-sm text-center border-0" name="v175"  type="text" value=<?php echo $a; ?> size="40" tabindex="175">
       </div></th>
       <th class="border border-primary" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Tarih</th>
       <th class="border border-primary" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input id="masktest1" class="form-control form-control-sm text-center border-0" name="v178"  type="text" value="<?php echo $a;?>" size="40" tabindex="178">
       </div></th>
     </tr>
     <tr>
       <th class="border border-primary" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;İmza</th>
       <th class="border border-primary"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
       <th class="border border-primary" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;İmza</th>
       <th class="border border-primary" width="27%"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
     </tr>
	 </thead>
   </table>
</form>


